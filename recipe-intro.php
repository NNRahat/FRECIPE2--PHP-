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
    $ret0=mysqli_query($con, "Select * From recipes where recipe_id='$aid'");      
    $result0=mysqli_fetch_array($ret0);?>
    
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
      <div class="overflow-hidden position-absolute rounded-circle bg-light border-0 z-1" style="left: 7%;bottom: 4%;width: 4rem;height: 4rem;">
        <button class=" border-0 fs-3 w-100 h-100 bg-darkgreen text-light"><i class="fa-regular fa-bookmark"></i></button>
      </div>
      <!-- bookmark button -->

<!-- recp_description	
thumbnail_url	
original_video_url	
prep_time_minutes	
total_time_minutes	
cook_time_minutes

Country	
num_servings	
keywords	
inspired_by_url	
yields -->

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
          <div class="d-flex justify-content-center mb-4">
            <button class="btn text-light bg-darkgreen px-4 py-3 fw-semibold fs-5 rounded-3" id="text-white">Nutrition info</button>
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
            <div class="d-flex align-items-center justify-content-start">
              <span class="overflow-hidden rounded-circle me-3" style="width:80px;height: 80px;">
                <img class="h-100 w-100 object-fit-cover" src="images/favicon.png" alt="">
              </span>
              <span class="d-flex flex-column mt-3">
                <a class="text-dark" href=""><h4>lorem ipsum</h4></a>
                <p>lorem, ipsum</p>
              </span>
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
              <div class="d-lg-flex mb-3">
                <span class="align-items-start">
                  <label class="rounded-circle border border-new-color me-3 d-flex justify-content-center align-items-center" style="width: 2rem;height: 2rem;">1</label>
                </span>
                <span>
                  <label class="d-lg-flex align-items-center">
                    <p class="m-0 " style="font-size:18px;">2 table spoon extra virgin olive oil</p>
                  </label>
                </span>
              </div>
              <div class="d-lg-flex mb-3">
                <span class="align-items-start">
                  <label class="rounded-circle border border-new-color me-3 d-flex justify-content-center align-items-center" style="width: 2rem;height: 2rem;">2</label>
                </span>
                <span>
                  <label class="d-lg-flex align-items-center">
                    <p class="m-0 " style="font-size:18px;">2 table spoon extra virgin olive oil</p>
                  </label>
                </span>
              </div>

              
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
              <div class="d-lg-flex mb-3">
                <span class="d-lg-flex align-items-center flex-column me-3">
                  <span class="mb-2">
                    <label class="rounded-circle border border-new-color d-flex justify-content-center align-items-center" style="width: 2rem;height: 2rem;">1</label>
                  </span>
                  <span class="h-100 w-0 border border-start border-new-color"></span>
                </span>
                <span>
                  <label class="d-lg-flex align-items-center">
                    <p class="m-0 " style="font-size:18px;">2 table spoon extra virgin olive oil2 table spoon extra virgin olive oil2 table spoon extra virgin olive oil Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus eveniet, corporis laboriosam quibusdam ullam obcaecati odio placeat voluptatum rerum perspiciatis! Eum porro, iure sed laudantium quibusdam incidunt laboriosam blanditiis natus!</p>
                  </label>
                </span>
              </div>
              <div class="d-lg-flex mb-3">
                <span class="d-lg-flex align-items-center flex-column me-3">
                  <span class="mb-2">
                    <label class="rounded-circle border border-new-color d-flex justify-content-center align-items-center" style="width: 2rem;height: 2rem;">2</label>
                  </span>
                  <span class="h-100 w-0 border border-start border-new-color"></span>
                </span>
                <span>
                  <label class="d-lg-flex align-items-center">
                    <p class="m-0 " style="font-size:18px;">2 table spoon extra virgin olive oil2 table spoon extra virgin olive oil2 table spoon extra virgin olive oil Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus eveniet, corporis laboriosam quibusdam ullam obcaecati odio placeat voluptatum rerum perspiciatis! Eum porro, iure sed laudantium quibusdam incidunt laboriosam blanditiis natus! Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam dolore officia repellat! Laboriosam, molestias consectetur. Exercitationem eaque quasi veniam, eos voluptates accusamus atque neque architecto maxime blanditiis magnam inventore mollitia.</p>
                  </label>
                </span>
              </div>
              <div class="d-lg-flex mb-3">
                <span class="d-lg-flex align-items-center flex-column me-3">
                  <span class="mb-2">
                    <label class="rounded-circle border border-new-color d-flex justify-content-center align-items-center" style="width: 2rem;height: 2rem;">3</label>
                  </span>
                  <!-- <span class="h-100 w-0 border border-start border-new-color"></span> -->
                </span>
                <span>
                  <label class="d-lg-flex align-items-center">
                    <p class="m-0 fw-normal" style="font-size:18px;">2 table spoon extra virgin olive oil2 table spoon extra virgin olive oil2 table spoon extra virgin olive oil Lorem ipsum dolor </p>
                  </label>
                </span>
              </div>
              
            </div>
          </div>
        </div>

        <!-- video part  -->
        <div class="w-50 ">       
          <div class="position-sticky p-3 m-0 rounded-3" style="right:0;top: 30%;">
            <video autoplay controls controlsList="nodownload" class="rounded-4 w-100 object-fit-cover" src="<?php echo $result0['original_video_url'];?>"></video>
            <!-- <iframe height="315" class="rounded-4 w-100 object-fit-cover" src="https://www.youtube.com/embed/8Er5fjgOhhc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> -->
          </div>
        </div>
      </div>

      
    </section>



  </main>

    <!--############################ footer ##############################-->
    <?php include_once('includes/footer.php');?>



</body>

</html>