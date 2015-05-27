<?php  namespace App\Models;

/**
 * Created by PhpStorm.
 * User: erikmagnusson
 * Date: 15-05-26
 * Time: 19:56
 */

 class ImageHandler{

    public function storeImage($filepath, $file)
    {
        $extension = $file->getClientOriginalExtension();
        $filename = str_random(6).'.'.$extension;
        $file->move($filepath, $filename);;
        return $filename;
    }
    public function destroyImage($image)
    {
        unlink(public_path() . $image);
       // unlink($image);
    }
}