<?php
// require_once 'include/session.php';
require_once dirname(__DIR__) . '/code/include/session.php';
unset($_SESSION['search']);


?>
<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="assets/css/style.css">
      <link rel="stylesheet" href="assets/css/index.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

      <title>YouTrain | Booking trains</title>
</head>

<body>
      <header class="masthead">
            <div class="container position-relative px-4 px-lg-5">
                  <div class="row gx-4 gx-lg-5 justify-content-center">
                        <div class="col-md-10 col-lg-8 col-xl-7">
                              <div class="site-heading"></div>
                        </div>
                  </div>
            </div>
      </header>



      <?php require_once 'include/navbar-user.php'; ?>
      <?php require_once 'views/searchBoxView.php'; ?>
      <main class="page-content">
            <div class="card">
                  <div class="content">
                        <h2 class="title">Mountain View</h2>

                  </div>
            </div>
            <div class="card">
                  <div class="content">
                        <h2 class="title">To The Beach</h2>

                  </div>
            </div>
            <div class="card">
                  <div class="content">
                        <h2 class="title">Desert Destinations</h2>

                  </div>
            </div>
            <div class="card">
                  <div class="content">
                        <h2 class="title">Explore The Galaxy</h2>

                  </div>
            </div>
      </main>

      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>