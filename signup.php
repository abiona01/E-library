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
     <link rel="stylesheet" href="css/style.css">
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
    <form id="form" class="col s12 m12 l12" action="" method="POST">
      <div class="row">
        <div class="input-field col s12 m12 l12">
        <i class="material-icons prefix ">account_circle</i>
          <input id="full_name" type="text" class="validate autocomplete" placeholder="Full name" required>
          <label for="full_name">Full Name <span>*<span></label>
        </div>

        <div class="input-field col s12 m12 l12">
        <i class="material-icons prefix ">mail</i>
          <input id="email" type="email" class="validate autocomplete" placeholder="Email" required>
          <label for="email">Email <span>*<span></label>
        </div>


        <div class="input-field col s12 m12 l12 center" style="margin-top: 10vh; margin-bottom: 10vh">
          <button type="submit" class="btn waves-effect black" id="sign-up"><a href="">Sign Up</a></button>
          <p id="login">Already have an Account with Sparky Library? <a href="./login.php">Login Here</a><p>
        </div>

      </div>  
      </div>
      </div>

    <!-- Compiled and minified JavaScript -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script> 
      <script src="js/main.js"></script>
</body>
</html>