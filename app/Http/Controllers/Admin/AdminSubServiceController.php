<?php namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\SubService;
use App\Service;
use App\Http\Requests\SubServiceRequest;
use Illuminate\Support\Facades\Input;

use Request;


class AdminSubServiceController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $subservices = SubService::all();
        return view('admin.subService.index')->with('subservices', $subservices);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $services = Service::lists('title', 'id');
        return view('admin.subService.create', compact('services'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(SubServiceRequest $request)
    {
        if (Request::hasFile('img')) {
            $file = Input::file('img');
            $filename = $this->storeImage(public_path() . '/img/subservice/', $file);
            $request['img'] = '/img/subservice/' . $filename;
//        $input['img'] = 'img/service/'.$filename;
            $subservice = SubService::create($request);
            $subservice->services()->attach($request->input('service_list'));
            flash()->success('created');
        } else {
            flash()->error('no picture added');
            return view('admin.subService.create');
        }
        return redirect('/admin/subservice');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit(SubService $subservice)
    {
        $services = Service::lists('title', 'id');
        return view('admin.subService.edit', compact('services', 'subservice'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update(SubService $subservice, SubServiceRequest $request)
    {

        if (Request::hasFile('img')) {
            $file = Input::file('img');
            $filename = $this->storeImage(public_path() . '/img/subservice/', $file);
            $request['img'] = '/img/subservice/' . $filename;
//          $input['img'] = 'img/service/'.$filename;
            $subservice->update($request);
            $subservice->services()->sync($request->input('service_list', []));
        } else {
            $request['img'] = $subservice['img'];
            $subservice->update($request);
            $subservice->services()->sync($request->input('service_list', []));
        }
        return redirect('/admin/subservice');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy(SubService $subservice)
    {
        unlink(public_path() . $subservice['img']);
        //  unlink('../httpd.www/img/service/'.$subservice['img']);
        $subservice->delete();
        return redirect('/admin/subservice');
    }

    /**
     * @param $filepath
     * @param $file
     * @return filename
     */
    private function storeImage($filepath, $file)
    {
        $extension = $file->getClientOriginalExtension();
        $filename = str_random(6) . '.' . $extension;
        $file->move($filepath, $filename);
//        $file->move('../httpd.www/img/service/', $filename);
        return $filename;
    }
}
