@extends('pengurus')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
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
                         <a href="{{url('admin/dataPengumuman/edit', $pengumuman->id)}}">Edit</a>  |
                         <a href="{{url('admin/dataPengumuman/delete',$pengumuman->id)}}">Hapus</a> </p>
                         <hr>
                         <!-- <th><img src="/image/{{ $pengumuman->images }}" alt="" /></th>
                         <th>{{$pengumuman->content}}</th> -->

                    @endforeach
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
