<?php namespace App\Http\Controllers\Admin;

use App\Carousel;
use App\Http\Requests\CarouselRequest;
use App\Http\Controllers\Controller;
use Request;

class CarouselController extends Controller {


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
		$carousels = Carousel::latest()->get();
        return view('admin.carousel.index')->with('carousels',$carousels);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.carousel.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
     * @param CreateCarouselRequest $request
	 * @return Response
	 */
	public function store(CarouselRequest $request)
	{
        Carousel::create($request->all());
        return redirect('/admin/carousels');
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
		$carousel = Carousel::findOrFail($id);
        return view('admin.carousel.edit')->with('carousel',$carousel);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, CarouselRequest $request)
	{
        $carousel = Carousel::findOrFail($id);
        $carousel->update($request->all());
        return redirect('/admin/carousels');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        $carousel = Carousel::findOrFail($id);
        $carousel->delete();
        return redirect('/admin/carousels');
	}

}
