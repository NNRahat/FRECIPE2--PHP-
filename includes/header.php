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
      <nav class="nav d-lg-flex justify-content-between align-items-center pe-4 py-1" aria-label="Secondary navigation">

      <!--######################  links #################### -->
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

        <!-- #################### image ######################## -->
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