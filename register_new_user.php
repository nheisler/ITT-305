<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>

<body>
<h1>Please Register</h1>

<?php

include "db_connect.php";

?>
<form class="form-horizontal" action="process_new_user.php" method="post">
<fieldset>

<!-- Search input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="username">username</label>
  <div class="col-md-5">
    <input id="username" name="username" type="search" placeholder="your name" class="form-control input-md" required="">
    <p class="help-block">Please enter a username</p>
  </div>
</div>

<!-- Search input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="password1">Password</label>
  <div class="col-md-5">
    <input id="password1" name="password1" type="password" placeholder="password" class="form-control input-md" required="">
    <p class="help-block">Please enter a password</p>
  </div>
</div>

<!-- Search input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="password2">Password</label>
  <div class="col-md-5">
    <input id="password2" name="password2" type="password" placeholder="password" class="form-control input-md" required="">
    <p class="help-block">Please confirm your password</p>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Submit"></label>
  <div class="col-md-4">
    <button id="Submit" name="Submit" class="btn btn-primary">Create new user</button>
  </div>
</div>

</fieldset>
</form>

<?php


$mysqli->close();

?>

</body>


</html>