<?php
/**
 * Created by PhpStorm.
 * User: erikmagnusson
 * Date: 15-05-19
 * Time: 20:05
 */
use App\Http\Controllers;
use App\Http\Controllers\Admin;
use App\Image;
use App\Service;
use \Mockery;
class mockeryTest extends TestCase
{

    public function setUp()
    {
        parent::setUp();
        Session::start();
    }
    public function tearDown()
    {
        Mockery::close();
    }

    function testMockeryWorks() {
        $images = Image::all();
        $mock = Mockery::mock('Image');
        $mock->shouldReceive('index')->once()->andReturn($images);
        $mock->index();
    }

    function test_create_service() {
        $services = Service::lists('title', 'id');
        $mock = Mockery::mock('Service');
        $mock->shouldReceive('create')->once()->andReturnValues($services);
        $mock->create();
    }
//    function test_store_service() {
//        $service =  array([
//            'title' => 'test-serivce',
//            'text' => 'text-description',
//            'img' => 'image/file/path'
//        ]);
//        $mock = Mockery::mock('Service',$service);
//        $mock->shouldReceive('update')->once()->verifyCall('destroyImage');
//        var_dump($mock->update());
//    }
}

