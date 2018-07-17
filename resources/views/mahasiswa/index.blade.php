@extends('mahasiswa')
@section('content')
<div class="jumbotron">
  <h1>Sistem Informasi BEM FTIE</h1>
  <p>Institut Teknologi Del</p>
  <center><IMG  SRC="{{asset('img/logo_ftie.png')}}" > <IMG  SRC="{{asset('img/logo_del.png')}}" ><br>
    <a class="btn btn-lg btn-primary" href="{{url('/profileBEM')}}" role="button">View Profile BEM &raquo;</a>
  </p>


</div>
<div class="panel panel-default">
    <div class="panel-heading" align="center"><h3>Pengumuman</h3></div>
    <div class="panel-body" align="center">

             @foreach($pengumumans as $pengumuman)

            <p align="left"> &nbsp;&nbsp;<?php
                echo date('d-m-Y   H:i:s');
                echo "&nbsp";
             ?> |
              <img src="../img/event.png" id="showimages" style="width: 20px; float: left;"/><img src="../img/person.png" id="showimages" style="width: 22px; margin-left: 2px"/>&nbsp;{{$pengumuman->penulis}}</p>

             <p align="left"><!-- <th>{{$pengumuman->tanggal}} --></th>
             {{$pengumuman->judul}}
             <p align="left"> <a href="{{url('admin/dataPengumuman/detail', $pengumuman->id)}}" style="color: blue";> Read More </a> |
             <hr>
             <!-- <th><img src="/image/{{ $pengumuman->images }}" alt="" /></th>
             <th>{{$pengumuman->content}}</th> -->

        @endforeach
        </div>
</div>

@endsection
