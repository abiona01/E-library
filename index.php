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
<section>
    <div class="row">
        <?php foreach($book as $book_item){ ?>
        <div class="col s12 l6">
            <div class="row">
                <div class="col s12 l4">
                    <img src="image/<?php echo $book_item["image"]; ?> " width="250px" height="250px">
                </div>
                <div class="col s12 l8">
                    <h3><?php echo $book_item["title"];?></h3>
                    <h4><?php echo $book_item["author"];?></h4> 
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</section>


<?php
include('include/footer.php');

?>

<!--
   <div class="card">
                <div class="card-image">
                    <img src="image/<?php echo $book_item["image"]; ?> " width="250px" height="250px">
                </div>
                <div class="card-content">
                    <p><?php echo $book_item["title"];?></p>
                    <p><?php echo $book_item["author"];?></p>
                </div>
                <div class="card-action">
                    <a href="food.php?id=<?php echo $food_item['id'] ?>">Read more</a>
                </div>
                </div>
            </div> 
            -->                 
                    
                    
                