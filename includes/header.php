<?php

  if(isset($_POST['login'])){
      $Email=$_POST['loginEmail'];
      $Password=$_POST['loginPass'];

      $query=mysqli_query($con,"select user_id from users where user_email='$Email' && user_password='$Password' ");
      $ret=mysqli_fetch_array($query);
      if($ret>0){
          $_SESSION['uid']=$ret['user_id'];
          header('location:index.php');
          $msg2="Log in Successful!";
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
                alert("You are succesfully registerd. press \"ok\" and log in")
            </script> '; 
        }
        else{
            echo '<script>alert("Something Went Wrong. Please try again.");</script>';
        }
    }
  }

//   if(isset($_POST['query'])){
//     $input=$_POST['query']; 

//     $query20=mysqli_query($con,"SELECT recipe_id from recipes where recp_name LIKE '%$input%'");
//     $num=mysqli_num_rows($query20);  
//     if($num > 0 ){
//       while($ret=mysqli_fetch_array($query20)){
//         echo "<a href='#'><button class='w-100 py-2 px-4 overflow-hidden border-0 search-div-hover text-start'>".$ret['recp_name']."</button></a>";
//       }
//   }
// }
  if(isset($_POST['search'])){
    

    $seatvh=$_POST['seach_box'];
    header('location:search.php?editsearch='.$seatvh);

  }


  //bookmark
  $User_ID=$_SESSION['uid'];
    $aid=$_GET['editid'];   
    $query=mysqli_query($con,"select * from recipes where user_id='$aid'");

    if(isset($_POST['Fav'])){
        // $query_fav=mysqli_query($con,"select * from recipes where user_id='$aid'");
        // $for_fav=mysqli_fetch_array($query_fav);
        $recipe_id= $_POST['forvalue'];

        $query4=mysqli_query($con,"INSERT INTO favrecipe(recipe_id, user_id) VALUES ('$recipe_id','$User_ID')");
    }
    if(isset($_POST['Fav_delete'])){   
        $recipe_id= $_POST['fordelete']; 
        $query5=mysqli_query($con,"DELETE FROM favrecipe WHERE recipe_id='$recipe_id'");
    }


?>

