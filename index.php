<?php
include('include/header.php');
include('include/config.php');

//get book table data from db;
$select_query = "SELECT * FROM book ORDER by date";
$result = mysqli_query($conn, $select_query);
$book = mysqli_fetch_all($result, MYSQLI_ASSOC);

//print_r($book_details);

//end of connection
mysqli_close($conn); 

?>
?>


<?php
include('include/footer.php');

?>