<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{asset('img/logo_ftie.png')}}">

    <title>Dashboard | SIBEFTI</title>

    <!-- Bootstrap core CSS -->
    <link href="admin/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
		<link href="{{asset('css/site.css')}}" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="{{('css/ie10-viewport-bug-workaround.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{('css/navbar-fixed-top.css')}}" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="{{asset('assets/js/ie-emulation-modes-warning.js')}}"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a  href="/"><IMG  SRC="{{asset('img/logo_ftie.png')}}" width="50px"  height="50px" > </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="profileBem">Profile BEM</a></li>
            <li><a href="forum">Forum Mahasiswa</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a  href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->username}} <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="/profile"><i class="fa fa-user fa-fw"></i>Profile</a></li>
                <li><a href="/settingProfile"><i class="fa fa-gear fa-fw"></i>Setting Profile</a></li>
                <li><a href="/logout"><i class="fa fa-sign-out fa-fw"></i>Logout</a></li>

              </ul>
            </li>
            <!--<li >
							<a href="logout">Logout <span class="sr-only"></span></a>
            </li>-->
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <div class="container">
        <div class="row">

        </div>
    </div>

    <div class="container">
      <br><br><br>
      @yield('content');
      <!-- Main component for a primary marketing message or call to action -->
      <!--<div class="jumbotron">
        <h1>Sistem Informasi BEM FTIE</h1>
        <p>Institut Teknologi Del</p>
        <center><IMG  SRC="{{asset('img/logo_ftie.png')}}" > <IMG  SRC="{{asset('img/logo_del.png')}}" ><br>
          <a class="btn btn-lg btn-primary" href="../../components/#navbar" role="button">View Profile BEM &raquo;</a>
        </p>


      </div>-->

     <!-- /container -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    </div>
    <script src="{{('js/jquery.min.js')}}"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="{{('js/bootstrap.min.js')}}"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="{{('js/ie10-viewport-bug-workaround.js')}}"></script>
		<!-- <footer id="footer" class="footer2">
            <div class="container">
                <div class="row">
                    <div class="footer-ribbon foot x">
                        <span>Get in Touch</span>
                    </div>
                    <div class="col-md-3 cfoot">
                        <div class="newsletter">
                            <h4>Quotes</h4>
                            <p>Keluarga adalah sarana berbagi di dalam suka dan duka. Keluarga adalah segalanya.</p>

                            <div class="alert alert-success hidden" id="newsletterSuccess">
                                <strong>Success!</strong> You've been added to our email list.
                            </div>

                            <div class="alert alert-danger hidden" id="newsletterError"></div>
                        </div>
                    </div>
                    <div class="col-md-3 cfoot">
                        <h4>Latest Tweets</h4>
                        <div id="tweet" class="twitter" data-plugin-tweets data-plugin-options='{"username": "", "count": 2}'>
                            <p>Please wait...</p>
                        </div>
                    </div>
                    <div class="col-md-4 cfoot">
                        <div class="contact-details">
                            <h4>Contact Us</h4>
                            <strong>Address:</strong> Jl. Sisingamangaraja Laguboti, Sumatera Utara<br>
                            <strong>Phone:</strong> +62 632 331234<br>
                            <strong>Email:</strong> <a href="bemitdel@students.del.ac.id">bemitdel@students.del.ac.id</a>
                        </div>
                    </div>
                    <div class="col-md-2 cfoot">
                        <h4>Follow Us</h4>
                        <div class="social-icons">
                            <a href="http://www.facebook.com/" target="_blank" data-placement="bottom" data-tooltip title="Facebook">Facebook</a><br>
                            <a href="http://www.twitter.com/" target="_blank" data-placement="bottom" data-tooltip title="Twitter">Twitter</a><br>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <footer class="footer txt">
            <div class="container">
                <p class="pull-left">&copy; BEM FTIE IT Del <?= date('Y') ?></p>
                <p class="pull-right">SYP-09 D3TI 2017</p>
            </div>
        </footer> -->
  </body>
</html>
