<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

if(isset($_POST['login']))
{
    $Email=$_POST['loginEmail'];
    $Password=$_POST['loginPass'];

    $query=mysqli_query($con,"select user_id from users where user_email='$Email' && user_password='$Password' ");
    $ret=mysqli_fetch_array($query);
    if($ret>0){
        $_SESSION['uid']=$ret['user_id'];
        header('location:index.php');
    }
    else{
        $msg1="Invalid Details.";
    }
}


if(isset($_POST['signup'])){
  $uname=$_POST['username'];
  $e_mail=$_POST['signupEmail'];
  $psw=$_POST['signupPassword'];
  $Cpsw=$_POST['signupConfirmPassword'];
  $ret1=mysqli_query($con, "select user_id from users where user_email='$e_mail'");
  $result1=mysqli_fetch_array($ret1);
  if($result1>0){
      $msg1=  "This email is already associated with another account"; 
  }
  else if($psw != $Cpsw){
      $msg2=  "passwords don't match. Try again.";    
  }
  else{
      $query1=mysqli_query($con, "insert into users(user_name,user_email,user_password) values ('$uname','$e_mail','$psw')");
      if ($query1) { 
          echo '<script type ="text/JavaScript"> 
              alert("You are succesfully registerd. press \"ok\" to log in")
          </script> '; 
      }
      else{
          echo '<script>alert("Something Went Wrong. Please try again.");</script>';
      }
  }
}

if(isset($_POST['search'])){
    $Emp_ID=$_SESSION['uid'];
    $catagory=$_POST['catagory'];
    $City=$_POST['City']; 
    $_SESSION['City']=$City;
    $_SESSION['catagory']=$catagory; 
    // $row = mysqli_query($con, "Select Emp_GIG_ID from gigs where GIG_City='$city' AND GIG_Catagory='$catagory'");
    header('location:hirenowfilter.php');
    
}?>
<!doctype html>
<html lang="en">

<head>
    <?php include_once('includes/for-head.php');?>
    <title>Frecipe.</title>

</head>

