<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

if(isset($_POST['query'])){
      $input=$_POST['query']; 

      $query20=mysqli_query($con,"select recipe_id from recipes where recp_name LIKE '%$input%'");
      $num= $con->query($query20); 
      if($num->num_rows > 0 ){
        while($row=$result->fetch_assoc()){
          echo "<a href='#'><button class='w-100 py-2 px-4 overflow-hidden border-0 search-div-hover text-start'>".$row['recp_name']."</button></a>";
        }
    }
}
    ?>