<header>
    <!-- place navbar here -->
    <nav class="colorset navbar navbar-expand-lg pb-0 bg-body-primary d-flex justify-content-center align-items-center ps-2 pe-0">
      <div class="container-fluid my-2 d-lg-flex justify-content-between align-items-center">
        <div class="row w-100">
          <!-- logos -->
          <div class="logo col-10 col-lg-1">
            <a href="index.php"><h2 id="logoid" class="fs-1 fw-bold">Frec<Span id="lgdes">i</Span>pe<Span id="lgdes">.</Span></h2></a>
          </div>

          <!-- burger icon -->
          <button class="navbar-toggler col-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <!-- links -->
          <div class="collapse navbar-collapse d-lg-flex justify-content-between col-lg-11 align-items-center pe-0" id="navbarScroll">
              <ul class="navbar-nav my-2 navbar-nav-scroll w-100 ps-lg-5 fs-5 d-flex flex-column justify-content-start flex-lg-row justify-content-lg-start" style="--bs-scroll-height: 200px;">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="index.php"><b>Home</b></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="trending.php"><b>Trending</b></a>
                </li>
                <?php
                $User_ID=$_SESSION['uid'];                 
                $ret15=mysqli_query($con, "Select * from users where user_id='$User_ID'");
                $result15=mysqli_fetch_array($ret15);
                if(strlen($_SESSION['uid'] == 0)){?>
                  <li class="nav-item">
                    <a type="button" class="nav-link ms-lg-2 px-4 bg-darkgreen text-light rounded-3 pe-auto" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap" id="text-white" aria-current="page" href=""><b>Login</b></a>
                  </li>
                <?php } ?>
              </ul>

              <form class="input-group mw-100 mt-5 my-lg-0 position-relative" role="search" method="post">
                <input type="text" id="search" name="seach_box" onkeyup="searchfunction()" class="form-control rounded-start-pill border-0 bg-gray py-3 px-4 " placeholder="search" aria-label="" aria-describedby="button-addon2">
                <button class="btn btn-outline-secondary rounded-end-pill py-2 px-4 border-0 bg-gray" name="search" id="button-addon2"><i class="fa-solid fa-magnifying-glass"></i></button>
                <div class="overflow-hidden position-absolute bg-gray shodow rounded-5 w-75 z-3" style="top:102%">
                  <div id="show_list">
                    
                  </div>
                  <!-- <ul class="navbar-nav flex-column fs-4 " id="show_list">                        
                    <li class=""><a class="" href=""><button class="w-100 py-2 px-4 overflow-hidden border-0 search-div-hover text-start"><?php //echo $ret21['recipe_id'];?></button></a></li>
                  </ul> -->
                </div>

              </form>
          </div>
        </div>
      </div>
    </nav>

    <!--######################### Modal ##########################-->
    <div class="modal py-5 fade" tabindex="-1" role="dialog" id="exampleModal" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content rounded-4 shadow bg-palegreen">
          <div class="modal-header flex-column w-100 p-5 pb-4 border-bottom-0">
            <div class="modal-header border-0 px-0 py-2 w-100">
              <ul class="nav nav-tabs w-75 border-new-color">
                <li class="nav-item w-50">
                  <a class="nav-link active profile-side-hover fw-bolder" data-bs-toggle="tab" aria-current="page" href="#log-in">LOGIN</a>
                </li>
                <li class="nav-item w-50">
                  <a class="nav-link fw-bolder profile-side-hover" data-bs-toggle="tab" href="#sign-up">SIGNUP</a>
                </li>
              </ul>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
          </div>


          <div class="tab-content">
            <!-- log in  -->
            <div id="log-in" class="modal-body tab-pane show active p-5 pt-0">
            
              <div class="modal-header px-0 py-2 w-100 border-0">
                <h1 class="fw-bold mb-0 fs-2">Log In</h1>
              </div>
              <div style="padding:0px 0px">
                  <h6 style="font-size:16px;color:red" align="center"> <?php if($msg1){
                      echo $msg1;
                  }  ?> </h6>
                  <h6 style="font-size:16px;color:green" align="center"> <?php if($msg2){
                  echo $msg2;
                  }  ?> </h6>  
              </div>
              <form class="" method="post">
                <!-- email -->
                <div class="form-floating mb-3">
                  <input type="email" class="form-control rounded-3" id="floatingInput" placeholder="name@example.com" name="loginEmail">
                  <label for="floatingInput">Email address</label>
                </div>
                <!-- password -->
                <div class="form-floating mb-3">
                  <input type="password" class="form-control rounded-3" id="floatingPassword" placeholder="Password" name="loginPass">
                  <label for="floatingPassword">Password</label>
                </div>
                <button class="w-100 mb-2 btn btn-lg rounded-3 bg-darkgreen text-light"  name="login" type="submit">Log in</button>
                <span class="d-flex justify-content-between align-items-center my-3">
                  <hr style="width: 40%;">
                  <h2 class="fs-5 fw-bold w-25 text-center">Or</h2>
                  <hr style="width: 40%;">
                </span>
                <!-- google -->
                <button class="w-100 py-2 mb-2 btn btn-outline-dark rounded-3" type="submit">
                  <i class="fa-brands fa-google"></i>
                  Log in with google
                </button>
                <!-- fb -->
                <button class="w-100 py-2 mb-2 btn btn-outline-primary rounded-3" type="submit">
                  <i class="fa-brands fa-facebook"></i>
                  Log in with Facebook
                </button>
                <!-- github -->
                <button class="w-100 py-2 mb-2 btn btn-outline-secondary rounded-3" type="submit">
                  <i class="fa-brands fa-github"></i>
                  Log in with GitHub
                </button>
              </form>
            </div>
            <!-- sign up -->
            <div id="sign-up" class="tab-pane modal-body p-5 pt-0">
              <div style="padding:0px 150px">
                  <h6 style="font-size:16px;margin-top:15px;color:red" align="center"> <?php if($msg1){
                      echo $msg1;
                  }  ?> </h6>
                  <h6 style="font-size:16px;margin-top:15px;color:red" align="center"> <?php if($msg2){
                  echo $msg2;
                  }  ?> </h6>  
              </div>
              <div class="modal-header px-0 py-2 w-100 border-0">
                <h1 class="fw-bold mb-0 fs-2">Sign up </h1>
              </div>
              <form class="" method="post">
                <div class="form-floating mb-3">
                  <input type="text" class="form-control rounded-3" name="username" id="floatingInput" placeholder="name">
                  <label for="floatingInput">Name</label>
                </div>
                <div class="form-floating mb-3">
                  <input type="email" class="form-control rounded-3" name="signupEmail" id="floatingInput" placeholder="name@example.com">
                  <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating mb-3">
                  <input type="password" class="form-control rounded-3" name="signupPassword"  id="floatingPassword" placeholder="Password">
                  <label for="floatingPassword">Password</label>
                </div>
                <div class="form-floating mb-3">
                  <input type="password" class="form-control rounded-3" id="floatingPassword" placeholder="Password" name="signupConfirmPassword">
                  <label for="floatingPassword">Confirm Password</label>
                </div>
                <button class="w-100 mb-2 btn btn-lg rounded-3 bg-darkgreen text-light" name="signup" type="submit">Sign up</button>
                <small class="text-muted">By clicking Sign up, you agree to the terms of use.</small>
                <!-- hr and or -->
                <span class="d-flex justify-content-between align-items-center my-3">
                  <hr style="width: 40%;">
                  <h2 class="fs-5 fw-bold w-25 text-center">Or</h2>
                  <hr style="width: 40%;">
                </span>
                <button class="w-100 py-2 mb-2 btn btn-outline-dark rounded-3" type="submit">
                  <i class="fa-brands fa-google"></i>
                  Sign up with google
                </button>
                <button class="w-100 py-2 mb-2 btn btn-outline-primary rounded-3" type="submit">
                  <i class="fa-brands fa-facebook"></i>
                  Sign up with Facebook
                </button>
                <button class="w-100 py-2 mb-2 btn btn-outline-secondary rounded-3" type="submit">
                  <i class="fa-brands fa-github"></i>
                  Sign up with GitHub
                </button>
              </form>
            </div>
          </div>

          
        </div>
      </div>
    </div>
    
  </header>

  <!--########################## second navbar ##############################-->
    <div class="colorset nav-scroller shadow-sm pb-1 pt-1 position-sticky left-0 z-2 mt-0" style="top: -0.1%;">
      <nav class="nav d-lg-flex justify-content-between align-items-center pe-4 py-1" aria-label="Secondary navigation">

      <!--###################### links #################### -->
        <ul class="navbar-nav ps-lg-3 mb-2 mb-lg-0 d-lg-flex flex-lg-row flex-row flex-wrap" >
          <li class="nav-item dropdown ms-2 me-3 fs-6 fw-bolder">
            <a class="nav-link" href="" role="button">DINNERS</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="search.php?editsearch=5-Ingredient Dinners">5-Ingredient Dinners</a></li>
              <li><a class="dropdown-item" href="search.php?editsearch=One-Pot Meals">One-Pot Meals</a></li>
              <li><a class="dropdown-item" href="search.php?editsearch=Quick & Easy">Quick & Easy</a></li>
              <li><a class="dropdown-item" href="search.php?editsearch=30-Minute Meals">30-Minute Meals</a></li>
              <li><a class="dropdown-item" href="search.php?editsearch=Soups, Stews & Chili">Soups, Stews & Chili</a></li>
              <li><a class="dropdown-item" href="search.php?editsearch=Comfort Food">Comfort Food</a></li>
              <li><a class="dropdown-item" href="search.php?editsearch=Main Dishes">Main Dishes</a></li>
              <li><a class="dropdown-item" href="search.php?editsearch=Sheet Pan Dinners">Sheet Pan Dinners</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown ms-2 me-3 fs-6 fw-bolder">
            <a class="nav-link" href="" role="button">MEALS</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="search.php?editsearch=Breakfast & Brunch">Breakfast & Brunch</a></li>
              <li><a class="dropdown-item" href="search.php?editsearch=Lunch">Lunch</a></li>
              <li><a class="dropdown-item" href="search.php?editsearch=Healthy">Healthy</a></li>
              <li><a class="dropdown-item" href="search.php?editsearch=Appetizers & Snacks">Appetizers & Snacks</a></li>
              <li><a class="dropdown-item" href="search.php?editsearch=Dessert">Dessert</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown ms-2 me-3 fs-6 fw-bolder">
            <a class="nav-link" href="" role="button">INGREDIENTS</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="search.php?editsearch=Chicken">Chicken</a></li>
              <li><a class="dropdown-item" href="search.php?editsearch=Beef">Beef</a></li>
              <li><a class="dropdown-item" href="search.php?editsearch=Seafood">Seafood</a></li>
              <li><a class="dropdown-item" href="search.php?editsearch=Pasta">Pasta</a></li>
              <li><a class="dropdown-item" href="search.php?editsearch=Fruits">Fruits</a></li>
              <li><a class="dropdown-item" href="search.php?editsearch=Vegetables">Vegetables</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown ms-2 me-3 fs-6 fw-bolder">
            <a class="nav-link" href="" role="button">OCCASIONS</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="search.php?editsearch=St. Patrick's Day">St. Patrick's Day</a></li>
              <li><a class="dropdown-item" href="search.php?editsearch=Thanksgiving">Thanksgiving</a></li>
              <li><a class="dropdown-item" href="search.php?editsearch=Ramadan">Ramadan</a></li>
              <li><a class="dropdown-item" href="search.php?editsearch=April Fools' Day">April Fools' Day</a></li>
              <li><a class="dropdown-item" href="search.php?editsearch=Passover">Passover</a></li>
              <li><a class="dropdown-item" href="search.php?editsearch=Easter">Easter</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown ms-2 me-3 fs-6 fw-bolder">
            <a class="nav-link" href="">CUISINES</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="search.php?editsearch=US">US</a></li>
              <li><a class="dropdown-item" href="search.php?editsearch=Italian">Italian </a></li>
              <li><a class="dropdown-item" href="search.php?editsearch=Greek">Greek</a></li>
              <li><a class="dropdown-item" href="search.php?editsearch=Indian">Indian</a></li>
              <li><a class="dropdown-item" href="search.php?editsearch=Filipino">Filipino</a></li>
              <li><a class="dropdown-item" href="search.php?editsearch=Japanese">Japanese</a></li>
            </ul>
          </li> 
        </ul>

        <!-- ######profile######## -->
          <?php
          $User_ID=$_SESSION['uid'];                 
          $ret15=mysqli_query($con, "Select * from users where user_id='$User_ID'");
          $result15=mysqli_fetch_array($ret15);
          ?>
        <!-- #################### image ######################## -->
        <div class="dropdown">
          <?php if(strlen($_SESSION['uid'] != 0)){?>
          <img class="userpicture" role="button" src="<?php echo $result15['profile_pic'];?>" alt="">
          <?php } ?>

          <ul class="dropdown-menu end-0">
            <li><a class="dropdown-item" href="myprofile.php?editid=<?php echo $User_ID;?>">Profile</a></li>
            <li><a class="dropdown-item" href="favrecipe.php?editid=<?php echo $User_ID;?>">Saved recipes</a></li>
            <li><a class="dropdown-item" href="addrecipe.php?editid=<?php echo $User_ID;?>">Add a recipe</a></li>
            <li><a class="dropdown-item" href="myrecipes.php?editid=<?php echo $User_ID;?>">My recipes</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="includes/logout.php">Log out!</a></li>
          </ul>
        </div>
      </nav>
    </div>