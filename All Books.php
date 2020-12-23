<?php include('Include/connect.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books Page</title>
</head>
<body>
    <?php include('Include/navbar.php'); ?>
    <h3>BOOKS</h3>
    <?php
    $sql = "SELECT * FROM `books` ORDER BY `books`.`name` ASC";
    $result = mysqli_query($connect, $sql); 

    echo "<table class= 'table table-hover table-bordered table-primary table-striped'>";
    echo "<tr>";
        echo  "<th>"; echo "id"; echo "</th>";
        echo  "<th>"; echo "Book"; echo "</th>";
        echo  "<th>"; echo "Author"; echo "</th>";
        echo  "<th>"; echo "Edition"; echo "</th>";
        echo  "<th>"; echo "Status"; echo "</th>";
        echo  "<th>"; echo "Quantity"; echo "</th>";
        echo  "<th>"; echo "Category"; echo "</th>";
    echo "</tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
            echo  "<td>"; echo $row['id']; echo "</td>";
            echo  "<td>"; echo $row['name']; echo "</td>";
            echo  "<td>"; echo $row['authors']; echo "</td>";
            echo  "<td>"; echo $row['edition']; echo "</td>";
            echo  "<td>"; echo $row['status']; echo "</td>";
            echo  "<td>"; echo $row['quantity']; echo "</td>";
            echo  "<td>"; echo $row['category']; echo "</td>";
        echo "</tr>";
    }
    echo "</table>"
    ?>
</body>
</html>
