<?php
include("server.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sparky Library Sign Up Page</title>
     <!-- Compiled and minified CSS -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
     <!--Import Google Icon Font-->
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container " style="width: 500px; background-color: white; margin-top: 8vh">
<div class="row">
<div class="col s12 m12 l12 center" >
<h3 style="color: teal;">Sign Up</h3>
<p>Fields with <strong style="color: red">*</strong> are mandatory</p>
</div>
<br>

<div id="error"></div>
    <form id="form" class="col s12 m12 l12" action="signup.php" method="POST">
    <?php include('errors.php'); ?>
      <div class="row">
        <div class="input-field col s12 m12 l12">
        <i class="material-icons prefix ">account_circle</i>
          <input id="full_name" type="text" class="validate autocomplete" placeholder="Username" name="username" required value="<?php echo $username; ?>">
          <label for="full_name">Username<span>*<span></label>
        </div>

        <div class="input-field col s12 m12 l12">
        <i class="material-icons prefix ">mail</i>
          <input id="email" type="email" class="validate autocomplete" placeholder="Email" name="email" value="<?php echo $email; ?>">
          <label for="email">Email <span>*<span></label>
        </div>

        <div class="input-field col s12 m12 l12">
        <i class="material-icons prefix">vpn_key</i>
          <input id="password" type="password" class="validate" placeholder=" Password" name="password1" required>
        </div>
        <div class="input-field col s12 m12 l12">
        <i class="material-icons prefix">vpn_key</i>
          <input id="password" type="password" class="validate" placeholder="Confirm Password" name="password2" required>
        </div>

        <div class="input-field col s12 m12 l12 center" style="margin-top: 10vh; margin-bottom: 10vh">
        <input type="submit" class="btn info" name="submit">
          <p id="login">Already have an Account with Sparky Library? <a href="./login.php">Login Here</a><p>
        </div>

      </div>  
      </div>
      </div>

    <!-- Compiled and minified JavaScript -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script> 
</body>
</html>