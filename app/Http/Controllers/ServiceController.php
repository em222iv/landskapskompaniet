<?php namespace App\Http\Controllers;

use App\Image;
use App\Service;
use Request;

class ServiceController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $services = Service::all();
        return view('pages.services')->with('services',$services);
    }
    public function show($name)
    {
        $services = Service::all();
        $service = Service::where('title', '=', $name)->first();

        $serviceData = array(
            'services'  => $services,
            'service' => $service
        );

        return view('pages.service')->with('data',$serviceData);
    }
}
