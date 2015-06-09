<?php
/**
 * Created by PhpStorm.
 * User: erikmagnusson
 * Date: 15-06-09
 * Time: 17:55
 */
use App\Carousel;

class adminCarouselTest extends TestCase
{
    /*
     *Starting session for test
     */
    private $carousel = array(
        'title' => 'edited-name',
        'text' => 'descripton test',
        'img' => 'carousel/file/path'
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

        Carousel::create($this->carousel);
    }

    /**
     * Test: edit image
     */
    public function test_edit()
    {
        $this->carousel['title'] = 'edited-name';
        $carousel = Carousel::where('title', '=', 'carousel-name');
        $carousel->update($this->carousel);
        $this->assertTrue(Carousel::where('title', '=', 'edited-name')->exists());

    }
    /**
     * Test: Delete image
     */
    public function test_delete()
    {
        Carousel::where('title', '=', 'edited-name')->delete();
        $this->assertNotTrue(Carousel::where('title', '=', 'edited-name')->exists());
    }

}

