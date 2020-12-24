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
        background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url(image/images7.jpg);
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
      /* The overlay effect with black background */
.overlay {
  height: 100%;
  width: 100%;
  display: none;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: rgb(0,0,0);
  background-color: rgba(0,0,0, 0.9); /* Black with a little bit see-through */
}

/* The content */
.overlay-content {
  position: relative;
  top: 46%;
  width: 80%;
  text-align: center;
  margin-top: 30px;
  margin: auto;
}

/* Close button */
.overlay .closebtn {
  position: absolute;
  top: 20px;
  right: 45px;
  font-size: 60px;
  cursor: pointer;
  color: white;
}

.overlay .closebtn:hover {
  color: #ccc;
}

/* Style the search field */
.overlay input[type=text] {
  padding: 15px;
  font-size: 17px;
  border: none;
  float: left;
  width: 80%;
  background: white;
}

.overlay input[type=text]:hover {
  background: #f1f1f1;
}

/* Style the submit button */
.overlay button {
  float: left;
  width: 20%;
  padding: 15px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.overlay button:hover {
  background: #bbb;
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
            <li><a href="about.php">About Us</a></li>
            <li><a href="signup.php">Sign Up</a></li>
          </ul>
          <ul class="sidenav white" id="mobile-menu">
            <li><a href="index.php">Home</a></li>
            <li><a href="all.php">All Books</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="signup.php">Sign Up</a></li>
          </ul>
        </div>
      </nav>
      <div id="myOverlay" class="overlay">
  <span class="closebtn" onclick="closeSearch()" title="Close Overlay">x</span>
  <div class="overlay-content">
    <form action="action_page.php">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="material-icons">search</i></button>
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
});

// Open the full screen search box
function openSearch() {
  document.getElementById("myOverlay").style.display = "block";
}

// Close the full screen search box
function closeSearch() {
  document.getElementById("myOverlay").style.display = "none";
}
</script>