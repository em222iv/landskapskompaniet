<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model {

    protected $fillable = [
        'title',
        'text',
        'img',
    ];

    public function sub_services() {
        return $this->belongsToMany('App\SubService')->withTimestamps();
    }
}
