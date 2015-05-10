<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Carousel extends Model
{

    protected $fillable = [
        'img',
        'img-path',
        'title',
        'body'

    ];

}
