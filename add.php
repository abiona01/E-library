<?php

    include('include/header.php');
    include('include/config.php');
    
    if(isset($_POST['submit'])){
        $image = mysqli_real_escape_string($conn, $_FILES['file']['name']);
        $title = mysqli_real_escape_string($conn, $_POST['title']);
        
        $image_temp = $_FILES['file']['tmp_name'];
        

    
        $target = "image/".basename($image);
        
        if (move_uploaded_file($image_temp, $target,)) {
    
            // create sql 
            $sql = "INSERT INTO library(image,title,) VALUES('$title','$image')";
    
            // save to db and check
            if(mysqli_query($conn, $sql)){
                // success
                header('Location: index3.php');
            } else {
                echo 'error: '. mysqli_error($conn);
            } 
        }
        }
        ?>

        <section class= "container grey-text">
        <h4 class="center">Add A Book </h4>
        <form class="white" action="add.php" method="POST" enctype="multipart/form-data">
            <label for="bookname"></label>
            <input type="text" name="booksname" placeholder="Books name" class="validate">
            <label for="authorname"></label>
            <input type="text" name="authorname" placeholder="Book Author Name " class="validate">
            <input type="file" name="Image" placeholder="Image" class="validate">
            <input type="file" name="file" placeholder="Book" class="validate">
            <div class="centre">
                <input type="submit" name="submit" value="submit" class= "btn brand z-depth-0">
            </div>
        </form>
        </section>

        <?php
        include('include/footer.php');
        ?>
       
   
   


