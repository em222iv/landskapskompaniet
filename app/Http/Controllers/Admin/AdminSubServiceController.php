<?php namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\SubService;
use App\Http\Requests\subServiceRequest;
use Illuminate\Support\Facades\Input;
use Request;



class AdminSubServiceController extends Controller {

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

        return view('admin.subService.index')->with('subservices',$subservices);
    }


    /**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return view('admin.subService.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(subServiceRequest $request)
	{

        $input = $request->all();
        //file

        if (Request::hasFile('img')){
        $path = Input::file('img');

        $extension = pathinfo($path->getClientOriginalName(), PATHINFO_EXTENSION);

        $filename = str_random(4).'-'.str_slug($input['head-title']).'.'.$extension;
        $file = file_get_contents($path);
        file_put_contents(public_path().'/img/subservice/'.$filename,$file);
        //file_put_contents('../httpd.www/img/subservice/'.$filename,$file);

        $input['img'] = '/img/subservice/'.$filename;
        // $input['img'] = 'img/service/'.$filename;
        SubService::create($input);
        flash()->success('created');
        return redirect('/admin/subservice');
        }else {
            flash()->error('no picture added');
            return view('admin.subService.create');
        }

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
        $subservice = SubService::findOrFail($id);
        return view('admin.subService.edit')->with('subservice', $subservice);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id,subServiceRequest $request)
	{
        $input = $request->all();
        $subservice = SubService::findOrFail($id);
        if (Request::hasFile('img')){
            $path = Input::file('img');
            $extension = pathinfo($path->getClientOriginalName(), PATHINFO_EXTENSION);
            $filename = str_random(4).'-'.str_slug($input['head-title']).'.'.$extension;
            $file = file_get_contents($path);
            file_put_contents(public_path().'/img/service/'.$filename,$file);
            // file_put_contents('../httpd.www/img/service/'.$filename,$file);
            $input['img'] = '/img/service/'.$filename;
            $subservice->update($input);
        return redirect('/admin/subservice');
        }else {
            $input['img'] = $subservice['img'];
            $subservice->update($input);
            return view('admin.subService');
        }

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        $subservice = SubService::findOrFail($id);
        $subservice->delete();
        return redirect('/admin/subservice');
	}

}
