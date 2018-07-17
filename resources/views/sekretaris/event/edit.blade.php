@extends('pengurus')
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

                            <div class="form-group{{ $errors->has('start_date') ? ' has-error' : '' }}">
                                    <label for="start_date" class="col-md-4 control-label">Start Event</label>
                                <div class="col-md-6">
                                    <input id="start_date" type="text" class="form-control" name="start_date" value="{{$events->start_date}}">
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('due_date') ? ' has-error' : '' }}">
                                    <label for="due_date" class="col-md-4 control-label">End Event</label>
                                <div class="col-md-6">
                                    <input id="due_date" type="text" class="form-control" name="due_date" value="{{$events->due_date}}">
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('judul') ? ' has-error' : '' }}">
                                    <label for="judul" class="col-md-4 control-label">Judul Event</label>
                                <div class="col-md-6">
                                    <input id="judul" type="text" class="form-control" name="judul" value="{{$events->judul}}" required autofocus>
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('content') ? ' has-error' : '' }}">
                                    <label for="content" class="col-md-4 control-label">Deskripsi</label>
                                <div class="col-md-6">
                                    <textarea id="content" type="text" class="form-control" name="content" value="{{$events->content}}" required autofocus>
                                    </textarea>
                                </div>
                            </div>

                            <label class="col-md-4 control-label">Gambar</label>  
                            <div class="form-group">
                            <div class="col-md-4 col-md-offset-4">
                                <img src="./img/image.png" id="showimages" value="{{$pengumumans->images}}" style="max-width: 200px; max-height: 200px; float: left"/>
                            </div>
                        </div>

                        <div class="form-group">
                              <div class="col-md-6 col-md-offset-4">
                                <input type="file" id="inputimages" name="images">
                              </div>
                            </div>

                           <div class="form-group{{ $errors->has('penulis') ? ' has-error' : '' }}">
                                    <label for="penulis" class="col-md-4 control-label">Penulis</label>

                                <div class="col-md-6">
                                    <input id="penulis" type="text" class="form-control" name="penulis" value="{{ Auth::user()->username }}" required autofocus>
                                </div>
                            </div>

                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <button type= "submit" class="btn btn-danger">Edit Event</button>
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