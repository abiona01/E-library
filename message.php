<?php
    $conn = mysqli_connect("localhost", "Ayomi", "Ayomide23", "e-library") or die("Database Error");
    
    $getMesg = mysqli_real_escape_string($conn, $_POST['text']);

    $check_data = "SELECT replies FROM messages WHERE queries LIKE '%$getMesg%'";
    $run_query = mysqli_query($conn, $check_data) or die("Error");


    if(mysqli_num_rows($run_query) > 0){
        $fetch_data = mysqli_fetch_assoc($run_query);
        
        $replay = $fetch_data['replies'];
        echo $replay;
    }else{
        echo "Sorry don't understand";
    }
?>