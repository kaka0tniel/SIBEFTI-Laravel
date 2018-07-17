<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Angkatan extends Model
{
    protected $table = 'angkatan';
    public function angkatan(){
      return $this->hasOne('App\Mahasiswa','angkatan_id');
    }
}
