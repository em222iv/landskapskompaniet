<?php namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\SubService;
use App\Models\ImageHandler;
use App\Service;
use App\Http\Requests\SubServiceRequest;
use Illuminate\Support\Facades\Input;

use Request;


class AdminSubServiceController extends Controller
{
    /**
     * @var inject subservice and service
     * Controller need authentication
     */
    protected $subservice;
    protected $serivce;
    public function __construct(SubService $subservice, Service $service)
    {
        $this->middleware('auth');
        $this->subservice = $subservice;
        $this->service = $service;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $subservices = $this->subservice->all();
        return view('admin.subService.index')->with('subservices', $subservices);
    }


    /**
     * @return subservice create view with services
     */
    public function create()
    {
        $services = $this->subservice->lists('title', 'id');
        return view('admin.subService.create', compact('services'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param SubServiceRequest $request
     * @return subservice view
     */
    public function store(SubServiceRequest $request)
    {
        $input = $request->all();
        if (Request::hasFile('img')) {
            $file = Input::file('img');
            $filename = ImageHandler::storeImage('subservice', $file);
            $input['img'] = 'img/subservice/'.$filename;
            $subservice = SubService::create($input);
            $this->sync($subservice,$request);
            flash()->success('created');
        } else {
            flash()->error('no picture added');
            return view('admin.subService.create');
        }
        return redirect('/admin/subservice');
        flash()->success('Skapad!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param SubService $subservice
     * @return subservice view
     */
    public function edit(SubService $subservice)
    {
        $services = $this->service->lists('title', 'id');
        return view('admin.subService.edit', compact('services', 'subservice'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param SubService $subservice
     * @param SubServiceRequest $request
     * @return subservice view
     */
    public function update(SubService $subservice, SubServiceRequest $request)
    {
        $input = $request->all();
        if (Request::hasFile('img')) {
            $file = Input::file('img');
            $filename = ImageHandler::storeImage('subservice', $file);
            $input['img'] = 'img/subservice/' . $filename;
            ImageHandler::destroyImage($subservice['img']);
            $subservice->update($input);
            $this->sync($subservice,$request);
        } else {
            $input['img'] = $subservice['img'];
            $subservice->update($input);
            $this->sync($subservice,$request);
        }
        return redirect('/admin/subservice');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param SubService $subservice
     * return subservice view
     */
    public function destroy(SubService $subservice)
    {
        ImageHandler::destroyImage($subservice['img']);
        $subservice->delete();
        return redirect('/admin/subservice');
    }

    /**
     * sync parameter services
     */
    private function sync($model,$request) {
        $model->services()->sync($request->input('service_list', []));

    }
}
