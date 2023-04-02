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

    <!--######################### my recipes  ########################### not done!!--> 
    <section class="gap my-5 non-veges">
    <?php   
            $aid=$_GET['editsearch'];
            $query_searh =mysqli_query($con, "SELECT * FROM recipes WHERE recp_description LIKE '%$aid%' OR recp_name LIKE '%$aid%' OR Cuisines LIKE '%$aid%' OR OCCASIONS LIKE '%$aid%' OR Meals LIKE '%$aid%' OR Dinner LIKE '%$aid%' OR Ingredients LIKE '%$aid%'");
            ?>
      <div class="container pt-3">
        <div class="d-flex justify-content-between align-items-center p-2 mb-4  ">
            <h1 class="mb-5"><?php echo "Search for $aid"?></h1>
        </div>
        <div class="non-veges-wrappper d-flex align-items-center ps-3 flex-wrap">
            
            <?php 
            $num=mysqli_num_rows($query_searh); 
            if($num == 0){?>  
              <h1>Sorry! No result regarding this search </h1>
            <?php }else{
              while($ret=mysqli_fetch_array($query_searh)){
                
            ?> 
            <div class="card rounded-4 col-lg-3 col-md-4 col-sm-5 col-6 col-md-4 col-sm-5 col-6 me-4 mb-4 bg-gray overflow-hidden" style="width: 18rem;height: 24rem;">
                <div class="w-100" style="height: 65%;">
                    <img src="<?php echo $ret['thumbnail_url'];?>" class="w-100 h-100 object-fit-cover card-img-top" alt="...">
                </div>
                <div class="card-body">
                    <a href="recipe-intro.php?editid=<?php echo $ret['recipe_id'];?>>" class=""><h5 class="card-title mt-3 mb-2"><?php echo $ret['recp_name'];?></h5></a>
                </div>
            </div>
            <?php             
        }}
        ?> 

    </div>

      </div>
    </section>


  </main>

  <!--############################ footer ##############################-->
    <?php include_once('includes/footer.php');?>


</body>

</html>