<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Topic;
use App\User;
use App\Category;
use Redirect;
use Image;
use Auth;
class ForumController extends Controller
{

  public function __construct()
  {
    $this->middleware('auth');
    $this->middleware('rule:Mahasiswa');
  }

  public function getForum()
  {
      return view('forum.index');
  }

  public function getPost()
  {
      return view('forum.posting.index');
  }

  public function store(Request $request){

  if($request->hasFile('postPict')){

    $postPict = $request->file('postPict');
    $filename = time().'.'. $postPict->getClientOriginalExtension();
    Image::make($postPict)->save( public_path('/uploads/posts/'.$filename));
    $posts = Topic::all();
    $posts->images = $filename;
    //Validasi
    $input['author_id'] = $request->user()->id;
    $input['category_id'] = $request->input('category_id');
    $input['judul'] = $request->input('judul');
    $input['description'] = $request->input('description');
    $input['images'] = $filename;
  }
  else{
    $posts = Topic::all();
    $input['author_id'] = $request->user()->id;
    $input['category_id'] = $request->input('category_id');
    $input['judul'] = $request->input('judul');
    $input['description'] = $request->input('description');
  }
    $id = $request->input('id');

  Topic::create($input);
  return redirect ('/');
  }



  public function getBahasaPemrograman()
  {
      return view('forum.bahasaPemrograman');
  }
}
