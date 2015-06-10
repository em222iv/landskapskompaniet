<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Email extends Model {


    protected $fillable = [
        'email'
    ];


    public function emails()
    {
        return $this->all();
    }

    /**
     * get list of ids assoiciated with $this article
     * @return array
     */

    public function getSubListAttribute()
    {
        return $this->emails->lists('id');
    }


}
