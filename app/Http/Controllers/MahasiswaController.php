<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;
use Illuminate\Support\Facades\Auth;

class MahasiswaController extends Controller
{
	public function __construct()
  	{
	    $this->middleware('auth');
	    $this->middleware('rule:Mahasiswa');
  	}

  	public function index()
  	{
      	$mahasiswas = DB::table('mahasiswas')->paginate(10);
      	return view('mahasiswa.index')->with('mahasiswas', $mahasiswas);
  	}

   public function profileBEM()
   {
        $this->data['title'] = 'Visi Misi';
        return view('mahasiswa.profilBEM',$this->data);
   }

}