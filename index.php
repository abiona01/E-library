<?php
include('include/header.php');
include('include/config.php');


//get book table data from db;
$select_query = "SELECT * FROM book ORDER by date";
$result = mysqli_query($conn, $select_query);
$book = mysqli_fetch_aLL($result, MYSQLI_ASSOC);

//print_r($book_details);

//end of connection
mysqli_close($conn); 

?>

<section class="books">
<div class="container note" style="background-color:#fafafa;">
    <h4>Sparky Library is a haven for books, eBooks for you to download for free. No annoying ads, no download limits, enjoy!</h4>
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
                    
                