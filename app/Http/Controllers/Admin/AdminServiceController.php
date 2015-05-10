<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Service;
use Illuminate\Support\Facades\Input;
use App\SubService;
use App\Http\Requests\ServiceRequest;
use Request;


class AdminServiceController extends Controller {
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
        $services = Service::all();
        return view('admin.service.index')->with('services',$services);
    }

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        $subservices = SubService::lists('head-title','id');
        return view('admin.service.create',compact('subservices'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(ServiceRequest $request)
	{

        $input = $request->all();

        //file
        if (Request::hasFile('img')){
            $file = Input::file('img');
            $filename= $this->storeImage(public_path().'/img/service/',$file);
            $input['img'] = '/img/service/'.$filename;
            $service = Service::create($input);
            $service->sub_services()->sync($request->input('sub_list'));
        }else {
            flash()->error('no picture added');
            return view('admin.service.create');
        }
        return redirect('/admin/service');
    }

/**
 * Display the specified resource.
 *
 * @param  int  $id
 * @return Response
 */
public function show($id)
{
    //
}

/**
 * Show the form for editing the specified resource.
 *
 * @param  int  $id
 * @return Response
 */
public function edit($id)
{
    $service = Service::findOrFail($id);
    $subservices = SubService::lists('head-title','id');
    return view('admin.service.edit',compact('subservices', 'service'));
}

/**
 * Update the specified resource in storage.
 *
 * @param  int  $id
 * @return Response
 */
public function update($id,ServiceRequest $request)
{
    $service = Service::findOrFail($id);
    $subservices = SubService::all();
    $input = $request->all();
//    $service->sub_services()->detach();
//    foreach ($subservices as $s) {
//        if(isset($input[$s['head-title']])){
//            $service->sub_services()->attach($s->id);
//        }
//    }

    if (Request::hasFile('img')){
        //file
        $file = Input::file('img');
        $filename= $this->storeImage(public_path().'/img/service/',$file);
        $input['img'] = 'img/service/'.$filename;
        $service->update($input);
    }else {
        $input['img'] = $service['img'];
        $service->update($input);
        $service->sub_services()->sync($request->input('sub_list',[]));
        return redirect('admin/service');
    }
    return redirect('/admin/service');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        $service = Service::findOrFail($id);
        unlink(public_path().$service['img']);
        //  unlink('../httpd.www/img/service/'.$service['img']);
        $service->delete();
        return redirect('/admin/service');
	}
    /**
     * @param $filepath
     * @param $file
     * @return filename
     */
    private function storeImage($filepath,$file) {
        $extension = $file->getClientOriginalExtension();
        $filename = str_random(6).'.'.$extension;
        $file->move($filepath, $filename);
//        $file->move('../httpd.www/img/service/', $filename);
        return $filename;
    }

}
