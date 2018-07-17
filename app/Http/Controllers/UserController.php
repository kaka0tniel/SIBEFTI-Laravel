<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Mahasiswa;
class UserController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }

  public function profile($username){
      $user = User::where('username',$username)->firstOrFail();
    return view('mahasiswa.profile', compact('user'));
  }
      
  public function update_avatar($username,Request $request){
    //handle the user upload of avatar
    if($request->hasFile('avatar')){
      $avatar = $request->file('avatar');
      $filename=time(). '.' . $avatar->getClientOriginalExtension();
      Image::make($avatar)->resize(300,300)->save(public_path('/uploads/avatars/' . $filename));

      $user = Auth::user();
      $user->mahasiswa->avatar = $filename;
      $user->mahasiswa->save();
      $user = User::where('username',$username)->firstOrFail();
    }
    return view ('');
  }

}
