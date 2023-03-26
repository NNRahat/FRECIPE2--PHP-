<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

if(isset($_POST['submit'])){
  $userid=$_GET['editid']; 

  // $video=$_POST['video'];
    $vid_fileName=$_FILES["video"]["name"];
    $vid_fileTmpName =$_FILES["video"]['tmp_name'];
    $vid_fileDestination= 'video/'.$vid_fileName;
  move_uploaded_file($vid_fileTmpName, $vid_fileDestination);
  


  $query_for_latest=mysqli_query($con,"Select recipe_id From recipes Order By recipe_id Desc LIMIT 1");
    $result= mysqli_fetch_array($query_for_latest);
    $r_id = $result['recipe_id'];


  $query=mysqli_query($con,"UPDATE recipes SET original_video_url='$vid_fileDestination',OCCASIONS='$Occasion',Dinner='$dinner',Meals='$Meals',Cuisines='$Cuisines' WHERE recipe_id=17");
  
  
  // $_SESSION['userid'] = $userid;
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
                    <h1>Other Informatin</h1>
                </div>
                <div class="d-flex justify-content-between align-items-center p-2 mb-4">
                    <h1>Basics</h1>
                </div>
                <form action="" enctype="multipart/form-data" method="post" >  


                    <!-- video -->
                    <div class="container my-5">
                    <label class="fs-4 mb-2 fw-semibold">Video</label>
                    <div class="input-group mb-3">
                        <input type="file" name="video" class="form-control">               
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