<?php namespace App\Http\Controllers;

use App\Image;
use Request;

class ImageController extends Controller
{

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

            if ($id == $image['id']) {

                $prev = $index - 1;
                $next = $index + 1;
                $images[0] = $image;

                if (isset($dbImages[$prev])) {

                    $images[1] = $dbImages[$prev];
                } else {
                    $images[1] = $image;
                }
                if (isset($dbImages[$next])) {

                    $images[2] = $dbImages[$next];
                } else {
                    $images[2] = $image;
                }
                break;
            }
            $index++;
        }
        return view('pages.image')->with('images', $images);
    }
}
