<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\ImageHandler;
use App\Service;
use Illuminate\Support\Facades\Input;
use App\SubService;
use App\Http\Requests\ServiceRequest;
use Request;

class AdminServiceController extends Controller
{
    /**
     * @var inject service and subservice
     * Controller needs authentication
     */
    protected $service;
    protected $subservice;
    public function __construct(Service $service,SubService $subService)
    {
        $this->middleware('auth');
        $this->service = $service;
        $this->subservice = $subService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $services = $this->service->all();
        return view('admin.service.index')->with('services', $services);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return create view with subservices
     */
    public function create()
    {
        $subservices = $this->service->lists('title', 'id');
        return view('admin.service.create', compact('subservices'));
    }

    /**
     * Store a newly created resource in storage.
     * @param ServiceRequest $request
     * @return service view if correct/else back to create
     */
    public function store(ServiceRequest $request)
    {
        $input = $request->all();
        if (Request::hasFile('img'))
        {
            $file = Input::file('img');
            $filename = ImageHandler::storeImage('service', $file);
            $input['img'] = '/img/service/' . $filename;
            $service = Service::create($input);
            $this->sync($service,$request);
        } else
        {
            flash()->error('Ingen bild vald');
            return view('admin.service.create');
        }
        flash()->success('Skapad');
        return redirect('/admin/service');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Service $service
     * @return \Illuminate\View\View
     */
    public function edit(Service $service)
    {
        $subservices = $this->subservice->lists('title', 'id');
        return view('admin.service.edit', compact('subservices', 'service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Service $service
     * @param ServiceRequest $request
     * @return service view
     */
    public function update(Service $service, ServiceRequest $request)
    {
        $input = $request->all();
        if (Request::hasFile('img'))
        {
            $file = Input::file('img');
            $filename = ImageHandler::storeImage('service', $file);
            $input['img'] = '/img/service/' . $filename;
            ImageHandler::destroyImage($service['img']);
            $this->sync($service,$request);
            $service->update($input);
        } else
        {
            $input['img'] = $service['img'];
            $service->update($input);
            $this->sync($service,$request);
        }
        flash()->success('Uppdaterad');
        return redirect('/admin/service');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Service $service
     * calls ImageHandler to detele image file
     * @return caroulse view
     */
    public function destroy(Service $service)
    {
        ImageHandler::destroyImage($service['img']);
        $service->delete();
        flash()->success('Tjänst borttagen');
        return redirect('/admin/service');
    }
    /**
     * sync parameter subservices
     */
    private function sync($model,$request)
    {
        $model->sub_services()->sync($request->input('sub_list',[]));
    }


}
