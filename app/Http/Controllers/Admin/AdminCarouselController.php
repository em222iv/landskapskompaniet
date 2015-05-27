<?php namespace App\Http\Controllers\Admin;

use App\Carousel;
use App\Models\ImageHandler;
use App\Http\Requests\CarouselRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Filesystem;
use Request;



class AdminCarouselController extends Controller
{
    protected $carousel;
    protected $imageHandler;

    public function __construct(Carousel $carousel, ImageHandler $imageHandler)
    {
        $this->middleware('auth');
        $this->carousel = $carousel;
        $this->imageHandler = $imageHandler;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $carousels = Carousel::latest()->get();
        return view('admin.carousel.index')->with('carousels', $carousels);
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
        if (Request::hasFile('img')) {
            $file = Input::file('img');
            //$filename = $this->storeImage(public_path() . '/img/carousel/', $file);
            $filename = $this->imageHandler->storeImage('../httpd.www/img/carousel/', $file);
            $input['img'] = 'img/carousel/' . $filename;
            Carousel::create($input);
            return redirect('/admin/carousels');
        } else {
            flash()->error('no picture added');
            return view('admin.carousels.create');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit(Carousel $carousel)
    {
        return view('admin.carousel.edit')->with('carousel', $carousel);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update(Carousel $carousel, CarouselRequest $request)
    {
        $input = $request->all();
        if (Request::hasFile('img')) {
            $file = Input::file('img');

           //$filename = $this->storeImage(public_path() . '/img/carousel/', $file);
            $filename = $this->imageHandler->storeImage('../httpd.www/img/carousel/', $file);
            $input['img'] = 'img/carousel/' . $filename;
            $this->imageHandler->destroyImage($carousel['img']);
            $carousel->update($input);
            return redirect('/admin/carousels');
        } else {
            $input['img'] = $carousel['img'];
            $carousel->update($input);
            return view('admin.carousels.edit');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy(Carousel $carousel)
    {
       $this->imageHandler->destroyImage($carousel->img);
        $carousel->delete();
        return redirect('/admin/carousels');
    }
    /**
     * @param $filepath
     * @param $file
     * @return filename
     */



}
