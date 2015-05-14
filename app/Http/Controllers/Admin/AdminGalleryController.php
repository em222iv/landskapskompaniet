<?php namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Http\Requests\GalleryRequest;
use Illuminate\Support\Facades\Input;
use App\Image;
use Request;

class AdminGalleryController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
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
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|\Illuminate\View\View
     */
    public function store(GalleryRequest $request)
    {
        $input = $request->all();
        if (Request::hasFile('img')) {
            $file = Input::file('img');
            $filename = $this->storeImage(public_path() . '/img/gallery/', $file);
           // $filename = $this->storeImage('../httpd.www/img/gallery/', $file);
            $input['img'] = '/img/gallery/' . $filename;
            Image::create($input);
        } else {
            flash()->error('No picture chosen');
            return view('admin.gallery.create');
        }
        return redirect('/admin/gallery');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit(Image $image)
    {
        return view('admin.gallery.edit')->with('image', $image);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update(Image $image, GalleryRequest $request)
    {
        $input = $request->all();
        if (Request::hasFile('img')) {
            $file = Input::file('img');

     //       $filename = $this->storeImage(public_path() . '/img/gallery/', $file);
            $filename = $this->storeImage('../httpd.www/img/gallery/', $file);


            $this->destroyImage($image->img);
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
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy(Image $image)
    {
        $this->destroyImage($image['img']);
        $image->delete();
        return redirect('/admin/gallery');
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
       // unlink(public_path() . $image);
          unlink($image);
    }

}
