<?php
// session_start();
// error_reporting(0);
// include('../includes/dbconnection.php');

// if(isset($_POST['hello'])){
//     $ingredients = $_POST['ingredient'];
// }


?>


<!doctype html>
<html lang="en">

<head>
<?php include_once('includes/for-head.php');?>

    <title>Frecipe.</title>

</head>

<body class="colorset">
<?php //include_once('includes/header.php');?>

  <main class="colorset">
    <section class="d-lg-flex justify-content-center align-items-center mt-3">
        <div class="container w-75 bg-gray">
          
          <div id="Public-Profile-Setting" class="p-5">
            <div class="container pb-4">
              <h1>Add a new recipe</h1>
              <p>You can add the recipe and share with your friends, family and with the Frecipe community.</p>
            </div>
            <div class="d-flex justify-content-between align-items-center p-2 mb-4">
              <h2>Basics</h2>
              <!-- <button class="btn bg-darkgreen py-3 px-4 text-light">Save</button> -->
            </div>
            <!-- title and image -->
            <div class="container mb-5 fs-5 fw-semibold">
              <div class="row ">
                <div class="col-6 d-flex flex-column text-start">
                  <span class="d-flex flex-column mb-3">
                    <label for="">Recipe Title:</label>
                    <input type="text" class="rounded-3 px-2 form-control" style="height: 50px;">
                  </span>
                  <span class="d-flex flex-column">
                    <label for="">Description in short :</label>
                    <textarea name="" id="" cols="30" class="rounded-3 px-2 py-2 form-control" style="resize: none;height: 144px;"></textarea>
                  </span>
                </div>
                <div class="col-6 d-flex align-items-center justify-content-center pt-3">
                  <div class="bg-success w-75 rounded-3 d-flex justify-content-center bg-body align-items-center h-100">
                    <div class="w-100 h-100 d-flex justify-content-center align-items-center position-relative">
                      <input type="file" name="file" id="upload" class="">
                      <img class="w-100 h-100 d-block" src="images1/chicken.jpg" alt="" srcset="">
                      <label id="custom_btn" onclick="defaultBtnActive()" class="w-100 text-center bg-darkgreen text-light position-absolute start-0 bottom-0">Upload</label>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Ingredients -->
            
            <div class="container steps">
              <label class="fs-5 mb-2" for="ingredient">Enter Your ingredients</label>
              <input class="w-75 form-control py-3 text-muted" type="text" placeholder= "Enter the steps one by one!" name="ingredient[]" id="" >
            </div>
            <div class="container">
              <button class="add my-3 py-3 btn text-light bg-darkgreen">Add another ingredient!</button>
              <!-- <form action="" method="post">
              <a type="button" name="hello" class="my-3 py-3 btn text-light bg-darkgreen">submit</a>
            </form> -->
            </div>

            <!-- <p class="bg-success"><?php //echo $ingredients;?></p> -->
          </div>
        </div>
    </section>
  </main>

  <!--############################### footer ######################### -->
  <?php include_once('includes/footer.php');?>

</body>

</html>