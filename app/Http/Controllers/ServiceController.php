<?php namespace App\Http\Controllers;

use App\SubService;
use App\Service;
use Request;

class ServiceController extends Controller
{

    /**
     * Display a listing of the resource.
     *Injected with Serivce
     * @return Response
     */
    protected $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }

    /**
     * @return view showing services
     */
    public function index()
    {
        $services = $this->service->all();

        return view('pages.services')->with('services', $services);
    }

    /**
     * @param Service $service
     * @return show service
     */
    public function show(Service $service)
    {
        $services = $this->service->all();

        $serviceData = array(
            'services' => $services,
            'service' => $service
        );
        return view('pages.service')->with('data', $serviceData);
    }
}
