<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login Form</title>



      <link rel="stylesheet" href="css/style.css">


</head>

<body>
  <body>
	<div class="login">
		<div class="login-screen">
			<div class="app-titl e">
				<h1>BEM FTIE IT Del</h1>
			</div>

			<div class="login-form">
        <form action ="{{url(action('LoginController@postLogin'))}}" method="post" class="form-signin">
          <input type="hidden" name="_token" value="<?php echo csrf_token();?>">
				<div class="control-group">
				<input type="text" class="login-field" name="EmailUsername" value="" placeholder="username" id="login-name">
				<label class="login-field-icon fui-user" for="EmailUsername"></label>
				</div>

				<div class="control-group">
				<input type="password" class="login-field" name="password" value="" placeholder="password" id="login-pass">
				<label class="login-field-icon fui-lock" for="password"></label>
				</div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
				<a class="login-link" href="#">Lost your password?</a>
        </form>
			</div>

		</div>
	</div>
</body>


</body>
</html>
