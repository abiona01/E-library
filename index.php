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
    <div class="container">
        <div class="row">
            <?php foreach($book as $book_item){ ?>
            <div class="col s12 m12 l6">
            <div class="card">
                    <div class="card-image">
                       <img src="image/<?php echo $book_item["image"]; ?> " width="250px" height="250px">
                    </div>
                    <div class="card-content">
                        <p><?php echo $book_item["title"];?></p>
                        <p>
                        <ul>
                        <li>345 pages</li>
                        <li>2009</li>
                        <li>2.87mb</li>
                    </ul>
                        </p>
                    </div>
                    <div class="card-action">
                        <a href="food.php?id=<?php echo $food_item['id'] ?>">Read more</a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>


<?php
include('include/footer.php');

?>

