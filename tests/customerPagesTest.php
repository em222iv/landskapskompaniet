<?php
/**
 * Created by PhpStorm.
 * User: erikmagnusson
 * Date: 15-05-19
 * Time: 20:05
 */
use App\Service;
use App\Image;
class customersPagesTest extends TestCase
{
    /**
     * testing welcome page
     */
    public function testWelcomeData()
    {
        $this->call('GET', '/');
        $this->assertViewHas('data');
    }
    /**
     * testing gallery page
     */
    public function testGalleryData()
    {
        $this->call('GET', '/galleri');
        $this->assertViewHas('images');
    }
    /**
     * testing image page
     */
    public function testImageData()
    {
        $image = Image::first();
        $this->call('GET', '/galleri/'.$image->id);
        $this->assertViewHas('images');
    }
    /**
     * testing Services page
     */
    public function testServicesData()
    {
        $this->call('GET', '/tjänster');
        $this->assertViewHas('services');
    }
    /**
     * testing Service page
     */
    public function testServiceData()
    {
       $service = Service::first();
        $this->call('GET', '/tjänster/'.$service->id);
        $this->assertViewHas('data');
    }
}