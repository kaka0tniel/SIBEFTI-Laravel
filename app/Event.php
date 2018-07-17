<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
protected $table = 'events';
protected $dates = ['deleted_at'];
protected $fillable = ['start_date','due_date','judul','content','images','penulis'];
}
