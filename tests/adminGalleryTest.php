<?php
/**
 * Created by PhpStorm.
 * User: erikmagnusson
 * Date: 15-05-19
 * Time: 20:05
 */
use App\Image;

class GalleryTest extends TestCase
{
    /*
     *Starting session for test
     */
    private $image = array(
        'title' => 'image-name',
        'text' => 'descripton test',
        'img' => 'image/file/path'
    );
    public function setUp()
    {
        parent::setUp();
        Session::start();
    }

    /**
     * Test: create administrator
     */
    public function test_create()
    {
        Image::create($this->image);
    }
    public function test_edit()
    {
        $image = Image::where('title', '=', 'image-name');
        //var_dump($image);
    }
    /**
     * Test: Delete admin
     */
    public function test_delete()
    {
        Image::where('title', '=', 'image-name')->delete();
    }

}

