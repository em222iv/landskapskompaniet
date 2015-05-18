<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Service;
use Illuminate\Support\Facades\Input;
use App\SubService;
use App\Http\Requests\ServiceRequest;
use Request;


class AdminServiceController extends Controller
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
        $services = Service::all();
        return view('admin.service.index')->with('services', $services);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $subservices = SubService::lists('title', 'id');
        return view('admin.service.create', compact('subservices'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(ServiceRequest $request)
    {
        $input = $request->all();
        if (Request::hasFile('img')) {
            $file = Input::file('img');

            //$filename = $this->storeImage(public_path() . '/img/service/', $file);
            $filename = $this->storeImage('../httpd.www/img/service/', $file);

            $input['img'] = 'img/service/' . $filename;
            $service = Service::create($input);
            $this->sync($service,$request);
        } else {
            flash()->error('no picture added');
            return view('admin.service.create');
        }
        return redirect('/admin/service');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit(Service $service)
    {
        $subservices = SubService::lists('title', 'id');
        return view('admin.service.edit', compact('subservices', 'service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update(Service $service, ServiceRequest $request)
    {
        $input = $request->all();
        if (Request::hasFile('img')) {
            $file = Input::file('img');
           // $filename = $this->storeImage(public_path() . '/img/service/', $file);
            $filename = $this->storeImage('../httpd.www/img/service/', $file);
            $input['img'] = 'img/service/' . $filename;
            $this->destroyImage($service['img']);
            $this->sync($service,$request);
            $service->update($input);
        } else {
            $input['img'] = $service['img'];
            $service->update($input);
            $this->sync($service,$request);
        }
        return redirect('/admin/service');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy(Service $service)
    {
        $this->destroyImage($service['img']);
        //  unlink('../httpd.www/img/service/'.$service['img']);
        $service->delete();
        return redirect('/admin/service');
    }
    /**
     * sync parameter subservices
     */
    private function sync($model,$request) {

        $model->sub_services()->sync($request->input('sub_list',[]));

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
        return $filename;
    }
    private function destroyImage($image)
    {
        //unlink(public_path() . $image);
        unlink($image);
    }

}
