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
                <i class="tiny material-icons prefix" style="top:10px">book</i>
                <a href="<?php echo $book_item["link"];?>">
                <h5 class="black-text"><?php echo $book_item["title"];?> - 
                <?php echo $book_item["author"];?> </h5> </a>
            </div>
        <?php } ?>
    </div>
</section>
<?php
include('include/footer.php');
?>
