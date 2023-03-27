<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

?>
<!doctype html>
<html lang="en">

<head>
    <?php include_once('includes/for-head.php');?>
    <title>Frecipe.</title>

</head>

<body class="colorset">

  <?php include_once('includes/header.php');?>


  <main class="colorset">
    <?php             
            $array = [];
            $counter=0;
            while($counter!=7){
            $flag = 0;
            $random7 = rand(1,17);
            $array_lenght = sizeof($array);
            if($array_lenght == 0){
                array_push($array,$random7);
                $array_lenght++;
            }else{
                for($i = 0; $i <= $array_lenght; $i++){
                if($random7 == $array[$i]){
                    $flag = 1;
                    break;
                }
                }
                if($flag == 0){
                array_push($array,$random7);
                $counter++;
                }
            }
            }
            ?>
        
          
      
    <div class="container my-5">
    <?php 
        $lenght = sizeof($array);
        for($i=0;$i<$lenght;$i++){
            $ret1=mysqli_query($con, "Select * From recipes INNER JOIN cooker ON recipes.user_id=cooker.user_id INNER JOIN users ON cooker.user_id=users.user_id where recipes.recipe_id='$array[$i]'");
            $result1=mysqli_fetch_array($ret1);
        ?>
        <div class="card mb-3 rounded-4 overflow-hidden" style="max-width: 1400px; height:400px;">
            <div class="row g-0 h-100">
                <div class="col-md-4 h-100">
                    <img class="w-100 h-100 object-fit-cover" src="<?php echo $result1['thumbnail_url'];?>" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8 p-5">
                    <div class="card-body">
                        <a href=""><h3 class="card-title"><?php echo $result1['recp_name'];?></h3></a> 
                        <p class="card-text"><?php echo $result1['recp_description'];?></p>
                        <div class="d-flex align-items-center justify-content-between mt-5">
                            <div class="d-flex align-items-center justify-content-start">
                                <span class="overflow-hidden rounded-circle me-3" style="width:80px;height: 80px;">
                                    <img class="h-100 w-100 object-fit-cover" src="<?php echo $result1['profile_pic'];?>" alt="">
                                </span>
                                <span class="d-flex flex-column mt-3">
                                <h4 class="mb-0"><?php echo $result1['display_name'];?></h4>
                                <p><?php echo $result1['Country'];?></p>
                                </span>
                            </div>

                            <!-- socials -->
                            <div>
                                <ul class="nav justify-content-end list-unstyled d-flex flex-row fs-3">
                                <li class="ms-4"><a href="<?php echo $result1['Twitter'];?>"><i class="fa-brands fa-twitter"></i></a></li>
                                <li class="ms-4"><a href="<?php echo $result1['Facebook'];?>"><i class="fa-brands fa-facebook"></i></a></li>
                                <li class="ms-4"><a href="<?php echo $result1['Instagram'];?>"><i class="fa-brands fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php }?>
    </div>

  </main>

  <!--############################ footer ##############################-->
    <?php include_once('includes/footer.php');?>


</body>

</html>