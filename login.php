<?php include('include/config.php'); ?>

<?php
if(isset($_POST['submit'])) {

    $count = 0;
    $sql = "SELECT * FROM `users` WHERE Username='$_POST[username]' && Password='$_POST[password]';";
    $result = mysqli_query($conn, $sql);     
    $count = mysqli_num_rows($result);

    if($count==0) {
        ?>
        <script>
            alert('The username and password does not match.');
        </script>
        <!-- <div class="alert alert-success">
            <strong>The username and password does not match.</strong>
        </div> -->
        <?php
    }
    else {
        ?>
        <script>
            window.location('index.php');
        </script>
        <?php
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
    <form class="col s12" action="" method="POST">
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