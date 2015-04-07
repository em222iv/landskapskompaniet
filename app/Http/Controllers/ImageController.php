<?php namespace App\Http\Controllers;

use App\Image;
use Request;

class ImageController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
    public function show($id)
    {
        $prev = $id-1;
        $next = $id+1;
        $images = [];
        $images[0] = Image::findOrFail($id);

        if (is_null(Image::find($prev))){

            $images[1] = Image::findOrFail($id);
        }
        else {
            $images[1] = Image::findOrFail($prev);
        }
        if (is_null(Image::find($next))){

            $images[2] = Image::findOrFail($id);
        }
        else {
            $images[2] = Image::findOrFail($next);
        }


        return view('pages.image')->with('images',$images);
    }
}
