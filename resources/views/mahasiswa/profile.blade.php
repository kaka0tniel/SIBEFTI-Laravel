@extends('mahasiswa')
@section('content')
<div class="jumbotron">
  <div class="row">
      <div class="col-md-10 col-md-offset-1">
<br><br>
        <img src="/uploads/avatars/{{$user->mahasiswa->avatar}}" style="width:150px; height:150px; float::left; border-radius:50%; margin-right:25px;">
        <h2> {{  $user->username}}'s Profile</h2>
        <form encypte="multipart/form-data" action="{{url(action('UserController@update_avatar'))}}" method="POST">
          <label>Update Profile Image </label>
          <input type="file" name="avatar">
          <input type="hidden" name="_token" value="{{csrf_token()}}">
          <input type="submit" class="pull-right btn btn-sm btn-primary">
      </div>
  </div>
</div>
<div>
  <h3> Data diri </h3>
  <p> nama : {{$user->mahasiswa->Name}}</p>
  <p> Tangal Lahir : {{$user->mahasiswa->tanggalLahir}}</p>
  <p> Tempat Lahir : {{$user->mahasiswa->tempatLahir}}</p>
  <p> Alamat : {{$user->mahasiswa->alamat}}</p>
  </div>

@endsection
