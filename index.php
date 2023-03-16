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
        <div class="carousel-inner z-0 h-100">
          <div class="carousel-item active container-fluid px-0 h-100">

                        <!-- two for transparent and opacity purpose -->
            <div class="card position-absolute positioning-headline rounded-0 z-3 bg-transparent rounded-3 border-0">
              <a href="" class="link-hover"><h2 class="px-4 py-3">Lorem ipsum, dolor sit amet consectetur.</h2></a>
            </div>
            <div class="card position-absolute positioning-headline rounded-0 z-2 opacity-75 rounded-3 border-0">
              <a href="" class="link-hover opacity-0"><h2 class="px-4 py-3">Lorem ipsum, dolor sit amet consectetur.</h2></a>
            </div>
                        <!-- two for transparent and opacity purpose -->

            <span class="position-relative d-flex justify-content-center h-100 z-1">
              <img class="w-100 h-100 object-fit-cover" src="images1/pizza.jpg"  alt="...">
            </span>
          </div>
          <div class="carousel-item container-fluid px-0 h-100">

                      <!-- two for transparent and opacity purpose -->
            <div class="card position-absolute positioning-headline rounded-0 z-3 bg-transparent rounded-3 border-0">
              <a href="" class="link-hover"><h2 class="px-4 py-3">Lorem ipsum, dolor sit amet consectetur.</h2></a>
            </div>
            <div class="card position-absolute positioning-headline rounded-0 z-2 opacity-75 rounded-3 border-0">
              <a href="" class="link-hover"><h2 class="px-4 py-3">Lorem ipsum, dolor sit amet consectetur.</h2></a>
            </div>
                      <!-- two for transparent and opacity purpose -->

            <span class="d-flex justify-content-center px-0 h-100">
              <img class="w-100 h-100 object-fit-cover" src="images1/chicken.jpg"  alt="...">
            </span>
          </div>
          <div class="carousel-item container-fluid h-100">

                      <!-- two for transparent and opacity purpose -->
            <div class="card position-absolute positioning-headline rounded-0 z-3 bg-transparent rounded-3 border-0">
              <a href="" class="link-hover"><h2 class="px-4 py-3">Lorem ipsum, dolor sit amet consectetur.</h2></a>
            </div>
            <div class="card position-absolute positioning-headline rounded-0 z-2 opacity-75 rounded-3 border-0">
              <a href="" class="link-hover"><h2 class="px-4 py-3">Lorem ipsum, dolor sit amet consectetur.</h2></a>
            </div>
                      <!-- two for transparent and opacity purpose -->

            <span class="d-flex justify-content-center h-100">
              <img class="w-100 h-100 object-fit-cover" src="images1/chicken-bun.jpg"  alt="...">
            </span>
          </div>
          
        </div>
      </div>
    </section>
    
    <!--######################### Recipes grids ######################### -->
    <section class="gap mt-5">
      <div class="container">
        <h1 class="fw-bolder mt-5 mb-3"><span id="lgdes">Featured</span> Recipes</h1>    
        <div class="recipes-grids w-100">
          <a class="grid-card-group rounded-4 overflow-hidden card-big" href="">
            <!-- <div > -->
            <div class=" h-100">
              <img class="h-100 w-100 scalingtrans object-fit-cover" src="images1/chicken.jpg" alt="">
            </div>
            <div class="overly px-5 position-absolute">
              <h4>Lorem ipsum dolor sit amet consectetur.</h4>
            </div>
          </a>
          
          <a class="grid-card-group rounded-4 overflow-hidden card-small">
            <div class=" h-100">
              <img class="h-100 w-100 scalingtrans object-fit-cover" src="images1/chicken-bun.jpg" alt="">
            </div>
            <div class="overly px-5 position-absolute">
                <h4>Lorem ipsum dolor sit amet consectetur.</h4>
              </div>
          </a>
          <a class="grid-card-group rounded-4 overflow-hidden card-small">
            <div class=" h-100">
              <img class="h-100 w-100 scalingtrans object-fit-cover" src="images1/burrito.jpg" alt="">
            </div>
            <div class="overly px-5 position-absolute">
                <h4>Lorem ipsum dolor sit amet consectetur.</h4>
              </div>
          </a>
          <a class="grid-card-group rounded-4 overflow-hidden card-long">
            <div class=" h-100">
              <img class="h-100 w-100 scalingtrans object-fit-cover" src="images1/fish.jpg" alt="">
            </div>
            <div class="overly px-5 position-absolute">
                <h4>Lorem ipsum dolor sit amet consectetur.</h4>
              </div>
          </a>
          <a class="grid-card-group rounded-4 overflow-hidden card-small">
            <div class=" h-100">
              <img class="h-100 w-100 scalingtrans object-fit-cover" src="images1/less-soup.jpg" alt="">
            </div>
            <div class="overly px-5 position-absolute">
                <h4>Lorem ipsum dolor sit amet consectetur</h4>
              </div>
          </a>
          <a class="grid-card-group rounded-4 overflow-hidden card-long">
            <div class=" h-100 w-100">
              <img class="h-100 w-100 scalingtrans object-fit-cover" src="images1/salad.jpg" alt="">
            </div>
            <div class="overly px-5 position-absolute">
                <h4>Lorem ipsum dolor sit amet consectetur.</h4>
              </div>
          </a>
          <a class="grid-card-group rounded-4 overflow-hidden card-small">
            <div class=" h-100">
              <img class="h-100 w-100 scalingtrans object-fit-cover" src="images1/green-salad.jpg" alt="">
            </div>
            <div class="overly px-5 position-absolute">
                <h4>Lorem ipsum dolor sit amet consectetur.</h4>
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
              <div class="card rounded-4 col-lg-3 col-md-4 col-sm-5 col-6 col-md-4 col-sm-5 col-6 overflow-hidden me-3 position-relative bg-gray" style="width: 18rem;height: 24rem;">

                <!-- bookmark button -->
                <div class="overflow-hidden position-absolute z-3 bg-gray rounded-2 " style="right:4%;top:3%;width: 2rem;height: 2rem;">
                  <button class="d-flex justify-content-center align-items-center border-0 w-100 h-100"><i class="fa-regular fa-bookmark"></i></button>
                </div>
                 <!-- bookmark button -->

                <div class="w-100" style="height: 65%;">
                  <img src="images1/beaf.jpg" class="w-100 h-100 object-fit-cover card-img-top" alt="...">
                </div>
                <div class="card-body">
                  <small class="card-text fw-semibold ">Some quick example text to build .</small>
                  <a href="#" class=""><h5 class="card-title mt-3 mb-2">Card title Some quick example text to build .</h5></a>
                </div>
              </div>
              <div class="card rounded-4 col-lg-3 col-md-4 col-sm-5 col-6 col-md-4 col-sm-5 col-6 overflow-hidden me-3 position-relative bg-gray" style="width: 18rem;height: 24rem;">

                <!-- bookmark button -->
                <div class="overflow-hidden position-absolute z-3 bg-gray rounded-2 " style="right:4%;top:3%;width: 2rem;height: 2rem;">
                  <button class="d-flex justify-content-center align-items-center border-0 w-100 h-100"><i class="fa-regular fa-bookmark"></i></button>
                </div>
                 <!-- bookmark button -->

                <div class="w-100" style="height: 65%;">
                  <img src="images1/burrito.jpg" class="w-100 h-100 object-fit-cover card-img-top" alt="...">
                </div>
                <div class="card-body">
                  <small class="card-text fw-semibold ">Some quick example text to build .</small>
                  <a href="#" class=""><h5 class="card-title mt-3 mb-2">Card title Some quick example text to build .</h5></a>
                </div>
              </div>
              <div class="card rounded-4 col-lg-3 col-md-4 col-sm-5 col-6 col-md-4 col-sm-5 col-6 overflow-hidden me-3 position-relative bg-gray" style="width: 18rem;height: 24rem;">

                <!-- bookmark button -->
                <div class="overflow-hidden position-absolute z-3 bg-gray rounded-2 " style="right:4%;top:3%;width: 2rem;height: 2rem;">
                  <button class="d-flex justify-content-center align-items-center border-0 w-100 h-100"><i class="fa-regular fa-bookmark"></i></button>
                </div>
                 <!-- bookmark button -->

                <div class="w-100" style="height: 65%;">
                  <img src="images1/chicken-bun.jpg" class="w-100 h-100 object-fit-cover card-img-top" alt="...">
                </div>
                <div class="card-body">
                  <small class="card-text fw-semibold ">Some quick example text to build .</small>
                  <a href="#" class=""><h5 class="card-title mt-3 mb-2">Card title Some quick example text to build .</h5></a>
                </div>
              </div>
              <div class="card rounded-4 col-lg-3 col-md-4 col-sm-5 col-6 col-md-4 col-sm-5 col-6 overflow-hidden me-3 position-relative bg-gray" style="width: 18rem;height: 24rem;">

                <!-- bookmark button -->
                <div class="overflow-hidden position-absolute z-3 bg-gray rounded-2 " style="right:4%;top:3%;width: 2rem;height: 2rem;">
                  <button class="d-flex justify-content-center align-items-center border-0 w-100 h-100"><i class="fa-regular fa-bookmark"></i></button>
                </div>
                 <!-- bookmark button -->

                <div class="w-100" style="height: 65%;">
                  <img src="images1/fish.jpg" class="w-100 h-100 object-fit-cover card-img-top" alt="...">
                </div>
                <div class="card-body">
                  <small class="card-text fw-semibold ">Some quick example text to build .</small>
                  <a href="#" class=""><h5 class="card-title mt-3 mb-2">Card title Some quick example text to build .</h5></a>
                </div>
              </div>
              <div class="card rounded-4 col-lg-3 col-md-4 col-sm-5 col-6 col-md-4 col-sm-5 col-6 overflow-hidden me-3 position-relative bg-gray" style="width: 18rem;height: 24rem;">

                <!-- bookmark button -->
                <div class="overflow-hidden position-absolute z-3 bg-gray rounded-2 " style="right:4%;top:3%;width: 2rem;height: 2rem;">
                  <button class="d-flex justify-content-center align-items-center border-0 w-100 h-100"><i class="fa-regular fa-bookmark"></i></button>
                </div>
                 <!-- bookmark button -->

                <div class="w-100" style="height: 65%;">
                  <img src="images1/chicken.jpg" class="w-100 h-100 object-fit-cover card-img-top" alt="...">
                </div>
                <div class="card-body">
                  <small class="card-text fw-semibold ">Some quick example text to build .</small>
                  <a href="#" class=""><h5 class="card-title mt-3 mb-2">Card title Some quick example text to build .</h5></a>
                </div>
              </div>
              <div class="card rounded-4 col-lg-3 col-md-4 col-sm-5 col-6 col-md-4 col-sm-5 col-6 overflow-hidden me-3 position-relative bg-gray" style="width: 18rem;height: 24rem;">

                <!-- bookmark button -->
                <div class="overflow-hidden position-absolute z-3 bg-gray rounded-2 " style="right:4%;top:3%;width: 2rem;height: 2rem;">
                  <button class="d-flex justify-content-center align-items-center border-0 w-100 h-100"><i class="fa-regular fa-bookmark"></i></button>
                </div>
                 <!-- bookmark button -->

                <div class="w-100" style="height: 65%;">
                  <img src="images1/green-salad.jpg" class="w-100 h-100 object-fit-cover card-img-top" alt="...">
                </div>
                <div class="card-body">
                  <small class="card-text fw-semibold ">Some quick example text to build .</small>
                  <a href="#" class=""><h5 class="card-title mt-3 mb-2">Card title Some quick example text to build .</h5></a>
                </div>
              </div>
              <div class="card rounded-4 col-lg-3 col-md-4 col-sm-5 col-6 col-md-4 col-sm-5 col-6 overflow-hidden me-3 position-relative bg-gray" style="width: 18rem;height: 24rem;">

                <!-- bookmark button -->
                <div class="overflow-hidden position-absolute z-3 bg-gray rounded-2 " style="right:4%;top:3%;width: 2rem;height: 2rem;">
                  <button class="d-flex justify-content-center align-items-center border-0 w-100 h-100"><i class="fa-regular fa-bookmark"></i></button>
                </div>
                 <!-- bookmark button -->

                <div class="w-100" style="height: 65%;">
                  <img src="images1/less-soup.jpg" class="w-100 h-100 object-fit-cover card-img-top" alt="...">
                </div>
                <div class="card-body">
                  <small class="card-text fw-semibold ">Some quick example text to build .</small>
                  <a href="#" class=""><h5 class="card-title mt-3 mb-2">Card title Some quick example text to build .</h5></a>
                </div>
              </div>
              <div class="card rounded-4 col-lg-3 col-md-4 col-sm-5 col-6 overflow-hidden me-3" style="width: 14rem;height: 24rem;">
                <div class="justify-content-center d-flex align-items-center h-100">
                  <a class="fs-4" href="">View all <i class="fa-solid fa-arrow-right"></i></a>
                </div>
              </div>
            </div>
        </div>

      </div>
    </section>

        <!--######################### small banners ######################### -->
    <section class="gap position-relative w-100" style="height: 24rem;">
      <!-- <div class=""> -->
        <div class="h-100">
          <img class="w-100 h-100 object-fit-cover" src="images1/steak.jpg" alt="" srcset="">
        </div>
        <div class="position-absolute top-50 translate-middle bg-light px-4 py-3 text-end" style="right:-6%;width: 30rem;">
          <small>lorem ipsum</small>
          <a href="">
            <h3>lorem ipsum dolor</h3>
          </a>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, vero!</p>
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
            <div class="card rounded-4 col-lg-3 col-md-4 col-sm-5 col-6 col-md-4 col-sm-5 col-6 overflow-hidden me-3 position-relative bg-gray" style="width: 18rem;height: 24rem;">

              <!-- bookmark button -->
              <div class="overflow-hidden position-absolute z-3 bg-gray rounded-2 " style="right:4%;top:3%;width: 2rem;height: 2rem;">
                <button class="d-flex justify-content-center align-items-center border-0 w-100 h-100"><i class="fa-regular fa-bookmark"></i></button>
              </div>
               <!-- bookmark button -->

              <div class="w-100" style="height: 65%;">
                <img src="images1/steak.jpg" class="w-100 h-100 object-fit-cover card-img-top" alt="...">
              </div>
              <div class="card-body">
                <small class="card-text fw-semibold ">Some quick example text to build .</small>
                <a href="#" class=""><h5 class="card-title mt-3 mb-2">Card title Some quick example text to build .</h5></a>
              </div>
            </div>
              <div class="card rounded-4 col-lg-3 col-md-4 col-sm-5 col-6 col-md-4 col-sm-5 col-6 overflow-hidden me-3 position-relative bg-gray" style="width: 18rem;height: 24rem;">

                <!-- bookmark button -->
                <div class="overflow-hidden position-absolute z-3 bg-gray rounded-2 " style="right:4%;top:3%;width: 2rem;height: 2rem;">
                  <button class="d-flex justify-content-center align-items-center border-0 w-100 h-100"><i class="fa-regular fa-bookmark"></i></button>
                </div>
                 <!-- bookmark button -->

                <div class="w-100" style="height: 65%;">
                  <img src="images1/less-soup.jpg" class="w-100 h-100 object-fit-cover card-img-top" alt="...">
                </div>
                <div class="card-body">
                  <small class="card-text fw-semibold ">Some quick example text to build .</small>
                  <a href="#" class=""><h5 class="card-title mt-3 mb-2">Card title Some quick example text to build .</h5></a>
                </div>
              </div>
              <div class="card rounded-4 col-lg-3 col-md-4 col-sm-5 col-6 col-md-4 col-sm-5 col-6 overflow-hidden me-3 position-relative bg-gray" style="width: 18rem;height: 24rem;">

                <!-- bookmark button -->
                <div class="overflow-hidden position-absolute z-3 bg-gray rounded-2 " style="right:4%;top:3%;width: 2rem;height: 2rem;">
                  <button class="d-flex justify-content-center align-items-center border-0 w-100 h-100"><i class="fa-regular fa-bookmark"></i></button>
                </div>
                 <!-- bookmark button -->

                <div class="w-100" style="height: 65%;">
                  <img src="images1/burrito.jpg" class="w-100 h-100 object-fit-cover card-img-top" alt="...">
                </div>
                <div class="card-body">
                  <small class="card-text fw-semibold ">Some quick example text to build .</small>
                  <a href="#" class=""><h5 class="card-title mt-3 mb-2">Card title Some quick example text to build .</h5></a>
                </div>
              </div>
              <div class="card rounded-4 col-lg-3 col-md-4 col-sm-5 col-6 col-md-4 col-sm-5 col-6 overflow-hidden me-3 position-relative bg-gray" style="width: 18rem;height: 24rem;">

                <!-- bookmark button -->
                <div class="overflow-hidden position-absolute z-3 bg-gray rounded-2 " style="right:4%;top:3%;width: 2rem;height: 2rem;">
                  <button class="d-flex justify-content-center align-items-center border-0 w-100 h-100"><i class="fa-regular fa-bookmark"></i></button>
                </div>
                 <!-- bookmark button -->

                <div class="w-100" style="height: 65%;">
                  <img src="images1/chicken-bun.jpg" class="w-100 h-100 object-fit-cover card-img-top" alt="...">
                </div>
                <div class="card-body">
                  <small class="card-text fw-semibold ">Some quick example text to build .</small>
                  <a href="#" class=""><h5 class="card-title mt-3 mb-2">Card title Some quick example text to build .</h5></a>
                </div>
              </div>
              <div class="card rounded-4 col-lg-3 col-md-4 col-sm-5 col-6 col-md-4 col-sm-5 col-6 overflow-hidden me-3 position-relative bg-gray" style="width: 18rem;height: 24rem;">

                <!-- bookmark button -->
                <div class="overflow-hidden position-absolute z-3 bg-gray rounded-2 " style="right:4%;top:3%;width: 2rem;height: 2rem;">
                  <button class="d-flex justify-content-center align-items-center border-0 w-100 h-100"><i class="fa-regular fa-bookmark"></i></button>
                </div>
                 <!-- bookmark button -->

                <div class="w-100" style="height: 65%;">
                  <img src="images1/chicken.jpg" class="w-100 h-100 object-fit-cover card-img-top" alt="...">
                </div>
                <div class="card-body">
                  <small class="card-text fw-semibold ">Some quick example text to build .</small>
                  <a href="#" class=""><h5 class="card-title mt-3 mb-2">Card title Some quick example text to build .</h5></a>
                </div>
              </div>
              <div class="card rounded-4 col-lg-3 col-md-4 col-sm-5 col-6 col-md-4 col-sm-5 col-6 overflow-hidden me-3 position-relative bg-gray" style="width: 18rem;height: 24rem;">

                <!-- bookmark button -->
                <div class="overflow-hidden position-absolute z-3 bg-gray rounded-2 " style="right:4%;top:3%;width: 2rem;height: 2rem;">
                  <button class="d-flex justify-content-center align-items-center border-0 w-100 h-100"><i class="fa-regular fa-bookmark"></i></button>
                </div>
                 <!-- bookmark button -->

                <div class="w-100" style="height: 65%;">
                  <img src="images1/fish.jpg" class="w-100 h-100 object-fit-cover card-img-top" alt="...">
                </div>
                <div class="card-body">
                  <small class="card-text fw-semibold ">Some quick example text to build .</small>
                  <a href="#" class=""><h5 class="card-title mt-3 mb-2">Card title Some quick example text to build .</h5></a>
                </div>
              </div>
              <div class="card rounded-4 col-lg-3 col-md-4 col-sm-5 col-6 col-md-4 col-sm-5 col-6 overflow-hidden me-3 position-relative bg-gray" style="width: 18rem;height: 24rem;">

                <!-- bookmark button -->
                <div class="overflow-hidden position-absolute z-3 bg-gray rounded-2 " style="right:4%;top:3%;width: 2rem;height: 2rem;">
                  <button class="d-flex justify-content-center align-items-center border-0 w-100 h-100"><i class="fa-regular fa-bookmark"></i></button>
                </div>
                 <!-- bookmark button -->

                <div class="w-100" style="height: 65%;">
                  <img src="images1/beaf.jpg" class="w-100 h-100 object-fit-cover card-img-top" alt="...">
                </div>
                <div class="card-body">
                  <small class="card-text fw-semibold ">Some quick example text to build .</small>
                  <a href="#" class=""><h5 class="card-title mt-3 mb-2">Card title Some quick example text to build .</h5></a>
                </div>
              </div>
              <div class="card rounded-4 col-lg-3 col-md-4 col-sm-5 col-6 col-md-4 col-sm-5 col-6 overflow-hidden me-3 position-relative bg-gray" style="width: 18rem;height: 24rem;">

                <!-- bookmark button -->
                <div class="overflow-hidden position-absolute z-3 bg-gray rounded-2 " style="right:4%;top:3%;width: 2rem;height: 2rem;">
                  <button class="d-flex justify-content-center align-items-center border-0 w-100 h-100"><i class="fa-regular fa-bookmark"></i></button>
                </div>
                 <!-- bookmark button -->

                <div class="w-100" style="height: 65%;">
                  <img src="images1/green-salad.jpg" class="w-100 h-100 object-fit-cover card-img-top" alt="...">
                </div>
                <div class="card-body">
                  <small class="card-text fw-semibold ">Some quick example text to build .</small>
                  <a href="#" class=""><h5 class="card-title mt-3 mb-2">Card title Some quick example text to build .</h5></a>
                </div>
              </div>
              <div class="card rounded-4 col-lg-3 col-md-4 col-sm-5 col-6 overflow-hidden me-3" style="width: 14rem;height: 24rem;">
                <div class="justify-content-center d-flex align-items-center h-100">
                  <a class="fs-4" href="">View all <i class="fa-solid fa-arrow-right"></i></a>
                </div>
              </div>
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
                    <img class="w-100 h-100 object-fit-cover" src="images1/salad.jpg" alt="">
                  </div>
                  <div class="p-3">
                    <p>lorem ipsum dolor</p>
                    <a href="">
                      <h3>lorem ipsum dolor.</h3>
                    </a>              
                  </div>
                </div>
                <div class="col-lg-6 card rounded-4 overflow-hidden px-0 bg-gray" style="width: 48%;">
                  <div class="w-100" style="height: 25rem;">
                    <img class="w-100 h-100 object-fit-cover" src="images1/steak.jpg" alt="">
                  </div>
                  <div class="p-3">
                    <p>lorem ipsum dolor</p>
                    <a href="">
                      <h3>lorem ipsum dolor.</h3>
                    </a>
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