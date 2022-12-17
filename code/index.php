<!DOCTYPE html>
<html lang="en">
<?php
// require_once 'include/session.php';
require_once dirname(__DIR__) . '/code/include/session.php';
unset($_SESSION['search']);

$title = "Home Page | YouTrain";
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
      <div class="container">
            <div class="row">
                  <div class="col-12 col-md-7">
                        <div class="d-flex flex-column">
                              <h2 class="title-search">Tickets for the next 24 hours</h2>
                              <?php
                              require 'models/travel.php';
                              $travel = new Travel();
                              $travels =  $travel->index_tickets();

                              ?>
                              <?php require_once 'views/ticketsView.php'; ?>
                        </div>
                  </div>
                  <div class="col-md-5">
                        <div class="para">
                              <p>
                                    Thank you for visiting our new website YouTrain, a great place to buy train tickets on line for all train operators on the Morocco network and save money. Our service now features a “best fare finder” facility which together with our other service benefits allows you to find the cheapest available train ticket prices for ticket types for your preferred rail journey, route and times across the national rail network and we're completely impartial.
                              </p>
                              <p>
                                    By booking ahead through YouTrain, you could save a lot of money compared with buying a ticket at the station on the day of travel.

                              </p>
                        </div>
                  </div>
            </div>
      </div>
      <?php require_once 'include/footer.php'; ?>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
      <?php require_once 'include/alert.php'; ?>
      <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
      <script>
            $(document).ready(function() {
                  $(".js-example-basic-single").select2();
            });
      </script>
</body>

</html>