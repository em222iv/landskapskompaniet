<?php  namespace App\Models;

/**
 * Created by PhpStorm.
 * User: erikmagnusson
 * Date: 15-05-26
 * Time: 19:56
 *
 * Class ImageHandler
 * @package App\Models
 *
 * Usage:
     *  use App\Models\ImageHandler to file of choice
     *
     * Facade may be called like:
     * ImageHandler::storeImage('NameOfFolder', ImageToSave.extension)
     * OR
     * ImageHandler::destroyImage(pathToDestroyImage);
 */
class ImageHandler{

/**
 * @param  $filepath = name of file folder
 * @param  $file = the file to be stored
 * @return string - name of the saved file
 *
 * Takes two params to decide witch folder($filepath) to save the file($file)
 * Folder should be place under public/img/"filepathname"
 *
 */
    public static function storeImage($filepath,$file)
    {
//       $filepathbase = '../httpd.www/img/';
        $filepathbase = public_path().'/img/';
        $extension = $file->getClientOriginalExtension();
        $filename = str_random(6).'.'.$extension;
        $file->move($filepathbase.$filepath.'/', $filename);;
        return $filename;
    }
/**
 * @param $image = Image instance
 *
 * Takes one param. Pass chosen Image to destroy.
 *
 */
    public static function destroyImage($image)
    {
        unlink(public_path() . $image);
        // unlink($image);
        // unlink('../httpd.www/img/service/'.$service['img']);
    }
}