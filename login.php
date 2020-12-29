<?php 
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'e-library');
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: index.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sparky Library Login Page</title>
      <!-- Compiled and minified CSS -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container" style="width: 500px; background-color: white; margin-top: 2vh;">
<div class="row">
<div class="col s12 m12 l12 center">
<h3 center style="color: teal;">Sign In</h3>
</div>
</div>

<div class="row">
    <form class="col s12" action="index.php" method="POST">
      <div class="row">
        <div class="input-field col s12 m12 l12">
            <i class="material-icons prefix ">account_circle</i>
          <input id="user_name" type="text" class="validate" placeholder="Username or Email" name="username" required>
        </div>

        <div class="input-field col s12 m12 l12">
        <i class="material-icons prefix">vpn_key</i>
          <input id="password" type="password" class="validate" placeholder=" Password" name="password" required>
        </div>


      <!-- <div class="input-field col s12 m12 l12">
      <i class="material-icons prefix">vpn_key</i>
          <input id="confirm_password" type="password" class="validate" placeholder="Confirm Password" required>
        </div>   -->

        <div class="input-field col s12 m12 l12 center">
        <input type="submit" class="btn info" name="submit">
        </div>

<div class="input-field col s12 m12 l12 grey center">
<p id="sign-up">New to Sparky Library? <a href="./signup.php">Sign Up</a></p>
</div>

<div class="input-field col s12 m12 l12 center">
<p id="fpw"><a href="">Forgot Password?</a></p>
</div>
</div>

      <!-- Compiled and minified JavaScript -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>