<?php namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Http\Requests\GalleryRequest;
use Illuminate\Support\Facades\Input;
use App\Image;
use Request;

class AdminGalleryController extends Controller {

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
        return view('admin.gallery.index')->with('images',$images);
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
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(GalleryRequest $request)
	{
        $input = $request->all();

        if (Request::hasFile('image')){
            //file
            $path = Input::file('image');
            $extension = pathinfo($path->getClientOriginalName(), PATHINFO_EXTENSION);

            $filename = str_random(4) . '-' . str_slug($input['title']) . '.' . $extension;
            $file = file_get_contents($path);
            file_put_contents(public_path().'/img/gallery/'.$filename,$file);
            //file_put_contents('../httpd.www/img/gallery/' . $filename, $file);
            $input['image'] = '/img/gallery/' . $filename;
            Image::create($input);
        }else {
            flash('No picture chosen');
            return view('admin.gallery.create');
        }
        return redirect('/admin/gallery');	}

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
        $image = Image::findOrFail($id);
        return view('admin.gallery.edit')->with('image',$image);	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id,GalleryRequest $request)
	{
        $carousel = Image::findOrFail($id);
        $input = $request->all();

        if (Request::hasFile('image')){
        //file
        $path = Input::file('image');
        $extension = pathinfo($path->getClientOriginalName(), PATHINFO_EXTENSION);

        $filename = str_random(4).'-'.str_slug($input['title']).'.'.$extension;
        $file = file_get_contents($path);
        file_put_contents(public_path().'/img/gallery/'.$filename,$file);
        //file_put_contents('../httpd.www/img/gallery/'.$filename,$file);
        $input['image'] = '/img/gallery/'.$filename;
        $carousel->update($input);
        return redirect('/admin/gallery');
        }else {
            $input['image'] = $carousel['image'];
            $carousel->update($input);
            return redirect('/admin/gallery');
        }
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
    public function destroy($id)
    {
        $image = Image::findOrFail($id);
        $image->delete();
        return redirect('/admin/gallery');
    }


}
