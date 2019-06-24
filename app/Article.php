<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public function tags()
    {
        return $this->belongsToMany('App/Tags');
    }

    public function categories()
    {
        return $this->belongsToMany('App/Categories');
    }

    public function user()
    {
        return $this->belongsTo('App/User');
    }

    public function images()
    {
        return $this->belongsToMany('App/Image');
    }
}
