<?php session_start(); ?>
<?php
//development connection
//$conn = mysqli_connect("localhost", "kakashi", "Success01", "e-library");

//remote database connection
$conn = mysqli_connect("remotemysql.com", "GUpZhDMMKw", "tGJ1mPizWn", "GUpZhDMMKw");
if(!$conn){
    echo "connection error"; 
}

?>