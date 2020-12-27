<?php include('include/connect.php'); ?>
<?php include('include/header.php'); ?>

<?php 
if(isset($_POST['submit'])) {
    
    $sql = "INSERT INTO books VALUES('$_POST[id]', '$_POST[name]', '$_POST[authors]', '$_POST[edition]', '$_POST[status]', '$_POST[quantity]', '$_POST[category]')";
    if(mysqli_query($connect,$sql)) {
        echo 'File Uploaded Successful';  
    }  
     else { 
        echo 'Error';
    } 
 } 
?>

<!DOCTYPE html>
<html lang="en">
<section class="container black-text">
    <h4 class="center">Upload Books</h4>
    <form action="" method="POST">
    <input type="text" name="id" placeholder="Book id">
    <input type="text" name="name" placeholder="Book Name">
    <input type="text" name="authors" placeholder="Athor's Name">
    <input type="text" name="edition" placeholder="Edition">
    <input type="text" name="status" placeholder="Status">
    <input type="text" name="quantity" placeholder="Quantity">
    <input type="text" name="category" placeholder="Category">
    <input type="submit" name="submit" class="btn orange center">
    </form>  
</section>
<?php include('include/footer.php');?>  

