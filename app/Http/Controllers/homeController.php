<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengumuman;
use DB;
class homeController extends Controller
{
  public function home()
  {

    $this->data['title'] = 'Daftar Pengumuman';
    $pengumumans = DB::table('pengumumans')->paginate(10);

    return view ('mahasiswa.index')->with('pengumumans', $pengumumans);

  }

  public function __construct()
  {
    $this->middleware('auth');
    $this->middleware('rule:Mahasiswa');
  }
}
