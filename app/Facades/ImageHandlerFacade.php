<?php
use Illuminate\Support\Facades\Facade;

class ImageHandler extends Facade {
    protected static function getFacadeAccessor() { return 'ImageHandler'; } // most likely you want MyClass here
}