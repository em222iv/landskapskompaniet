<?php namespace App\Http\Controllers\Admin;

use App\Carousel;
use App\Http\Requests\CarouselRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Filesystem;
use Request;

class CarouselController extends Controller
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
        if (Request::hasFile('img-path')) {
            //file
            $file = Input::file('img-path');
           // $filename = $this->storeImage(public_path() . '/img/carousel/', $file);
            $filename = $this->storeImage('../httpd.www/img/carousel/', $file);
            $input['img-path'] = 'img/carousel/' . $filename;
            Carousel::create($request->all());
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
        if (Request::hasFile('img-path')) {
            $file = Input::file('img-path');
           // $filename = $this->storeImage(public_path() . '/img/carousel/', $file);
            $filename = $this->storeImage('../httpd.www/img/carousel/', $file);
            $request['img-path'] = 'img/carousel/' . $filename;
            $this->destroyImage($carousel['img-path']);
            $carousel->update($request->all());
            return redirect('/admin/carousels');
        } else {
            $request['img-path'] = $carousel['img-path'];
            $carousel->update($request->all());
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
       // unlink(public_path() . $carousel['img-path']);
          unlink('../httpd.www/img/service/'.$carousel['img-path']);
        $carousel->delete();
        return redirect('/admin/carousels');
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
        $file->move($filepath, $filename);;
        return $filename;
    }
    private function destroyImage($image)
    {
        // unlink(public_path() . $image);
        unlink('../httpd.www/img/carousel/'.$image);
    }

}
