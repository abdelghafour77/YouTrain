<!DOCTYPE html>
<html>

<?php
// require_once 'include/session.php';
require_once dirname(__DIR__) . '/code/include/session.php';
unset($_SESSION['search']);

$title = "Home Page | YouTrain";
include("include/head.php");

?>


<body>
  <?php require_once 'include/navbar-user.php'; ?>
  <div class="succe">
    <div class="card-success">
      <div class="succes">
        <i class="checkmark">✓</i>
      </div>
      <h1>Success</h1>
      <p class="pp">Your booking has been placed!<br /> we'll be in touch shortly!</p>
    </div>
  </div>
  <?php require_once 'include/footer.php'; ?>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <?php require_once 'include/alert.php'; ?>

</body>

</html>