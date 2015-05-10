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

    /**
     * get list of ids assoiciated with $this article
     * @return array
     */

    public function getSubListAttribute()
    {
        return $this->sub_services->lists('id');
    }
}
