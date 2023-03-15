<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400;600;700&display=swap" rel="stylesheet">    
    <script src="https://kit.fontawesome.com/5a028787bc.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"> 
    <link rel="stylesheet" href="style/style.css">
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    
    <!-- bootstrap -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

    <title>Frecipe.</title>

</head>

<body class="colorset">
  <header>
    <!-- place navbar here -->
    <nav class="colorset navbar navbar-expand-lg pb-0 bg-body-primary d-flex justify-content-center align-items-center px-2">
      <div class="container-fluid my-3 d-lg-flex justify-content-between align-items-center">
        <div class="row w-100">
          <!-- logos -->
          <div class="logo col-10 col-lg-1 ">
            <a href="index.html"><h2 id="logoid" class="fs-1 fw-bold">Frec<Span id="lgdes">i</Span>pe<Span id="lgdes">.</Span></h2></a>
          </div>

          <!-- burger icon -->
          <button class="navbar-toggler col-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <!-- links -->
          <div class="collapse navbar-collapse d-lg-flex justify-content-between col-lg-11 align-items-center" id="navbarScroll">
              <ul class="navbar-nav my-2 navbar-nav-scroll w-100 ps-lg-5 fs-5 d-flex flex-column justify-content-start flex-lg-row justify-content-lg-start" style="--bs-scroll-height: 200px;">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="index.html"><b>Home</b></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#"><b>Recipes</b></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#"><b>Trending</b></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link ms-lg-2 px-4 text-light rounded-3 bg-darkgreen" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap"  id="text-white" aria-current="page" href=""><b>Login</b></a>
                </li>
              </ul>
              <form class="input-group mw-100 mt-5 my-lg-0" role="search">
                <input type="text" class="form-control rounded-start-pill border-0 bg-gray py-3 px-4 " placeholder="search" aria-label="" aria-describedby="button-addon2">
                <button class="btn btn-outline-secondary rounded-end-pill py-2 px-4 border-0 bg-gray" type="button" id="button-addon2"><i class="fa-solid fa-magnifying-glass"></i></button>
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
                  <a class="nav-link active fw-bolder" data-bs-toggle="tab" aria-current="page" href="#log-in">LOGIN</a>
                </li>
                <li class="nav-item w-50">
                  <a class="nav-link fw-bolder" data-bs-toggle="tab" href="#sign-up">SIGNUP</a>
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
              <form class="">
                <!-- email -->
                <div class="form-floating mb-3">
                  <input type="email" class="form-control rounded-3" id="floatingInput" placeholder="name@example.com">
                  <label for="floatingInput">Email address</label>
                </div>
                <!-- password -->
                <div class="form-floating mb-3">
                  <input type="password" class="form-control rounded-3" id="floatingPassword" placeholder="Password">
                  <label for="floatingPassword">Password</label>
                </div>
                <button class="w-100 mb-2 btn btn-lg rounded-3 bg-darkgreen text-light" type="submit">Log in</button>
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
              <div class="modal-header px-0 py-2 w-100 border-0">
                <h1 class="fw-bold mb-0 fs-2">Sign up </h1>
              </div>
              <form class="">
                <div class="form-floating mb-3">
                  <input type="email" class="form-control rounded-3" id="floatingInput" placeholder="name@example.com">
                  <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating mb-3">
                  <input type="password" class="form-control rounded-3" id="floatingPassword" placeholder="Password">
                  <label for="floatingPassword">Password</label>
                </div>
                <div class="form-floating mb-3">
                  <input type="password" class="form-control rounded-3" id="floatingPassword" placeholder="Password">
                  <label for="floatingPassword">Confirm Password</label>
                </div>
                <button class="w-100 mb-2 btn btn-lg rounded-3 bg-darkgreen text-light" type="submit">Sign up</button>
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

  <!-- second navbar -->
  <div class="colorset nav-scroller shadow-sm pb-1 pt-1 position-sticky left-0 z-3 mt-0" style="top: -0.9%;">
    <nav class="nav" aria-label="Secondary navigation">
      <ul class="navbar-nav ps-lg-3 mb-2 mb-lg-0 d-lg-flex flex-lg-row flex-row flex-wrap" >
        <li class="nav-item dropdown mx-2 fs-6 fw-bolder">
          <a class="nav-link" href="" role="button">DINNERS</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown mx-2 fs-6 fw-bolder">
          <a class="nav-link" href="" role="button">MEALS</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown mx-2 fs-6 fw-bolder">
          <a class="nav-link" href="" role="button">INGREDIENTS</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown mx-2 fs-6 fw-bolder">
          <a class="nav-link" href="" role="button">OCCASIONS</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown mx-2 fs-6 fw-bolder">
          <a class="nav-link" href="">CUISINES</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown mx-2 fs-6 fw-bolder">
          <a class="nav-link" href="" role="button">KITCHEN TIPS</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown mx-2 fs-6 fw-bolder">
          <a class="nav-link" href="" role="button">FEATURES</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item mx-2 fs-6 fw-bolder">
        <a class="nav-link" href="#">ABOUT US</a>
        </li>
      </ul>
    </nav>
  </div>

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




  <!--############################### footer ######################### -->
  <div class="">
    <footer class="container-fluid d-flex flex-wrap justify-content-between align-items-center py-3 px-lg-5 mt-4 mb-0 border-top text-light bg-dark">
      <div class="col-md-4 d-flex align-items-center">
          <a href=""><h2 id="logoid" class="fs-1 fw-bold text-light">Frec<Span id="lgdes">i</Span>pe<Span id="lgdes">.</Span></h2></a>
        <span class="mb-0 mb-md-0 ">&emsp;&copy; 2023 Frecipe, Inc.</span>
      </div>
  
      <ul class="nav col-md-4 justify-content-end list-unstyled d-flex fs-3">
        <li class="ms-4"><a class="diffhov" href="#"><i class="fa-brands fa-twitter"></i></a></li>
        <li class="ms-4"><a class="diffhov" href="#"><i class="fa-brands fa-facebook"></i></a></li>
        <li class="ms-4"><a class="diffhov" href="#"><i class="fa-brands fa-instagram"></i></a></li>
      </ul>
    </footer>
  </div>


    <script src="js/script.js"></script>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="bootstrap/JS/bootstrap.min.js"></script>
    <script src="bootstrap/JS/bootstrap.bundle.min.js"></script>
</body>

</html>