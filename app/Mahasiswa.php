<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
  protected $table = 'mahasiswa';
  protected $fillable = ['id','user_id','Name','tanggalLahir','tempatLahir','alamat','angkatan_id','prodi_id','avatar'];
  public function prodi(){
    return $this->hasOne('App\prodi','prodi_id');
  }
}
