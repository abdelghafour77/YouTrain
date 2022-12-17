<!DOCTYPE html>
<html lang="en">
<?php
require_once dirname(__DIR__) . '/code/include/session.php';
require 'models/travel.php';
if (isset($_GET['searching'])) {
  $d_station = null;
  $a_station = null;
  $date_d = null;
  $train_type = null;
  $nbr_adults = null;
  $nbr_kids = null;
  extract($_GET);
  $travel = new Travel();
  $travels =  $travel->search($d_station, $a_station, $date_d, $train_type, $nbr_adults, $nbr_kids);
}
$title = "Stations | YouTrain";
include("include/head.php");
?>


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
  <section id="tickets">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-8">
          <div class="d-flex flex-column">
            <?php require_once 'views/ticketsView.php'; ?>
          </div>
        </div>
        <div class="col-4 d-none d-md-block">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3374.3916702849438!2d-8.53674738569349!3d32.24754251810201!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdaefcd343bb09b7%3A0x27366ca5953ccbc9!2sYoussoufia!5e0!3m2!1sfr!2sma!4v1670575282727!5m2!1sfr!2sma" width="100%" height="280px" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </div>
  </section>
  <?php require_once 'include/alert.php'; ?>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <?php require_once 'include/footer.php'; ?>
</body>

</html>