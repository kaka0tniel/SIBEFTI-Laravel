<?php

Route::get('/chatter', 'ChatterController@index');

Route::group(['middleware'=>['web']], function(){
  Route::get('/', 'homeController@home');
  Route::get('profile/{username}','UserController@profile');
  Route::post('/','UserController@update_avatar');
  Route::get('forum','ForumController@getForum');
  Route::get('forum/post','ForumController@getPost');
});

Route::post('/postLogin','LoginController@postLogin');
Route::get('/login','LoginController@getLogin');
Route::get ('logout',function(){
  Auth::logout();
  return redirect('login');
});



Route::group(['middleware'=>['web']], function(){
  Route::resource('halamanAdmin','AdminController');
  Route::get('/register','RegisterController@getRegister');
  Route::post('/postRegister','RegisterController@postRegister');
});
Route::group(['middleware'=>['web']], function(){
  Route::get('bahasaPemrograman','TopicController@getBahasaPemrograman');
  Route::post('bahasaPemrograman','TopicController@store');
});

Route::group(['middleware'=>['web']], function(){
  Route::resource('sekretaris','SekretarisController');
  Route::get('/sekretaris/dataPengumuman/edit/{id}','SekretarisController@editpengumuman');
  Route::post('/sekretaris/editpengumuman/{id}','SekretarisController@updatepengumuman');
  Route::get('sekretaris/event','SekretarisController@indexEvent');
  Route::get('/pengumuman','SekretarisController@create');
  Route::get('/sekretaris/dataPengumuman/delete/{id}','SekretarisController@delete');
  Route::get('/sekretaris/dataPengumuman/detail/{id}','SekretarisController@detail');
  Route::post('/store','SekretarisController@store');
  Route::get('/event','SekretarisController@createEvent');
  Route::post('/storeEvent','SekretarisController@storeEvent');

});

Route::group(['middleware'=>['web']], function(){
  Route::resource('mahasiswa','MahasiswaController');
  Route::get('/profileBEM', 'MahasiswaController@profileBEM');
  
});
