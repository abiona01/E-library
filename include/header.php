
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- font awesome -->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

<!--Import Google Icon Font-->

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<!-- Compiled and minified CSS -->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">

    <title>Document</title>
    <style>
      header{
        background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url(image/antique-books-on-shelves.jpg);
        background-size: cover;
        background-position: center;
        min-height: 1000px;
      }
      .note{
        border-radius: 20px;
        padding: 10px;
        margin-bottom: 30px;
      }
      section{
          padding-top: 2vw;
          padding-bottom: 4vw;
      }
      .search {
        margin-top: 300px;
      }
      .books{
        background-color: #f5f5f5;
      }
      .details{
        background-color: #fafafa;
        margin-bottom: 20px;
      }
      .alert-success{
        z-index: 1;
        background: #D4EDDA;
        font-size: 18px;
        padding: 20px 40px;
        min-width: 420px;
        position: fixed;
        right: 0;
        top: 10px;
        border-left: 8px solid #3AD66E;
        border-radius: 4px;
      }

      .alert-error{
        z-index: 1;
        background: #FFF3CD;
        font-size: 18px;
        padding: 20px 40px;
        min-width: 420px;
        position: fixed;
        right: 0;
        top: 10px;
        border-left: 8px solid #FFA502;
        border-radius: 4px;
      }
    </style>
</head>
<body>
<header>
      <nav class="nav-wrapper transparent z-depth-0">
        <div class="container">
          <a href="#" class="brand-logo" z-depth-4>
            <img src="image/logo-via-logohub (2).png" alt="Sparky logo" width="300px" height="50px">
          </a>
          <a href="" class="sidenav-trigger" data-target="mobile-menu">
            <i class="material-icons">menu</i>
          </a>
          <ul class="right hide-on-med-and-down">
            <li><a href="index.php">Home</a></li>
            <li><a href="all.php">All Books</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="signup.php">Sign Up</a></li>
            <li><a href="request.php">Request</a></li>
          </ul>
          <ul class="sidenav white" id="mobile-menu">
            <li><a href="index.php">Home</a></li>
            <li><a href="all.php">All Books</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="signup.php">Sign Up</a></li>
            <li><a href="request.php">Request</a></li>
          </ul>
        </div>
      </nav>
    <div class="content">
  <!-- notification message -->
  <?php if (isset($_SESSION['success'])) : ?>
  <div class="error success" >
      <h3>
      <?php 
          echo $_SESSION['success']; 
          unset($_SESSION['success']);
      ?>
      </h3>
  </div>
  <?php endif ?>

<!-- logged in user information -->
<?php  if (isset($_SESSION['username'])) : ?>
    <div>
    <p class="white-text"> <i class="material-icons white-text">account_circle</i><strong><?php echo $_SESSION['username']; ?></strong></p>
    </div>
   <p> <a  class="btn transparent" href="index.php?logout='1'" style="color: red;">logout</a> </p>
<?php endif ?>
      <div class="container">
        <form action="search.php" method="POST">
          <div class="input-field search">
            <input id="data" type="text" name="search" placeholder="Search books" class="white-text">
            <!--<button id="submit-btn" type ="submit" class="right transparent"><i class="material-icons">search</i></button> -->
            <input type="submit" name="submit" value="Search">
          </div>
        </form>
    </div> 
    
    </div>
    </header>
      <!-- Compiled and minified JavaScript -->

  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
<script>

$(document).ready(function(){
  $('.sidenav').sidenav();
  $("#submit-btn").on("click",function(){
    $value = $("#data").val();
    $('#data').val('');
  })
});
</script>

<script type="text/javascript">
  document.getElementById("submit-btn").addEventListener("click", function(){
    window.location = document.getElementById('data').value;
  });
</script>
