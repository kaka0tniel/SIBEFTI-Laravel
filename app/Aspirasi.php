<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aspirasi extends Model
{
  	protected $table = 'aspirasi';
	protected $dates = ['deleted_at'];
	protected $fillable = ['nama','judul','content','tanggal'];
}
