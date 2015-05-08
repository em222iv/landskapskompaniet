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
        $dbImages = Image::all();
        $images = [];
        $index = 0;
        foreach ($dbImages as $image) {

            if($id == $image['id']) {

                $prev = $index-1;
                $next = $index+1;
                $images[0] = $image;

                if (isset($dbImages[$prev])){

                    $images[1] = $dbImages[$prev];
                }
                else {
                    $images[1] = $image;
                }
                if (isset($dbImages[$next])){

                    $images[2] = $dbImages[$next];
                }
                else {
                    $images[2] = $image;
                }
                break;
            }
            $index++;
        }


// $ar
//        return $images;
//        $images[0] = Image::findOrFail($id);
//
//
//        if (is_null(Image::find($prev))){
//            $images[1] = Image::findOrFail($id);
//        }
//        else {
//            $images[1] = Image::findOrFail($prev);
//        }
//
//        if (is_null(Image::find($next))){
//            $images[2] = Image::findOrFail($id);
//        }
//        else {
//            $images[2] = Image::findOrFail($next);
//        }
        return view('pages.image')->with('images',$images);
    }
}
