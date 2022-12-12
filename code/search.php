<?php
session_start();
require 'models/travel.php';
if (isset($_GET['searching']) && isset($_GET['d_station']) && isset($_GET['a_station']) && isset($_GET['date_d']) && isset($_GET['train_type']) && isset($_GET['nbr_adults']) && isset($_GET['nbr_kids'])) {
  $travels = searching();
} else {
  header('location: 404.php');
  die;
}

function searching()
{
  extract($_GET);
  $travel = new Travel();

  return $travel->search($d_station, $a_station, $date_d, $train_type, $nbr_adults, $nbr_kids);
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">

  <link href="assets/css/style.css" rel="stylesheet" />
  <title>Search page | YouTrain</title>
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

  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <hr class="dropdown-divider" />
              </li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>

        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>

  <?php require_once 'views/searchBoxView.php'; ?>
  <section id="tickets">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-8">
          <div class="d-flex flex-column">
            <?php

            require_once 'views/ticketsView.php'; ?>
          </div>
        </div>
        <div class="col-4 d-none d-md-block">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3374.3916702849438!2d-8.53674738569349!3d32.24754251810201!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdaefcd343bb09b7%3A0x27366ca5953ccbc9!2sYoussoufia!5e0!3m2!1sfr!2sma!4v1670575282727!5m2!1sfr!2sma" width="100%" height="280px" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </div>
  </section>

</body>

</html>