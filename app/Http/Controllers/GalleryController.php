<?php namespace App\Http\Controllers;

use App\Image;
use Request;

class GalleryController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $images = Image::all();
        return view('pages.gallery')->with('images', $images);
    }
}
