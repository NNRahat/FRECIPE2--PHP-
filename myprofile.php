<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

if(isset($_POST['save_profile'])){
    $userid=$_GET['editid']; 
  // country DOB l_name f_name
    $f_name=$_POST['f_name'];
    $l_name=$_POST['l_name'];
    $DOB=$_POST['DOB'];
    $country=$_POST['country'];

    $query=mysqli_query($con,"UPDATE cooker SET F_name='$f_name',L_name='$l_name',Date_of_birth='$DOB',Country='$country' WHERE user_id='$userid'");
    
}
if(isset($_POST['for_public'])){
    $userid=$_GET['editid']; 
  // country DOB l_name f_name
    $Display_name=$_POST['Display_name'];
    $Describe=$_POST['Describe'];
    $Pinterest=$_POST['Pinterest'];
    $Instagram=$_POST['Instagram'];
    $Facebook=$_POST['Facebook'];
    $Twitter=$_POST['Twitter'];

    $query=mysqli_query($con,"UPDATE cooker SET display_name='$Display_name',des_self='$Describe',Facebook='$Facebook',Instagram='$Instagram',Pinterest='$Pinterest',Twitter='$Twitter' WHERE '$userid'");
    
}

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

<!--######################## sidebar & contents ############################-->
    <div class="container-fluid px-4 pb-5 my-5">
      <div class="row">

        <!-- sidebar -->
        <div class="col-lg-3 pt-0">
          <div class="position-sticky p-3 m-0 rounded-3 pt-0" style="left:0;top: 10%;">
            <ul class="nav nav-tabs for-focus flex-column mx-1 bg-gray text-center shadow">
                <li class="nav-item">
                  <a class="nav-link rounded-0 fw-semibold active profile-side-hover" aria-current="page" data-bs-toggle="tab" href="#personal-info">Personal Info</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link rounded-0 fw-semibold profile-side-hover" aria-current="page" data-bs-toggle="tab" id="next_page" href="#Public-Profile-Setting">Public Profile Setting</a>
                </li>
                <!-- <li class="nav-item">
                  <a class="nav-link rounded-0 fw-semibold profile-side-hover" aria-current="page" data-bs-toggle="tab" href="#Change-Password ">Change Password</a>
                </li> -->
                
            </ul>
          </div>
            
        </div>

        <!-- contents -->
        <div class="tab-content bg-gray col-lg-9 shadow">
          <!--#### Personal Info ###-->
          <div id="personal-info" class="tab-pane show active p-5">
            <?php 
            $aid=$_GET['editid'];  
              $ret1=mysqli_query($con, "Select users.*,cooker.* From users INNER JOIN cooker ON users.user_id=cooker.user_id where users.user_id='$aid'");
              $row=mysqli_fetch_array($ret1);
            ?>
            <form method="post">
            <div class="d-flex justify-content-between align-items-center p-2 mb-4">
              <h1>Personal Info</h1>
              <button class="btn bg-darkgreen py-3 px-4 text-light" name="save_profile">Save Changes</button>
            </div>
            <!-- basic info -->
            <div class="container">
                <div class="row fs-5 fw-semibold">
                  <span class="d-flex flex-column mb-3 col-12 mb-3">
                    <label for="">Email:</label>
                    <input type="email" class="rounded-3 px-2" style="height: 50px;border: 1px solid;" placeholder="<?php echo $row['user_email']?>" disabled >
                  </span>
                  <span class="col-12 container-fluid mb-3">
                    <span class="row">
                      <span class="d-flex flex-column mb-3 col-6">
                        <label for="">First name:</label>
                        <input type="text" name="f_name"  class="rounded-3 px-2" style="height: 50px;border: 1px solid;" value="<?php echo $row['F_name']?>">
                      </span>
                      <span class="d-flex flex-column mb-3 col-6">
                        <label for="">Last name:</label>
                        <input type="text" name="l_name" class="rounded-3 px-2" style="height: 50px;border: 1px solid;" value="<?php echo $row['L_name']?>">
                      </span>
                    </span>
                  </span>
                  <span class="d-flex flex-column mb-3 col-6">
                    <label for="">Date Of Birth:</label>
                    <input type="text" name="DOB" class="rounded-3 px-2" style="height: 50px;border: 1px solid;" value="<?php echo $row['Date_of_birth']?>">
                  </span>
                  <span class="d-flex flex-column mb-3 col-6">
                    <label for="">Country:</label>
                    <input type="text" name="country" class="rounded-3 px-2" style="height: 50px;border: 1px solid;" value="<?php echo $row['Country']?>">
                  </span>
                </div>          
            </div>
            </form>
          </div>

          <!--### Public Profile Setting ### -->
          <div id="Public-Profile-Setting" class="tab-pane p-5">
            <?php            
              $aid2=$_GET['editid'];                   
              $ret2=mysqli_query($con, "Select * From cooker where user_id='$aid2'");
              $row2=mysqli_fetch_array($ret2);
            ?>
            <form action="" method="post">
              <div class="d-flex justify-content-between align-items-center p-2 mb-4">
                <h1>Public Profile Setting</h1>
                <button name="for_public" class="btn bg-darkgreen py-3 px-4 text-light">Save Changes</button>
              </div> 
              <!-- Display info -->
              <div class="container mb-5 fs-5 fw-semibold">
                <div class="row">
                  <div class="col-12 d-flex flex-column text-start">
                    <span class="d-flex flex-column mb-3">
                      <label for="">Display name:</label>
                      <input type="text" name="Display_name" class="rounded-3 px-2" style="height: 50px;border: 1px solid;" value="<?php echo $row2['display_name']?>">
                    </span>
                    <span class="d-flex flex-column">
                      <label for="">Describe yourself in short :</label>
                      <textarea name="Describe" id="" cols="30" class="rounded-3 px-2 py-2" style="resize: none;height: 144px;"><?php echo $row2['des_self'];?></textarea>
                    </span>
                  </div>
                  <!-- <div class="col-6 d-flex align-items-center justify-content-center pt-3">
                    <div class="bg-success w-75 rounded-3 d-flex justify-content-center bg-body align-items-center h-100">
                      <div class="w-50 rounded-circle overflow-hidden d-flex justify-content-center align-items-center position-relative" >
                        <input  type="file" name="file" id="load" class="d-none">
                        <img class="w-100 h-100 d-block" id="bruh_profile" src="images1/users/player-1.png" alt="" srcset="">
                        <label id="custom_load" onclick="defaultBtnProfileActive()" class="w-100 text-center bg-darkgreen text-light position-absolute start-0 bottom-0">Upload</label>
                      </div>
                    </div>
                  </div> -->
                </div>
              </div>
              <!-- social media accounts -->
              <div class="container fs-5 fw-semibold">
                <h1>Social Media Accounts</h1>
                <div class="row">
                  <span class="d-flex flex-column mb-3 col-6">
                    <label for="">Facebook</label>
                    <input type="text" name="Facebook" class="rounded-3 px-2" style="height: 50px;border: 1px solid;" value="<?php echo $row2['Facebook']?>">
                  </span>
                  <span class="d-flex flex-column mb-3 col-6">
                    <label for="">Instagram</label>
                    <input type="text" name="Instagram" class="rounded-3 px-2" style="height: 50px;border: 1px solid;" value="<?php echo $row2['Instagram']?>">
                  </span>
                  <span class="d-flex flex-column mb-3 col-6">
                    <label for="">Pinterest</label>
                    <input type="text" name="Pinterest" class="rounded-3 px-2" style="height: 50px;border: 1px solid;" value="<?php echo $row2['Pinterest']?>">
                  </span>
                  <span class="d-flex flex-column mb-3 col-6">
                    <label for="">Twitter</label>
                    <input type="text" name="Twitter" class="rounded-3 px-2" style="height: 50px;border: 1px solid;" value="<?php echo $row2['Twitter']?>">
                  </span>
                </div>
              </div>
            </form>

          </div>

        </div>
      </div>
    </div>
</main>

  <!--############################ footer ##############################-->
    <?php include_once('includes/footer.php');?>

</body>

</html>