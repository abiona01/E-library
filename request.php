<?php /*
    $conn = mysqli_connect("localhost", "kakashi", "Success01", "e-library") or die("Database Error");
    
    $getMesg = mysqli_real_escape_string($conn, $_POST['text']);

    $check_data = "SELECT replies FROM messages WHERE queries LIKE '%$getMesg%'";
    $run_query = mysqli_query($conn, $check_data) or die("Error");


    if(mysqli_num_rows($run_query) > 0){
        $fetch_data = mysqli_fetch_assoc($run_query);
        
        $replay = $fetch_data['replies'];
        echo $replay;
    }else{
        echo "Sorry don't understand";
    } */
include("include/header.php");
include("include/config.php");

?>

<div class="container">
    <div class="container center">
        <form action="">
            <h3>Request A Book</h3>
            <div class="input-field">
                            <i class="material-icons prefix">contacts</i>
                            <input type="text" class="contacts">
                            <label for="Name" class="name">Your Name</label>
                        </div>
                        <div class="input-field">
                            <i class="material-icons prefix">email</i>
                            <input type="email" class="email">
                            <label for="email" class="email">Your Email</label>
                        </div>
                        <div class="input-field">
                            <i class="material-icons prefix">book</i>
                            <input type="text" class="title"></input>
                            <label for="book title" class="book title">Book Title</label>
                        </div>
                        <div class="input-field">
                            <i class="material-icons prefix">contacts</i>
                            <input type="text" class="author"></input>
                            <label for="book author" class="book author">Book Author</label>
                        </div>
                        <button class="btn waves-effect waves-light blue-grey darken-1" type="submit" name="action">Submit
                        </button>
        </form>
    </div>
</div>
<?php
include("include/footer.php");
?>