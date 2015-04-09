<?php namespace App\Http\Controllers\Admin;

use App\Carousel;
use App\Http\Requests\CarouselRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
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

        $input = $request->all();

        //file
        $path = Input::file('img-path');
        //name
        $img = Request::get('img');


        $extension = pathinfo($path->getClientOriginalName(), PATHINFO_EXTENSION);

        $filename = str_random(4).'-'.str_slug($img).'.'.$extension;
        $file = file_get_contents($path);
        file_put_contents(public_path().'/img/carousel/'.$filename,$file);


        $input['img-path'] = 'img/carousel/'.$filename;
        Carousel::create($input);
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
        $input = $request->all();
        //file
        $path = Input::file('img-path');
        //name
        $img = Request::get('img');
        $extension = pathinfo($path->getClientOriginalName(), PATHINFO_EXTENSION);
        $filename = str_random(4).'-'.str_slug($img).'.'.$extension;
        $file = file_get_contents($path);
        file_put_contents(public_path().'/img/carousel/'.$filename,$file);
        $input['img-path'] = 'img/carousel/'.$filename;
        $carousel->update($input);
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
