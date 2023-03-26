<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
    $userid=$_GET['editid'];    
    // $ret0=mysqli_query($con, "Select * From recipes where recipe_id='$aid'");      
    $ret0=mysqli_query($con, "Select * From favrecipe INNER JOIN recipes ON recipes.recipe_id=favrecipe.recipe_id where favrecipe.user_id='$userid'");      

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

    <!--######################### my recipes  ########################### not done!!--> 
    <section class="gap my-5 non-veges">
      <div class="container pt-3">
        <div class="d-flex justify-content-between align-items-center p-2 mb-4  ">
            <h1 class="mb-5">Saved Recipes</h1>
        </div>
        <div class="non-veges-wrappper d-flex align-items-center ps-3 flex-wrap">
            <?php             
            while($ret=mysqli_fetch_array($ret0)){
                
            ?> 
            <div class="card rounded-4 col-lg-3 col-md-4 col-sm-5 col-6 col-md-4 col-sm-5 col-6 me-3 bg-gray overflow-hidden" style="width: 18rem;height: 24rem;">

                <!-- bookmark button -->
                
                <div class="overflow-hidden position-absolute z-3 bg-gray rounded-2 d-flex justify-content-center align-items-center " style="right:4%;top:3%;width: 2rem;height: 2rem;">
                    <form action="" method="post">
                        <?php  
                            $recipe_id2= $ret['recipe_id'];
                            $query2=mysqli_query($con,"select fav_id from favrecipe where user_id='$User_ID' && recipe_id='$recipe_id2'");
                            $res2 = mysqli_fetch_array($query2); 
                            $fav_id =  $res2['fav_id'];
                            $User_ID=$_SESSION['uid'];
                            if(strlen($res2['fav_id'] == 0)){
                        ?> 
                        <input class="d-none" type="text" name="forvalue" id="" value="<?php echo $recipe_id2?>">
                        <button name="Fav" class="d-flex justify-content-center align-items-center border-0 w-100 h-100 "><i class="fa-regular fa-bookmark"></i></button>
                        <?php             
                            }else{
                        ?>
                            <input class="d-none" type="text" name="fordelete" id="" value="<?php echo $recipe_id2?>">
                            <button name="Fav_delete" class="d-flex justify-content-center align-items-center border-0 w-100 h-100"><i class="fa-solid fa-bookmark"></i></button>
                        <?php }
                        ?>
                    </form>
                </div>

                    <!-- bookmark button -->

                <div class="w-100" style="height: 65%;">
                    <img src="<?php echo $ret['thumbnail_url'];?>" class="w-100 h-100 object-fit-cover card-img-top" alt="...">
                </div>
                <div class="card-body">
                    <a href="recipe-intro.php?editid=<?php echo $ret['recipe_id'];?>>" class=""><h5 class="card-title mt-3 mb-2"><?php echo $ret['recp_name'];?></h5></a>
                </div>
            </div>
            <?php             
        }
        ?> 

    </div>

      </div>
    </section>


  </main>

  <!--############################ footer ##############################-->
    <?php include_once('includes/footer.php');?>


</body>

</html>