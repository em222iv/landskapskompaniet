<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class SubService extends Model {

    protected $fillable = [
        'head-title',
        'sub-title',
        'text',
        'img',
    ];

    public function service() {
        return $this->belongsToMany('App\Service');
    }

}
