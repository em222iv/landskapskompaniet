<?php namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;

abstract class Controller extends BaseController
{

    use DispatchesCommands, ValidatesRequests;

//    public function storeImage($filepath, $file)
//    {
//        $extension = $file->getClientOriginalExtension();
//        $filename = str_random(6).'.'.$extension;
//        $file->move($filepath, $filename);;
//        return $filename;
//    }
}
