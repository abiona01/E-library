<?php
include("include/header.php");
include("include/config.php");
?>

<div class="container">
	<?php
		if(isset($_POST['submit'])) {
			$search = mysqli_real_escape_string($conn, $_POST['search']);
			$sql = "SELECT * FROM book WHERE title LIKE '%$search%' OR author LIKE '%$search%'";
			$result = mysqli_query($conn, $sql);
			$queryResult = mysqli_num_rows($result);

			echo"There are ".$queryResult." results!";

			if($queryResult > 0){
				while($row = mysqli_fetch_assoc($result)) { ?>
				<ul>
                    <li>
                        <i class="tiny material-icons prefix" style="top:10px">book</i>
                        <a href="<?php echo $row["link"];?>">
                        <h5 class="black-text"><?php echo $row["title"];?> - <?php echo $row["author"];?> </h5> </a>
                    </li>
                </ul>
					<?php
				}
			} else {
				echo "There are no results matching your search! Would you like to request a book? Chat with us";
			}
		}
	?>
</div>
<?php
include('include/footer.php');
?>