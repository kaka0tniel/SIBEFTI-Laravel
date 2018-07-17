<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    protected $guarded =[];

    public function  comments()
    {
      return $this->hasMany('AppComments', 'on_post');
    }

    public function author()
    {
      return $this->belongsTo('App\User', 'author_id');
    }
}
