<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <div>
    <nav class="navbar fixed-top navbar-light bg-light">
      <div class="container-fluid">
        <span>
          <span><a class="" href="#" style="color:black;"><img class="nav-item-icon" src="assets/train.svg" width="30" height="30" alt="navIcon"></span></a>
          <a class="navbar-brand" href="#" style="color:black;">YOUTRAIN</a>
        </span>

        <span>
          <span></span>
          <a class="navbar-brand " id="underline" href="#" style="color:black;">Pricing</a>
        </span>
        <span>
          <span></span>
          <a class="navbar-brand" id="underline" href="#" style="color:black;">Consulting</a>
        </span>

        <span>
          <span> </span>
          <a class="navbar-brand" id="underline" href="#" style="color:black;">Contact Us</a>
        </span>
        <!------>
        <span class="registration" style="display:none;">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Login</a></li>
              <li class="breadcrumb-item"><a href="#">Register</a></li>

            </ol>
          </nav>
        </span>
        <!------>



        <!--######################################################################################################-->

        <div class="navbar-item navbar-user dropdown">
          <a href="#" class="navbar-link dropdown-toggle d-flex align-items-center" data-bs-toggle="dropdown">
            <img src="/storage/users/profile/thumbnail/351-1662713897.JPG" alt="">
            <span>
              <span class="d-none d-md-inline">Logged User</span>
              <b class="caret"></b>
            </span>
          </a>
          <div class="dropdown-menu dropdown-menu-end me-1">
            <a href="/profile#settings" class="dropdown-item">Edit Profile</a>
            <a href="javascript:;" class="dropdown-item d-flex align-items-center">
              Inbox
              <span class="badge bg-danger rounded-pill ms-auto pb-4px">0</span>
            </a>
            <a href="javascript:;" class="dropdown-item">Calendar</a>
            <a href="javascript:;" class="dropdown-item">Setting</a>
            <div class="dropdown-divider"></div>
            <a href="javascript: $('form#logout').submit();" class="dropdown-item">Log Out</a>
            <form method="POST" action="" id="logout">
              <input type="hidden" name="_token" value="GzSDqerF6gCGnvhgAPqpO6UCeEPuLFWSFEUBMozx">
            </form>
          </div>
        </div>
        <!--######################################################################################################-->


      </div>
    </nav>
    <div>

      <section class="dark-bg" id="hero">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="assets/img/train1.jpg" class="d-block w-100" alt="..." style="width: 300px; height: 337px; object-fit: cover;">
              <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Some representative placeholder content for the first slide.</p>
                <!-- <button type="button" class="btn btn-success" id="#btn-scroll" onclick="scroll()">Success</button> -->
              </div>
            </div>
            <div class="carousel-item">
              <img src="assets/img/train2.jpg" class="d-block w-100" alt="..." style="width: 300px; height: 337px; object-fit: cover;">
              <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Some representative placeholder content for the second slide.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="assets/img/train3.jpg" class="d-block w-100" alt="..." style="width: 300px; height: 337px; object-fit: cover;">
              <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Some representative placeholder content for the third slide.</p>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>



      </section>
      <!------------------------------------------------------------------->
      <div class="wrapper bg-white" id="consult">
        <form action="#">
          <div class="form-group border-bottom d-flex align-items-center justify-content-between flex-wrap">
            <label class="option my-sm-0 my-2">
              <!-- <input type="radio" name="radio" checked>Round Trip
                    <span class="checkmark"></span>
                </label>
                <label class="option my-sm-0 my-2">
                    <input type="radio" name="radio">One Way
                    <span class="checkmark"></span>
                </label> -->
              <div class="d-flex align-items-center my-sm-0 my-2">
                <a href="#" class="text-decoration-none">
                  Multi-city/Stopovers <span class="fas fa-angle-right ps-2 text-primary"></span>
                </a>
              </div>
          </div>
          <div class="form-group d-sm-flex margin">
            <div class="d-flex align-items-center flex-fill me-sm-1 my-sm-0 my-4 border-bottom position-relative">
              <input type="text" required placeholder="From" class="form-control">
              <div class="label" id="from"></div>
              <span class="fas fa-dot-circle text-muted"></span>
            </div>
            <div class="d-flex align-items-center flex-fill ms-sm-1 my-sm-0 my-4 border-bottom position-relative">
              <input type="text" required placeholder="To" class="form-control">
              <div class="label" id="to"></div>
              <span class="fas fa-map-marker text-muted"></span>
            </div>
          </div>
          <div class="form-group d-sm-flex margin">
            <div class="d-flex align-items-center flex-fill me-sm1 my-sm-0 border-bottom position-relative">
              <input type="date" required placeholder="Depart Date" class="form-control">
              <div class="label" id="depart"></div>
            </div>

          </div>
          <div class="form-group border-bottom d-flex align-items-center position-relative">
            <input type="text" required placeholder="Traveller(s)" class="form-control">
            <div class="label" id="psngr"></div>
            <span class="fas fa-users text-muted"></span>
          </div>
          <div class="form-group my-3">
            <div class="btn btn-primary rounded-0 d-flex justify-content-center text-center p-3">Search Trains
            </div>
          </div>
        </form>

      </div>



      <footer>

        <!-- Footer -->
        <footer class="text-center text-lg-start bg-light text-muted">
          <!-- Section: Social media -->
          <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
            <!-- Left -->
            <div class="me-5 d-none d-lg-block">
              <span>Get connected with us on social networks:</span>
            </div>
            <!-- Left -->

            <!-- Right -->
            <div>
              <a href="" class="me-4 text-reset">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="" class="me-4 text-reset">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="" class="me-4 text-reset">
                <i class="fab fa-google"></i>
              </a>
              <a href="" class="me-4 text-reset">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="" class="me-4 text-reset">
                <i class="fab fa-linkedin"></i>
              </a>
              <a href="" class="me-4 text-reset">
                <i class="fab fa-github"></i>
              </a>
            </div>
            <!-- Right -->
          </section>
          <!-- Section: Social media -->

          <!-- Section: Links  -->
          <section class="">
            <div class="container text-center text-md-start mt-5">
              <!-- Grid row -->
              <div class="row mt-3">
                <!-- Grid column -->
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                  <!-- Content -->
                  <h6 class="text-uppercase fw-bold mb-4">
                    <i class="fas fa-gem me-3"></i>Youcode
                  </h6>
                  <p>
                    Here you can use rows and columns to organize your footer content. Lorem ipsum
                    dolor sit amet, consectetur adipisicing elit.
                  </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                  <!-- Links -->
                  <h6 class="text-uppercase fw-bold mb-4">
                    Products
                  </h6>
                  <p>
                    <a href="#!" class="text-reset">Angular</a>
                  </p>
                  <p>
                    <a href="#!" class="text-reset">React</a>
                  </p>
                  <p>
                    <a href="#!" class="text-reset">Vue</a>
                  </p>
                  <p>
                    <a href="#!" class="text-reset">Laravel</a>
                  </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                  <!-- Links -->
                  <h6 class="text-uppercase fw-bold mb-4">
                    Useful links
                  </h6>
                  <p>
                    <a href="#!" class="text-reset">Pricing</a>
                  </p>
                  <p>
                    <a href="#!" class="text-reset">Settings</a>
                  </p>
                  <p>
                    <a href="#!" class="text-reset">Orders</a>
                  </p>
                  <p>
                    <a href="#!" class="text-reset">Help</a>
                  </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                  <!-- Links -->
                  <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                  <p><i class="fas fa-home me-3"></i><br>Youssoufia,Marrakesh-Safi 46300 , MA</p>
                  <p>
                    <i class="fas fa-envelope me-3"></i>
                    info@youcode.ma
                  </p>
                  <!-- <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
          <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p> -->
                </div>
                <!-- Grid column -->
              </div>
              <!-- Grid row -->
            </div>
          </section>
          <!-- Section: Links  -->

          <!-- Copyright -->
          <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
            © 2022 Copyright:
            <a class="text-reset fw-bold" href="https://youcode.ma/">youcode.ma</a>
          </div>
          <!-- Copyright -->
        </footer>
        <!-- Footer -->


      </footer>
      <script type="text/javascript" src="actions.js"></script>

      <link rel="stylesheet" href="assets/css/home.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>