<?php

$conn = mysqli_connect("localhost", "Ayomi", "Ayomide23", "E-library");

if(!$conn){
    echo "connection error:";
    mysqli_connect_error();
}

?>