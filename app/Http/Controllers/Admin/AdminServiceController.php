<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Service;
use Illuminate\Support\Facades\Input;
use App\Image;
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
        return view('admin.service.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{

        $input = Request::all();

        //file
        $path = Input::file('img');

        $extension = pathinfo($path->getClientOriginalName(), PATHINFO_EXTENSION);

        $filename = str_random(4).'-'.str_slug($input['title']).'.'.$extension;
        $file = file_get_contents($path);
        file_put_contents(public_path().'/img/service/'.$filename,$file);
        //  file_put_contents('../httpd.www/img/gallery/'.$filename,$file);

        $input['img'] = '/img/service/'.$filename;
       // $input['img'] = 'img/service/'.$filename;
        Service::create($input);
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
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
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
        $service->delete();
        return redirect('/admin/service');
	}

}
