<?php namespace App;

use Illuminate\Database\Eloquent\Model;


class SubService extends Model
{
    protected $fillable = [
        'title',
        'text',
        'img',
    ];

    public function services()
    {
        return $this->belongsToMany('App\Service')->withTimestamps();
    }

    /**
     * get list of ids assoiciated with $this article
     * @return array
     */
    public function getServiceListAttribute()
    {
        return $this->services->lists('id');
    }
}