<body class="colorset">

  <?php include_once('includes/header.php');?>


  <main class="colorset">

    <!--####################### hero carousel ########################-->
    <section class="d-flex justify-content-center align-items-center px-0 w-100" style="height: 100vh;">
      <div id="carouselExampleAutoplaying" class="carousel slide w-100 h-100 overflow-hidden " data-bs-ride="carousel">
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
        <div class="carousel-indicators z-3 pb-4">
          <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="0" class="active bg-lightgreen px-4 me-2" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="1" class="bg-lightgreen px-4 me-2" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="2" class="bg-lightgreen px-4 me-2" aria-label="Slide 3"></button>
        </div>
                <?php             
          for ($counter=0; $counter < 3; $counter++) {
            $random = rand(1,17);
            $ret0=mysqli_query($con, "Select * From recipes where recipe_id='$random'");
            $result0=mysqli_fetch_array($ret0);
            ?> 
        <div class="carousel-inner z-0 h-100">
          <div class="carousel-item active container-fluid px-0 h-100">
                        <!-- two for transparent and opacity purpose -->
            <div class="card position-absolute positioning-headline rounded-0 z-3 bg-transparent rounded-3 border-0 text-center">
              <a href="recipe-intro.php?editid=<?php echo $result0['recipe_id'];?>" class="link-hover"><h2 class="px-4 py-3"><?php echo $result0['recp_name'];?></h2></a>
            </div>            
            <div class="card position-absolute positioning-headline rounded-0 z-2 opacity-75 rounded-3 border-0 text-center">
            <a href="recipe-intro.php?editid=<?php echo $result0['recipe_id'];?>" class="link-hover"><h2 class="px-4 py-3"><?php echo $result0['recp_name'];?></h2></a>
            </div>
                        <!-- two for transparent and opacity purpose -->
            <span class="position-relative d-flex justify-content-center h-100 z-1">
              <img class="w-100 h-100 object-fit-cover" src="<?php echo $result0['thumbnail_url'];?>"  alt="...">
            </span>
          </div>

      <?php
      } 
      ?>         
        </div>
      </div>
    </section>
    
    <!--######################### Recipes grids ######################### -->
     
    <section class="gap mt-5">
      <div class="container">
        <h1 class="fw-bolder mt-5 mb-3"><span id="lgdes">Featured</span> Recipes</h1>    
        <div class="recipes-grids w-100">
        <?php             
      $random0 = rand(1,17);
      $ret1=mysqli_query($con, "Select * From recipes where recipe_id='$random0'");
      $result1=mysqli_fetch_array($ret1);
      ?>
          <a class="grid-card-group rounded-4 overflow-hidden card-big" href="recipe-intro.php?editid=<?php echo $random0;?>">
            <!-- <div > -->
            <div class=" h-100">
              <img class="h-100 w-100 scalingtrans object-fit-cover" src="<?php echo $result1['thumbnail_url'];?>" alt="">
            </div>
            <div class="overly px-5 position-absolute">
              <h4><?php echo $result1['recp_name'];?></h4>
            </div>
          </a>
          <?php             
      $random1 = rand(1,17);
      $ret2=mysqli_query($con, "Select * From recipes where recipe_id='$random1'");
      $result2=mysqli_fetch_array($ret2);
      ?>
          <a class="grid-card-group rounded-4 overflow-hidden card-small" href="recipe-intro.php?editid=<?php echo $random1;?>">
            <div class=" h-100">
              <img class="h-100 w-100 scalingtrans object-fit-cover" src="<?php echo $result2['thumbnail_url'];?>" alt="">
            </div>
            <div class="overly px-5 position-absolute">
                <h4><?php echo $result2['recp_name'];?></h4>
              </div>
          </a>
          <?php             
      $random2 = rand(1,17);
      $ret3=mysqli_query($con, "Select * From recipes where recipe_id='$random2'");
      $result3=mysqli_fetch_array($ret3);
      ?>
          <a class="grid-card-group rounded-4 overflow-hidden card-small" href="recipe-intro.php?editid=<?php echo $random2;?>">
            <div class=" h-100">
              <img class="h-100 w-100 scalingtrans object-fit-cover" src="<?php echo $result3['thumbnail_url'];?>" alt="">
            </div>
            <div class="overly px-5 position-absolute">
                <h4><?php echo $result3['recp_name'];?></h4>
              </div>
          </a>
          <?php             
      $random3 = rand(1,17);
      $ret4=mysqli_query($con, "Select * From recipes where recipe_id='$random3'");
      $result4=mysqli_fetch_array($ret4);
      ?>
          <a class="grid-card-group rounded-4 overflow-hidden card-long" href="recipe-intro.php?editid=<?php echo $random3['recipe_id'];?>">
            <div class=" h-100">
              <img class="h-100 w-100 scalingtrans object-fit-cover" src="<?php echo $result4['thumbnail_url'];?>" alt="">
            </div>
            <div class="overly px-5 position-absolute">
                <h4><?php echo $result4['recp_name'];?></h4>
              </div>
          </a>
          <?php             
      $random4 = rand(1,17);
      $ret5=mysqli_query($con, "Select * From recipes where recipe_id='$random4'");
      $result5=mysqli_fetch_array($ret5);
      ?>
          <a class="grid-card-group rounded-4 overflow-hidden card-small" href="recipe-intro.php?editid=<?php echo $random4;?>">
            <div class=" h-100">
              <img class="h-100 w-100 scalingtrans object-fit-cover" src="<?php echo $result5['thumbnail_url'];?>" alt="">
            </div>
            <div class="overly px-5 position-absolute">
                <h4><?php echo $result5['recp_name'];?></h4>
              </div>
          </a>
          <?php             
      $random5 = rand(1,17);
      $ret6=mysqli_query($con, "Select * From recipes where recipe_id='$random5'");
      $result6=mysqli_fetch_array($ret6);
      ?>
          <a class="grid-card-group rounded-4 overflow-hidden card-long" href="recipe-intro.php?editid=<?php echo $random5;?>">
            <div class=" h-100 w-100">
              <img class="h-100 w-100 scalingtrans object-fit-cover" src="<?php echo $result6['thumbnail_url'];?>" alt="">
            </div>
            <div class="overly px-5 position-absolute">
                <h4><?php echo $result6['recp_name'];?></h4>
              </div>
          </a>
          <?php             
      $random6 = rand(1,17);
      $ret7=mysqli_query($con, "Select * From recipes where recipe_id='$random6'");
      $result7=mysqli_fetch_array($ret7);
      ?>
          <a class="grid-card-group rounded-4 overflow-hidden card-small" href="recipe-intro.php?editid=<?php echo $random6;?>">
            <div class=" h-100">
              <img class="h-100 w-100 scalingtrans object-fit-cover" src="<?php echo $result7['thumbnail_url'];?>" alt="">
            </div>
            <div class="overly px-5 position-absolute">
                <h4><?php echo $result7['recp_name'];?></h4>
            </div>
          </a>
          
           
        </div>
      </div>
      
    </section>

    <!--######################### recipes in 30  ########################### not done!!--> 
    <section class="gap my-5 non-veges">
      <div class="container pt-3">
        <h1 class="fw-bolder mb-3">Done in <span id="lgdes">30</span></h1>
          <!-- for the slider -->
        <div class="position-relative ">

            <!-- slider button -->
          <button class="pre-btn">
              <span class="rounded-circle bg-gray opacity-75 " id="hov-next-prev" style="height: 2.5rem;width: 2.5rem;">
              <label class="h-100 w-100 d-flex justify-content-center align-items-center">
                <i class="fa-solid fa-chevron-right text-dark fs-2 hov-color"></i>
              </label>
            </span>
          </button>
          <button class="nxt-btn">
              <span class="rounded-circle bg-gray opacity-75" id="hov-next-prev" style="height: 2.5rem;width: 2.5rem;">
              <label class="h-100 w-100 d-flex justify-content-center align-items-center">
                <i class="fa-solid fa-chevron-right text-dark fs-2 hov-color"></i>
              </label>
            </span>
          </button>
          
          
          <div class="non-veges-wrappper d-flex align-items-center overflow-hidden ps-3">
            <?php             
              for ($counter=0; $counter < 7; $counter++) {
                $random7 = rand(1,17);
                $ret8=mysqli_query($con, "Select * From recipes where recipe_id='$random7'");
                $result8=mysqli_fetch_array($ret8);
                ?> 
              <div class="card rounded-4 col-lg-3 col-md-4 col-sm-5 col-6 col-md-4 col-sm-5 col-6 overflow-hidden me-3 position-relative bg-gray" style="width: 18rem;height: 24rem;">

                <!-- bookmark button -->
                <div class="overflow-hidden position-absolute z-3 bg-gray rounded-2 " style="right:4%;top:3%;width: 2rem;height: 2rem;">
                  <button class="d-flex justify-content-center align-items-center border-0 w-100 h-100"><i class="fa-regular fa-bookmark"></i></button>
                </div>
                 <!-- bookmark button -->

                <div class="w-100" style="height: 65%;">
                  <img src="<?php echo $result8['thumbnail_url'];?>" class="w-100 h-100 object-fit-cover card-img-top" alt="...">
                </div>
                <div class="card-body">
                  <a href="recipe-intro.php?editid=<?php echo $random7;?>" class=""><h5 class="card-title mt-3 mb-2"><?php echo $result8['recp_name'];?></h5></a>
                </div>
              </div>
            <?php             
            }
            ?> 
        </div>

      </div>
    </section>

        <!--######################### small banners ######################### -->
    <section class="gap position-relative w-100" style="height: 24rem;">
      <!-- <div class=""> -->
        <div class="h-100">
          <img class="w-100 h-100 object-fit-cover" src="<?php echo $result8['thumbnail_url'];?>" alt="" srcset="">
        </div>
        <div class="position-absolute top-50 translate-middle bg-light px-4 py-3 text-end" style="right:-6%;width: 30rem;"> 
          <a href="recipe-intro.php?editid=<?php echo $random7;?>">
            <h3><?php echo $result8['recp_name'];?></h3>
          </a>
          <p><?php echo $result8['recp_description'];?></p>
        </div>
      <!-- </div> -->
    </section>
    
    <!--######################### for meat special ########################### -->
    <section class="gap my-5 non-veges">
      <div class="container pt-3">
        <h1 class="fw-bolder"><span id="lgdes">Meat</span> Special</h1>
        <!-- for the slider -->
        <div class="position-relative ">

          <!-- slider button -->
          <button class="pre-btn">
            <span class="rounded-circle bg-gray opacity-75 " id="hov-next-prev" style="height: 2.5rem;width: 2.5rem;">
              <label class="h-100 w-100 d-flex justify-content-center align-items-center">
                <i class="fa-solid fa-chevron-right text-dark fs-2 hov-color"></i>
              </label>
            </span>
          </button>
          <button class="nxt-btn">
            <span class="rounded-circle bg-gray opacity-75" id="hov-next-prev" style="height: 2.5rem;width: 2.5rem;">
              <label class="h-100 w-100 d-flex justify-content-center align-items-center">
                <i class="fa-solid fa-chevron-right text-dark fs-2 hov-color"></i>
              </label>
            </span>
          </button>
          
          <div class="non-veges-wrappper d-flex align-items-center overflow-hidden ps-3">
            <?php             
              for ($counter=0; $counter < 7; $counter++) {
                $random7 = rand(1,17);
                $ret8=mysqli_query($con, "Select * From recipes where recipe_id='$random7'");
                $result8=mysqli_fetch_array($ret8);
                ?> 
              <div class="card rounded-4 col-lg-3 col-md-4 col-sm-5 col-6 col-md-4 col-sm-5 col-6 overflow-hidden me-3 position-relative bg-gray" style="width: 18rem;height: 24rem;">

                <!-- bookmark button -->
                <div class="overflow-hidden position-absolute z-3 bg-gray rounded-2 " style="right:4%;top:3%;width: 2rem;height: 2rem;">
                  <button class="d-flex justify-content-center align-items-center border-0 w-100 h-100"><i class="fa-regular fa-bookmark"></i></button>
                </div>
                 <!-- bookmark button -->

                <div class="w-100" style="height: 65%;">
                  <img src="<?php echo $result8['thumbnail_url'];?>" class="w-100 h-100 object-fit-cover card-img-top" alt="...">
                </div>
                <div class="card-body">
                  <a href="recipe-intro.php?editid=<?php echo $random7;?>" class=""><h5 class="card-title mt-3 mb-2"><?php echo $result8['recp_name'];?></h5></a>
                </div>
              </div>
            <?php             
            }
            ?> 
        </div>

      </div>

      </div>
    </section>

    <!-- ######################## Must visit ############################# -->
        <section class="gap">
          <div class="container">
            <h1 class="fw-bolder my-3">Must <span id="lgdes">visit</span></h1>
            <div class="row d-lg-flex justify-content-center w-100" >
              
                <div class="col-lg-6 card rounded-4 overflow-hidden px-0 me-3 bg-gray" style="width: 48%;">
                  <div class="w-100" style="height: 25rem;">
                    <img class="w-100 h-100 object-fit-cover" src="images1/kfc.jpg" alt="">
                  </div>
                  <div class="p-3">
                    <a href="">
                      <h3>KFC</h3>
                    </a>              
                    <p>Its a very good place. The buckets are just wow!</p>
                  </div>
                </div>
                <div class="col-lg-6 card rounded-4 overflow-hidden px-0 bg-gray" style="width: 48%;">
                  <div class="w-100" style="height: 25rem;">
                    <img class="w-100 h-100 object-fit-cover" src="images1/barcode.jpg" alt="">
                  </div>
                  <div class="p-3">
                    <a href="">
                      <h3>Barcode.</h3>
                    </a>
                    <p>The burger is very delicious. You should check it out.</p>
                  </div>
                </div>

            </div>
          </div>
        </section>
  </main>

  <!--############################ footer ##############################-->
    <?php include_once('includes/footer.php');?>

    <script src="js/script.js"></script>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="bootstrap/JS/bootstrap.min.js"></script>
    <script src="bootstrap/JS/bootstrap.bundle.min.js"></script>
</body>

</html>