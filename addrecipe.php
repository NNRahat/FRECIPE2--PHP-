<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

if(isset($_POST['submit'])){
  $userid=$_GET['editid']; 

  $title=$_POST['title'];
  $Description=$_POST['Description'];

  // $img=$_POST['file'];
    $img_fileName=$_FILES["file"]["name"];
    $img_fileTmpName =$_FILES["file"]['tmp_name'];
    $img_fileDestination= 'images1/'.$img_fileName;
  move_uploaded_file($img_fileTmpName, $img_fileDestination);


  $ingredient=$_POST['ingredient'];
  $string_ingred = join('=>',$ingredient);

  $direction=$_POST['direction'];
  $string_direction = join('=>',$direction);

  $Additional=$_POST['Additional'];
  $Total=$_POST['Total'];
  $Cook=$_POST['Cook'];
  $Servings=$_POST['Servings'];
  $Yield=$_POST['Yield'];
  // $Cuisines=$_POST['Cuisines'];
  // $Occasion=$_POST['Occasion'];
  // $dinner=$_POST['dinner'];
  // $Meals=$_POST['Meals'];
  // ,OCCASIONS,Dinner,Meals,Cuisines,'$Occasion','$dinner','$Meals','$Cuisines'
  $query=mysqli_query($con,"INSERT INTO recipes (user_id, recp_name, recp_description, thumbnail_url,Ingredients, Steps,prep_time_minutes,total_time_minutes,cook_time_minutes,num_servings,yields) VALUES ('$userid','$title','$Description','$img_fileDestination','$string_ingred','$string_direction','$Additional','$Total','$Cook','$Servings','$Yield'");

  // $_SESSION['userid'] = $userid;
  header('location:addrecipe2.php');
  if($query){
    echo "<script>alert('Record Added Successfully');</script>";
      echo "<script>window.location.href='index.php'</script>";

}
else{
  echo "<script>alert('Sry! something went wrong');</script>";
      echo "<script>window.location.href='index.php'</script>"; 
}
  
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
    <section class="d-lg-flex justify-content-center align-items-center mt-3">
        <div class="container w-75 bg-gray">
          <div id="Public-Profile-Setting" class="p-5">
            <div class="container pb-4">
              <h1>Add a new recipe</h1>
              <p>You can add the recipe and share with your friends, family and with the Frecipe community.</p>
            </div>
            <div class="d-flex justify-content-between align-items-center p-2 mb-4">
              <h1>Basics</h1>
            </div>
            <form action="" enctype="multipart/form-data" method="post" >
              <!-- title and image -->
              <div class="container mb-5 fs-4 fw-semibold my-5">
                <div class="row ">
                  <div class="col-6 d-flex flex-column text-start">
                    <span class="d-flex flex-column mb-3">
                      <label for="">Recipe Title:</label>
                      <input type="text" name="title" class="rounded-3 px-2 form-control" style="height: 50px;">
                    </span>
                    <span class="d-flex flex-column">
                      <label for="">Description in short :</label>
                      <textarea name="Description" id="" cols="30" class="rounded-3 px-2 py-2 form-control" style="resize: none;height: 144px;"></textarea>
                    </span>
                  </div>
                  <div class="col-6 d-flex align-items-center justify-content-center pt-3" style="height:285px">
                    <div class="bg-success w-75 rounded-3 d-flex justify-content-center bg-body align-items-center h-100">
                      <div class="w-100 h-100 d-flex justify-content-center align-items-center position-relative" >
                        <input type="file" class="d-none" name="file" id="upload" class="">
                        <img class="w-100 h-100 d-block object-fit-cover" id="bruh" src="images1/chicken.jpg" alt="" srcset="">
                        <label id="custom_btn" onclick="defaultBtnActive()" class="w-100 text-center bg-darkgreen text-light position-absolute start-0 bottom-0">Upload</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- ingred and direction -->
              <div class="container w-100 d-flex justify-content-start align-items-start my-5">
                <!-- Ingredients -->
                <div class="w-50">
                  <div class="ingred">
                    <label class="fs-4 mb-2 fw-semibold" for="ingredient">Enter Your ingredients</label>
                    <input class="w-75 form-control py-3 text-muted mb-2" type="text" placeholder= "Enter the steps one by one!" name="ingredient[]" id="" >
                    <input class="w-75 form-control py-3 text-muted mb-2" type="text" placeholder= "Enter the steps one by one!" name="ingredient[]" id="" >
                    <input class="w-75 form-control py-3 text-muted mb-2" type="text" placeholder= "Enter the steps one by one!" name="ingredient[]" id="" >
                  </div>
                  <div class="">
                    <button type="button" class="addingred my-3 py-3 btn text-light bg-darkgreen">Add another ingredient!</button>
                  </div>
                </div>
    
                <!-- directions -->
                <div class="w-50 d-flex flex-column align-items-end">
                  <div class="steps d-flex flex-column align-items-end w-100">
                    <label class="fs-4 mb-2 fw-semibold" for="ingredient">Enter Steps/Direction</label>
                    <input class="w-75 form-control py-3 text-muted mb-2" type="text" placeholder= "Enter the steps one by one!" name="direction[]" id="" >
                    <input class="w-75 form-control py-3 text-muted mb-2" type="text" placeholder= "Enter the steps one by one!" name="direction[]" id="" >
                    <input class="w-75 form-control py-3 text-muted mb-2" type="text" placeholder= "Enter the steps one by one!" name="direction[]" id="" >
                  </div>
                  <div class="">
                    <button type="button" class="addstep my-3 py-3 btn text-light bg-darkgreen">Add another step!</button>
                  </div>
                </div>
              </div>
              
              <!-- time and quatity -->
              <div class="container my-5">
                <label class="fs-4 mb-2 fw-semibold">Time and Quantity</label>
                <div class="w-100 d-flex flex-wrap fs-5 fw-regular">
                    <div class="w-50 px-2 ">
                      <label>Cook</label>
                      <input type="text" name="Cook" class="w-100 form-control py-3 text-muted mb-2">
                    </div>
                    <div class="w-50 px-2">
                      <label>Additional</label>
                      <input type="text" name="Additional" class="w-100 form-control py-3 text-muted mb-2">
                    </div>
                    <div class="w-50 px-2">
                      <label>Total</label>
                      <input type="text" name="Total" class="w-100 form-control py-3 text-muted mb-2">
                    </div>
                    <div class="w-50 px-2">
                      <label>Servings</label>
                      <input type="text" name="Servings" class="w-100 form-control py-3 text-muted mb-2">
                    </div>
                    <div class="w-50 px-2">
                      <label>Yield</label>
                      <input type="text" name="Yield" class="w-100 form-control py-3 text-muted mb-2">
                    </div>
                
                </div>

              

              </div>
                
              <!-- submit -->
              <div class="container">
                <button name="submit" class="fs-4 fw-semibold btn bg-darkgreen text-light w-100 py-3 " >Submit</button>
              </div>

            </form>
          </div>
        </div>
    </section>
  </main>

  <!--############################### footer ######################### -->
  <?php include_once('includes/footer.php');?>

</body>

</html>