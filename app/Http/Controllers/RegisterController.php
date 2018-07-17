<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Input;

use Illuminate\Support\Facades\DB;

use App\User;
class RegisterController extends Controller
{
      public function __construct()
    {
    $this->middleware('auth');
    $this->middleware('rule:Admin');
    }

    public function getRegister()
    {
      return view('admin.formRegister');
    }

    public function postRegister()
    {
      $user = new User();
      $user->username = Input::get('username');
      $user->email = Input::get('email');
      $user->password = bcrypt(Input::get('password'));
      $user->roles_id =Input::get('roles_id');

      $user->save();
      return redirect(url('halamanAdmin'))->with('alert-success','Data Hasbeen Saved!');
    }
}
