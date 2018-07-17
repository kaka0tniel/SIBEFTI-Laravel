@extends('error')
@section('content')
<header class="intro-header" style="background-image: url({{ asset('/img/404.png') }})">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
              <div class="post-heading">
                <center>
                  <h1>404</h1>
                  <h2 class="subheading">Page Not Found</h2>
                  <span class="meta">
                    @if(Auth::user()->roles_id == "1")
                        <a href="{{ url('halamanAdmin') }}">TAKE ME TO THE HOMEPAGE</a>
                    @elseif(Auth::user()->roles_id == "2")
                        <a href="{{ url('halamanAdmin') }}">TAKE ME TO THE HOMEPAGE</a>
                    @elseif(Auth::user()->roles_id == "3")
                        <a href="{{ url('halamanAdmin') }}">TAKE ME TO THE HOMEPAGE</a>
                    @elseif(Auth::user()->roles_id == "4")
                        <a href="{{ url('sekretaris') }}">TAKE ME TO THE HOMEPAGE</a>
                    @elseif(Auth::user()->roles_id == "5")
                        <a href="{{ url('halamanAdmin') }}">TAKE ME TO THE HOMEPAGE</a>
                    @elseif(Auth::user()->roles_id == "6")
                        <a href="{{ url('/') }}">TAKE ME TO THE HOMEPAGE</a>
                    @elseif(Auth::user()->roles_id == "7")
                        <a href="{{ url('halamanAdmin') }}">TAKE ME TO THE HOMEPAGE</a>
                    @elseif(Auth::user()->roles_id == "8")
                        <a href="{{ url('halamanAdmin') }}">TAKE ME TO THE HOMEPAGE</a>
                    @elseif(Auth::user()->roles_id == "9")
                        <a href="{{ url('halamanAdmin') }}">TAKE ME TO THE HOMEPAGE</a>
                    @elseif(Auth::user()->roles_id == "10")
                        <a href="{{ url('halamanAdmin') }}">TAKE ME TO THE HOMEPAGE</a>
                    @else(Auth::user()->roles_id == "11")
                        <a href="{{ url('/') }}">TAKE ME TO THE HOMEPAGE</a>
                    @endif
                  </span>
                </center>
              </div>
            </div>
        </div>
    </div>
</header>
@endsection
