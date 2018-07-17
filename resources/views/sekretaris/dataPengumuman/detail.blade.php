@extends('pengurus')
@section('content')

  <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                    <div class="panel-heading"><h4 class="title">Detail Pengumuman</h4>
                    <p class="category"></p>
                    <div class="panel-body">
                <div class="col-md-12">
                <div class="card">                
                <div class="content table-responsive table-full-width">
                </div>
                <form action="" method="post"> 
                  {{ csrf_field() }}   

                        <label class="col-md-4 control-label">NIM</label>
                      <input type="text" class="form-control" name="tanggal" value="{{$pengumumans->tanggal}}" readonly>
                      <label class="col-md-4 control-label">NAMA</label>
                      <img src = "{{ asset('image/' .$pengumumans->images) }}" alt=""/>
                        

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