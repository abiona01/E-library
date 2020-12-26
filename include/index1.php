<?php
include("include/header.php");
include("include/config.php");
$per_page_record = 20;  // Number of entries to show in a page.   
// Look for a GET variable page if not found default is 1.        
if (isset($_GET["page"])) {    
      $page  = $_GET["page"];    
 }    
 else {    
       $page=1;    
 }    
    
//determine the sql LIMIT starting number for the results on the displaying page  
 $start_from = ($page-1) * $per_page_record;     
    
 $query = "SELECT * FROM book LIMIT $start_from, $per_page_record";     
 $rs_result = mysqli_query ($conn, $query);  
?>

<?php
while ($row = mysqli_fetch_array($rs_result)) {    
    // Display each field of the records.    
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
    };    
?>
<div class="pagination">    
      <?php  
        $query = "SELECT COUNT(*) FROM book";     
        $rs_result = mysqli_query($conn, $query);     
        $row = mysqli_fetch_row($rs_result);     
        $total_records = $row[0];     
          
    echo "</br>";     
        // Number of pages required.   
        $total_pages = ceil($total_records / $per_page_record);     
        $pagLink = "";       
      
        if($page>=2){   
            echo "<a href='index1.php?page=".($page-1)."'>  Prev </a>";   
        }       
                   
        for ($i=1; $i<=$total_pages; $i++) {   
          if ($i == $page) {   
              $pagLink .= "<a class = 'active' href='index1.php?page="  
                                                .$i."'>".$i." </a>";   
          }               
          else  {   
              $pagLink .= "<a href='index1.php?page=".$i."'>   
                                                ".$i." </a>";     
          }   
        };     
        echo $pagLink;   
  
        if($page<$total_pages){   
            echo "<a href='index1.php?page=".($page+1)."'>  Next </a>";   
        }   
  
      ?>    
      </div>  
  
  
      <div class="inline">   
      <input id="page" type="number" min="1" max="<?php echo $total_pages?>"   
      placeholder="<?php echo $page."/".$total_pages; ?>" required>   
      <button onClick="go2Page();">Go</button>   
     </div>    
    </div>   
  </div>  
  <script>   
    function go2Page()   
    {   
        var page = document.getElementById("page").value;   
        page = ((page><?php echo $total_pages; ?>)?<?php echo $total_pages; ?>:((page<1)?1:page));   
        window.location.href = 'index1.php?page='+page;   
    }   
  </script>   