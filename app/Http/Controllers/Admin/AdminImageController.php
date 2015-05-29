<?php namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Http\Requests\GalleryRequest;
use Illuminate\Support\Facades\Input;
use App\Image;
use Request;
use App\Models\ImageHandler;

class AdminImageController extends Controller
{
    /**
     * @var inject image
     * Controller need authentication
     */
    protected $image;
    public function __construct(Image $image)
    {
        $this->middleware('auth');
        $this->image = $image;
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $images = Image::all();
        return view('admin.gallery.index')->with('images', $images);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.gallery.create');
    }

    /**
     * @param GalleryRequest $request
     * @return gallery view
     */
    public function store(GalleryRequest $request)
    {
        $input = $request->all();
        if (Request::hasFile('img')) {
            $file = Input::file('img');
            $filename = ImageHandler::storeImage('gallery', $file);
            $input['img'] = '/img/gallery/' . $filename;
            Image::create($input);
        } else {
            flash()->error('No picture chosen');
            return view('admin.gallery.create');
        }
        return redirect('/admin/gallery');
    }

    /**
     * @param Image $image
     * @return gallery edit view with image
     */
    public function edit(Image $image)
    {
        return view('admin.gallery.edit')->with('image', $image);
    }

    /**
     * @param Image $image
     * @param GalleryRequest $request
     * @return gallery view
     */
    public function update(Image $image, GalleryRequest $request)
    {
        $input = $request->all();
        if (Request::hasFile('img')) {
            $file = Input::file('img');
            $filename = ImageHandler::storeImage('gallery', $file);
            ImageHandler::destroyImage($image);

            $input['img'] = '/img/gallery/' . $filename;
            $image->update($input);
        } else {
            $input['img'] = $image['img'];
            $image->update($input);
            return redirect('/admin/gallery');
        }
        return redirect('/admin/gallery');
        flash()->success('Updated');
    }

    /**
     * @param Image $image
     * @return returns gallery view
     */
    public function destroy(Image $image)
    {
        ImageHandler::destroyImage($image);
        $image->delete();
        return redirect('/admin/gallery');
    }
}
