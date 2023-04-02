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

<body class="colorset p-0 override-modal-open">
    <?php include_once('includes/header.php');?>

    <main class="colorset">
    <?php 
    $aid=$_GET['editid'];    
     
    $ret0=mysqli_query($con, "Select * From recipes INNER JOIN users ON recipes.user_id=users.user_id INNER JOIN cooker ON users.user_id=cooker.user_id where recipes.recipe_id='$aid'");      
    $result0=mysqli_fetch_array($ret0);




    ?>
    <!--####################### hero carousel ########################-->
    <section class="d-flex flex-column justify-content-center align-items-center px-0 w-100 position-relative" style="height: 100vh;">
      <div id="carouselExampleAutoplaying" class="carousel slide w-100 h-100 overflow-hidden " data-bs-ride="carousel">
        <div class="carousel-inner z-0 h-100">
          <div class="carousel-item active container-fluid px-0 h-100">
            <span class="position-relative d-flex justify-content-center h-100 z-1">
              <img class="w-100 h-100 object-fit-cover" src="<?php echo $result0['thumbnail_url'];?>"  alt="...">
            </span>
          </div>
        </div>
      </div>
      
      <!-- bookmark button -->
      <div class="overflow-hidden position-absolute d-flex justify-content-center align-items-center rounded-circle bg-darkgreen border-0 z-1" style="left: 7%;bottom: 4%;width: 4rem;height: 4rem;">
        <form action="" method="post">
          <?php  
              $query2=mysqli_query($con,"select fav_id from favrecipe where user_id='$User_ID' && recipe_id='$aid'");
              $res2 = mysqli_fetch_array($query2); 
              if(strlen($res2['fav_id'] == 0)){
          ?> 
          <input class="d-none" type="text" name="forvalue" id="" value="<?php echo $aid?>">
          <button name="Fav" class="btn border-0 fs-3 w-100 h-100 bg-darkgreen text-light "><i class="fa-regular fa-bookmark"></i></button>
          <?php             
              }else{
          ?>
              <input class="d-none" type="text" name="fordelete" id="" value="<?php echo $aid?>">
              <button name="Fav_delete" class="border-0 fs-3 w-100 h-100 bg-darkgreen text-light"><i class="fa-solid fa-bookmark text-light"></i></button>
          <?php }
          ?>
        </form>
      </div>
      <!-- bookmark button -->

      <!-- card -->
      <div class="d-lg-block d-none rounded-4 card position-absolute positioning bg-gray overflow-hidden" style="width: 25rem;">
          <div class="position-relative overflow-hidden w-100" style="height: 100px;">
            <img src="images/favicon.png" class="card-img-top" alt="">
          </div>
          <div class="card-body bg-gray fs-5">
            <ul class="px-0 py-3">
              <li class="cust mb-3"> <span class="fw-semibold">Cook :</span><span class="text-muted"><?php echo $result0['cook_time_minutes']?></span></li>
              <li class="cust mb-3"> <span class="fw-semibold">Additional :</span><span class="text-muted"><?php echo $result0['prep_time_minutes']?></span></li>
              <li class="cust mb-3"> <span class="fw-semibold">Total :</span><span class="text-muted"><?php echo $result0['total_time_minutes']?></span></li>
              <li class="cust mb-4"> <span class="fw-semibold">Servings :</span><span class="text-muted"><?php echo $result0['num_servings']?></span></li>
              <li class="cust mb-4"> <span class="fw-semibold">Yield :</span><span class="text-muted"><?php echo $result0['yields']?></span></li>
            </ul>
          </div>

      </div>
      <!-- card -->

      <!-- responsive of above card ^ -->
      <div class="d-lg-none d-block card container p-0">
          <div class="card-body colorset">
            <ul class="px-0 py-1">
            <li class="cust mb-3"> <span class="fw-semibold">Cook :</span><span class="text-muted"><?php echo $result0['cook_time_minutes']?></span></li>
              <li class="cust mb-3"> <span class="fw-semibold">Additional :</span><span class="text-muted"><?php echo $result0['prep_time_minutes']?></span></li>
              <li class="cust mb-3"> <span class="fw-semibold">Total :</span><span class="text-muted"><?php echo $result0['total_time_minutes']?></span></li>
              <li class="cust mb-4"> <span class="fw-semibold">Servings :</span><span class="text-muted"><?php echo $result0['num_servings']?></span></li>
              <li class="cust mb-4"> <span class="fw-semibold">Yield :</span><span class="text-muted"><?php echo $result0['yields']?></span></li>
            </ul>
          </div>
      </div>
      <!-- responsive of above card ^ -->

    </section>

    <!-- ######################### chef and his message ########################## -->
    <section> 
      <div class="d-flex container ">
        <!-- all details part  -->
        <div class="w-50 ">
          <!-- rating -->
          <div class="py-5 fs-5">
            <p class="mb-0 d-flex align-items-center">
              <span class="text-muted">Reviewed by 100  
              </span>
              <span class="ms-3 fs-6">
                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i><span class="ms-2 fw-semibold">4.6</span>
              </span>
          </p>
          </div>

          <!-- detail card -->
          <div class="bg-gray rounded-4 p-5 mb-5">
            <div class="mb-5">
              <h3><?php echo $result0['recp_description'];?></h3>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <div class="d-flex align-items-center justify-content-start">
                <span class="overflow-hidden rounded-circle me-3" style="width:80px;height: 80px;">
                  <img class="h-100 w-100 object-fit-cover" src="<?php echo $result0['profile_pic'];?>" alt="">
                </span>
                <span class="d-flex flex-column mt-3">
                  <h4 class="mb-0"><?php echo $result0['display_name'];?></h4>
                  <p><?php echo $result0['Country'];?></p>
                </span>
              </div>

              <!-- socials -->
              <div>
                <ul class="nav justify-content-end list-unstyled d-flex flex-row fs-3">
                  <li class="ms-4"><a href="<?php echo $result0['Twitter'];?>"><i class="fa-brands fa-twitter"></i></a></li>
                  <li class="ms-4"><a href="<?php echo $result0['Facebook'];?>"><i class="fa-brands fa-facebook"></i></a></li>
                  <li class="ms-4"><a href="<?php echo $result0['Instagram'];?>"><i class="fa-brands fa-instagram"></i></a></li>
                </ul>
              </div>
              
            </div>
          </div>

        </div>
        <div class="w-50">
        </div>
      </div>
    </section>

    <!--######################## INGREDIENTS,DIRECTION and video ###############################-->
    <section>
      <div class="d-flex container">
        <!-- ingredient and direction part -->
        <div class="w-50 ">

          <!-- INGREDIENTS list -->
          <div class="d-lg-flex p-3" >
            <!-- static header only -->
            <div class="w-25 me-4 d-lg-flex align-items-start">
              <h4 class="m-0">INGREDIENTS:</h4>
            </div>
            <!-- dynamic ingredient list -->
            <div class="d-lg-flex w-75 flex-lg-column">
              
              <?php
                  $ingredients_str = $result0['Ingredients'];
                  $ingredients_array = explode('=>',$ingredients_str);
                  $ingredients_array_length = sizeof($ingredients_array);
                for($i=0;$i<$ingredients_array_length;$i++){
              ?>

                <div class="d-lg-flex mb-3">
                  <span class="align-items-start">
                    <label class="rounded-circle border border-new-color me-3 d-flex justify-content-center align-items-center" style="width: 2rem;height: 2rem;"><?php echo $i+1?></label>
                  </span>
                  <span>
                    <label class="d-lg-flex align-items-center">
                      <p class="m-0 " style="font-size:18px;"><?php echo "$ingredients_array[$i]"?></p>
                    </label>
                  </span>
                </div>
              
              <?php
              }
              ?>

              
            </div>
          </div>

          <!-- DIRECTION -->
          <div class="d-lg-flex p-3" >
            <!-- static header only -->
            <div class="w-25 d-lg-flex align-items-start" style="margin-right: 32px;">
              <h4 class="m-0">DIRECTION:</h4>
            </div>
            <!-- dynamic direction list -->
            <div class="d-lg-flex w-75 flex-lg-column">
            <?php
                $steps_str = $result0['Steps'];
                $steps_array = explode('=>',$steps_str);
                $steps_array_length = sizeof($steps_array);
              for($i=0;$i<$steps_array_length;$i++){
            ?>
              <div class="d-lg-flex mb-3">
                <span class="d-lg-flex align-items-center flex-column me-3">
                  <span class="mb-2">
                    <label class="rounded-circle border border-new-color d-flex justify-content-center align-items-center" style="width: 2rem;height: 2rem;"><?php echo $i+1?></label>
                  </span>
                  <span class="h-100 w-0 border border-start border-new-color"></span>
                </span>
                <span>
                  <label class="d-lg-flex align-items-center">
                    <p class="m-0 " style="font-size:18px;"><?php echo "$steps_array[$i]"?></p>
                  </label>
                </span>
              </div>
              <?php
              }
              ?>
             
            </div>
          </div>
        </div>

        <!-- video part  -->
        <div class="w-50 ">       
          <div class="position-sticky p-3 m-0 rounded-3" style="right:0;top: 30%;">
            <video controls controlsList="nodownload" class="rounded-4 w-100 h-75" src="<?php echo $result0['original_video_url'];?>"></video>
          </div>
        </div>
      </div>

      
    </section>



  </main>

    <!--############################ footer ##############################-->
    <?php include_once('includes/footer.php');?>



</body>

</html>