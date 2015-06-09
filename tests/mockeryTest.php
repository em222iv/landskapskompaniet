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

/**
 * Class mockeryTest
 * Simple tests including mockery
 */
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

    function test_MockeryWorks()
    {
        $images = Image::all();
        $mock = Mockery::mock('Image');
        $mock->shouldReceive('index')->once()->andReturn($images);
        $mock->index();

    }

    function test_create_service()
    {
        $services = Service::lists('title', 'id');
        $mock = Mockery::mock('Service');
        $mock->shouldReceive('create')->once()->andReturnValues($services);
        $mock->create();
    }
    function test_update_service()
    {

        $mock = Mockery::mock('Service');
        $mock->shouldReceive('update')->once()->andReturn('d');
        $mock->update();
    }
}