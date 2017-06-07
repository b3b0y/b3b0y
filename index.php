<!DOCTYPE html>
<html>
<head>

   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
   <script src="js/main.js"></script>
</head>
<body>
  <div class="container">
    <form class="form-signin"  action="" method="post" id="login-form">
        <h1 class="form-signin-header">Login</h1>
        <hr>
        <div id="message">

        </div>
        <div class="form-group">
          <input type="email" class="form-control" placeholder="Email Address" name="user_email" id="user_email">
        </div>
        <div class="form-group">
          <input type="password" class="form-control" placeholder="Passwpord" name="password" id="password">
        </div>
        <div class="form-group">
          <input type="submit"  class="btn btn-default" name="btn-login" id="btn-login" value="Login">
          <span class="btn btn-default" id="show-signup">Create Account</span>
        </div>
    </form>
    <form class="form-register"  action="" method="post" id="register-form">
        <h1 class="form-signin-header">Register</h1>
        <hr>
        <div id="message2">

        </div>
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Name" name="name" id="name">
        </div>
        <div class="form-group">
          <input type="email" class="form-control" placeholder="Email Address" name="user_email" id="user_email">
        </div>
        <div class="form-group">
          <input type="password" class="form-control" placeholder="Password" name="password2" id="password2">
        </div>
        <div class="form-group">
          <input type="password" class="form-control" placeholder="Retype Password" name="cpassword" id="cpassword" />
        </div>
        <div class="form-group">
          <input type="submit"  class="btn btn-default" name="btn-login" id="btn-login" value="Register">
          <span class="btn btn-default" id="show-login">Login</span>
        </div>
    </form>
  </div>
</body>
</html>
