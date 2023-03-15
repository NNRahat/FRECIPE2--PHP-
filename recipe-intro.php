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

<body class="colorset p-0 override-modal-open">
  <header>
    <!-- place navbar here -->
    <nav class="colorset navbar navbar-expand-lg pb-0 bg-body-primary d-flex justify-content-center align-items-center px-2">
      <div class="container-fluid my-2 d-lg-flex justify-content-between align-items-center">
        <div class="row w-100">
          <!-- logos -->
          <div class="logo col-10 col-lg-1">
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
                  <a type="button" class="nav-link ms-lg-2 px-4 bg-darkgreen text-light rounded-3 pe-auto" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap" id="text-white" aria-current="page" href=""><b>Login</b></a>
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

  <!--########################## second navbar ##############################-->
    <div class="colorset nav-scroller shadow-sm pb-1 pt-1 position-sticky left-0 z-3 mt-0" style="top: -0.1%;">
      <nav class="nav d-lg-flex justify-content-between align-items-center pe-5 py-1" aria-label="Secondary navigation">
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
        <div class="dropdown">
          <img class="userpicture" role="button" src="images1/users/player-1.png" alt="">
          <ul class="dropdown-menu end-0">
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li><a class="dropdown-item" href="#">Add a new recipe</a></li>
            <li><a class="dropdown-item" href="#">My recipes</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Log out!</a></li>
          </ul>
        </div>
      </nav>
    </div>

  
  
    <main class="colorset">
    <!--####################### hero carousel ########################-->
    <section class="d-flex flex-column justify-content-center align-items-center px-0 w-100 position-relative" style="height: 100vh;">
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
            <span class="position-relative d-flex justify-content-center h-100 z-1">
              <img class="w-100 h-100 object-fit-cover" src="images1/pizza.jpg"  alt="...">
            </span>
          </div>
        </div>
      </div>
      
      <!-- bookmark button -->
      <div class="overflow-hidden position-absolute rounded-circle bg-light border-0 z-2" style="left: 7%;bottom: 4%;width: 4rem;height: 4rem;">
        <button class=" border-0 fs-3 w-100 h-100 bg-darkgreen text-light"><i class="fa-regular fa-bookmark"></i></button>
      </div>
      <!-- bookmark button -->

      <!-- card -->
      <div class="d-lg-block d-none rounded-4 card position-absolute positioning bg-gray overflow-hidden" style="width: 25rem;">
          <div class="position-relative overflow-hidden w-100" style="height: 100px;">
            <img src="images/favicon.png" class="card-img-top" alt="...">
          </div>
          <div class="card-body bg-gray fs-5">
            <ul class="px-0 py-1">
              <li class="cust mb-3"> <span class="fw-semibold">Cook :</span><span class="text-muted">1h 20min</span></li>
              <li class="cust mb-3"> <span class="fw-semibold">Additional :</span><span class="text-muted">1h 20min</span></li>
              <li class="cust mb-3"> <span class="fw-semibold">Total :</span><span class="text-muted">1h 20min</span></li>
              <li class="cust mb-3"> <span class="fw-semibold">Servings :</span><span class="text-muted">1h 20min</span></li>
              <li class="cust"> <span class="fw-semibold">Yield :</span><span class="text-muted">1h 20min</span></li>
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
              <li class="cust mb-2"> <span class="fw-semibold">Cook :</span>1h 20min</li>
              <li class="cust mb-2"> <span class="fw-semibold">Additional :</span>1h 20min</li>
              <li class="cust mb-2"> <span class="fw-semibold">Total :</span>1h 20min</li>
              <li class="cust mb-2"> <span class="fw-semibold">Servings :</span>1h 20min</li>
              <li class="cust"> <span class="fw-semibold">Yield :</span>1h 20min</li>
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
              <h3>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, maiores ipsa similique nostrum molestias tempora repellat?
              </h3>
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
            <video autoplay controls controlsList="nodownload" class="rounded-4 w-100 object-fit-cover" src="video/pizza.mp4"></video>
            <!-- <iframe height="315" class="rounded-4 w-100 object-fit-cover" src="https://www.youtube.com/embed/8Er5fjgOhhc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> -->
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