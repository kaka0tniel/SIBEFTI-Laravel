@extends('mahasiswa')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h4 style="text-align:center;font-weight: bolder" class="title">{{$title}}</h4>
                    <div class="panel-body">
                        <div class="col-md-12">
                            <div class="content table-responsive table-full-width">
                                <form class="form-horizontal" role="form" enctype="multipart/form-data" action="{{url(action('SekretarisController@storeEvent'))}}" method="post">
                                    {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('tanggal') ? ' has-error' : '' }}">
                                    <label for="tanggal" class="col-md-4 control-label">Tanggal</label>
                                <div class="col-md-6">
                                    <input id="tanggal" type="text" class="form-control" name="tanggal" value="<?php
                                    echo date('d-m-Y   H:i:s');
                                    ?>">
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('judul') ? ' has-error' : '' }}">
                                    <label for="judul" class="col-md-4 control-label">Judul</label>
                                <div class="col-md-6">
                                    <input id="judul" type="text" class="form-control" name="judul" required autofocus>
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('content') ? ' has-error' : '' }}">
                                    <label for="content" class="col-md-4 control-label">Deskripsi</label>
                                <div class="col-md-6">
                                    <textarea id="content" type="text" class="form-control" name="content" required autofocus>
                                    </textarea>
                                </div>
                            </div>

                                <div class="col-md-6">
                                    <input id="nama" type="text" class="form-control" name="nama" value="{{ Auth::user()->username }}" required autofocus>
                                </div>
                            </div>

                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <button type= "submit" class="btn btn-danger">Tambah Aspirasi</button>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
