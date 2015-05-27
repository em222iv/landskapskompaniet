<?php namespace App\Http\Controllers;

use App\Image;
use Illuminate\Support\Facades\Mail;
use Request;

class ImageController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */

    protected $image;

    public function __construct(Image $image)
    {
        $this->image = $image;
    }

    public function index()
    {

        $images = $this->image->all();

        return view('pages.gallery')->with('images', $images);
    }

    public function show(Image $image)
    {

        $id = $image->id;
        $dbImages = $this->image->all();
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

        return view('pages.image',compact('images', $images));
    }
}
