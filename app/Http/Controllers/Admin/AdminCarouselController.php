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
    /**
     * @var inject carousel
     * Controller need authentication
     */
    protected $carousel;
    public function __construct(Carousel $carousel)
    {
        $this->middleware('auth');
        $this->carousel = $carousel;
    }

    /**
     * Display a listing of the resource.
     *
     * @return slider view
     */
    public function index()
    {
        $carousels = Carousel::latest()->get();
        return view('admin.carousel.index')->with('carousels', $carousels);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return carousel create view
     */
    public function create()
    {
        return view('admin.carousel.create');
    }

    /**
     * Store newly created Carousel
     * @param CarouselRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|\Illuminate\View\View
     */
    public function store(CarouselRequest $request)
    {
        $input = $request->all();
        if (Request::hasFile('img'))
        {
            $file = Input::file('img');
            $filename = ImageHandler::storeImage('carousel', $file);
            $input['img'] = '/img/carousel/' . $filename;
            Carousel::create($input);
        } else
        {
            flash()->error('Ingen bild vald');
            return view('admin.carousel.create');
        }
        flash()->error('Skapad');
        return redirect('/admin/carousels');
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
     * @param  Carousel $carousel, CarouselRequests
     * @return carousel view
     */
    public function update(Carousel $carousel, CarouselRequest $request)
    {
        $input = $request->all();
        if (Request::hasFile('img'))
        {
            $file = Input::file('img');
            $filename = ImageHandler::storeImage('carousel', $file);
            ImageHandler::destroyImage($carousel['img']);
            $input['img'] = '/img/carousel/' . $filename;
            $carousel->update($input);
        } else
        {
            $input['img'] = $carousel['img'];
            $carousel->update($input);
        }
        flash()->error('Uppdaterad');
        return redirect('/admin/carousels');
    }

    /**
     * @param Carousel $carousel
     * call ImageHandler to detele image file
     * @return caroulse view
     */
    public function destroy(Carousel $carousel)
    {
        ImageHandler::destroyImage($carousel['img']);
        $carousel->delete();
        return redirect('/admin/carousels');
    }

}
