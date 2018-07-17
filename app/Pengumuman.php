<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengumuman extends Model
{
  protected $table = 'pengumumans';
protected $dates = ['deleted_at'];
protected $fillable = ['tanggal','judul','content','images','penulis'];
}
