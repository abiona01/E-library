<?php
session_start();
include('include/header.php');
include('include/config.php');
?>
<?php 

if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
}
?>
  
<?php

//get book table data from db;
$select_query = "SELECT * FROM book ORDER by date ASC limit 6";
$result = mysqli_query($conn, $select_query);
$book = mysqli_fetch_aLL($result, MYSQLI_ASSOC);

//print_r($book_details);

//end of connection
mysqli_close($conn); 

?>

<section class="books">
<div class="container note" style="background-color:#fafafa;">
    <p style="font-size: 15px;" class="grey-text text-darken-3">Sparky Library is a haven for books, eBooks for you to download for free. We have hundreds of books availabale for you to read, and we take requests!!!. So, if you can't find a book you want, fret not, just chat with us in the chat section. No annoying ads, no download limits, enjoy!</p>
</div>
    <div class="row">
        <?php foreach($book as $book_item){ ?>
        <div class="col s12 l6 details">
            <div class="row">
                <div class="col s12 l4">
                    <a href="<?php echo $book_item["link"];?>">
                    <img src="image/<?php echo $book_item["image"]; ?> " width="250px" height="250px"> </a>
                </div>
                <div class="col s12 l8">
                    <h4><?php echo $book_item["title"];?></h4>
                    <h5><?php echo $book_item["author"];?></h5> 
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</section>


<?php
include('include/footer.php');

?>     
                    
                