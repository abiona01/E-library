<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sparky Library Login Up Page</title>
      <!-- Compiled and minified CSS -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container" style="width: 500px; background-color: white; margin-top: 2vh;">
<div class="row">
<div class="col s12 m12 l12 center">
<h3 center style="color: teal;">Sign In</h3>
</div>
</div>

<div class="row">
    <form class="col s12" action="" method="POST">
      <div class="row">
        <div class="input-field col s12 m12 l12">
            <i class="material-icons prefix ">account_circle</i>
          <input id="user_name" type="text" class="validate" placeholder="Username or Email" required>
        </div>

        <div class="input-field col s12 m12 l12">
        <i class="material-icons prefix">vpn_key</i>
          <input id="password" type="password" class="validate" placeholder=" Password" required>
        </div>


      <div class="input-field col s12 m12 l12">
      <i class="material-icons prefix">vpn_key</i>
          <input id="confirm_password" type="password" class="validate" placeholder="Confirm Password" required>
        </div>  

        <div class="input-field col s12 m12 l12">
        <button type="submit" class="btn waves-effect black" id="login"><a href="">Login</a></button>
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