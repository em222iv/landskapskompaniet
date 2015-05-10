<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class JobRequest extends Model
{

    protected $fillable = [
        'name',
        'address',
        'email',
        'phone',
        'company',
        'request'
    ];
}
