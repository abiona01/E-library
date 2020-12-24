<?php 

//Connection to Database.
$connect = mysqli_connect('localhost', 'poll', 'reserved', 'e-lib');

//Check Connection.
if(!$connect) {
    echo 'connection error: ' . mysqli_connect_error();
}

?>