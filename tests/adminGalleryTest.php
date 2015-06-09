<?php
/**
 * Created by PhpStorm.
 * User: erikmagnusson
 * Date: 15-05-19
 * Time: 20:05
 */
use App\Image;

class adminGalleryTest extends TestCase
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
     * Test: create image
     */
    public function test_create()
    {
        Image::create($this->image);
    }

    /**
     * Test: edit image
     */
    public function test_edit()
    {
        $this->image['title'] = 'edited-name';
        $image = Image::where('title', '=', 'image-name');
        $image->update($this->image);
        $this->assertTrue(Image::where('title', '=', 'edited-name')->exists());

    }
    /**
     * Test: Delete image
     */
    public function test_delete()
    {
        Image::where('title', '=', 'edited-name')->delete();
        $this->assertNotTrue(Image::where('title', '=', 'edited-name')->exists());
    }

}

