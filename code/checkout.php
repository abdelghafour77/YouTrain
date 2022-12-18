<?php
require_once 'models/booking.php';

if (!isset($_GET['id_travel'])) {
  header('location: index.php');
  die;
} else {
  if (!isset($_SESSION['id'])) {
    header('location: signup.php');
    die;
  } else {
    $user = new Booking();
    $user->setId($_SESSION['id']);
    $user = $user->getInfo();
    $travel = new Booking();
    $travel->setId($_GET['id_travel']);
    $travel = $travel->getTravel();
    // var_dump($user);
    // die;
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<?php
require_once dirname(__DIR__) . '/code/include/session.php';
$title = "Checkout | YouTrain";
include("include/head.php");
?>

<body class="bg-light">

  <?php require_once 'include/navbar-user.php'; ?>

  <div class="container">

    <div class="row">
      <!-- Right side info -->
      <div class="col-md-4 order-md-2 mb-4">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-muted">Your Ticket</span>
        </h4>
        <ul class="list-group mb-3">
          <li class="list-group-item d-flex justify-content-between lh-condensed">
            <div>
              <h6 class="my-0">Price ticket</h6>
              <small class="text-muted"></small>
            </div>
            <span class="text-muted"><?= $travel['price'] ?> MAD</span>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-condensed">
            <div>
              <h6 class="my-0">Number of adults (+18)</h6>
            </div>
            <span class="text-muted" id="adults">1</span>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-condensed">
            <div>
              <h6 class="my-0">Number of kids (0-17) -50%</h6>
            </div>
            <span class="text-muted" id="kids">0</span>
          </li>
          <li class="list-group-item d-flex justify-content-between">
            <span>Total (MAD)</span>
            <strong><span id="total"><?= $travel['price'] ?></span> MAD</strong>
          </li>
        </ul>
      </div>
      <!-- Left side info -->

      <div class="col-md-8 order-md-1">
        <form action="controllers/bookingController.php" method="post">
          <input type="hidden" name="id_travel" value="<?= $travel['id'] ?>">

          <h4 class="mb-3">Billing information</h4>

          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="firstName">First name</label>
              <input type="text" class="form-control" name="first_name" value="<?= $_SESSION['first_name'] ?>" disabled>
            </div>
            <div class="col-md-6 mb-3">
              <label for="lastName">Last name</label>
              <input type="text" class="form-control" name="last_name" value="<?= $_SESSION['last_name'] ?>" disabled>
            </div>
          </div>

          <div class="row">
            <div class="mb-3">
              <label for="email">Email</label>
              <input type="email" class="form-control" name="email" value="<?= $_SESSION['email'] ?>" disabled>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="email">Departure station</label>
              <input type="text" class="form-control" name="d_station" placeholder="Departure station" value="<?= $travel['city_start'] . ' - ' . $travel['station_start'] ?>" disabled>
            </div>

            <div class="col-md-6 mb-3">
              <label for="email">Arrival station</label>
              <input type="text" class="form-control" name="a_station" placeholder="Arrival station" value="<?= $travel['city_end'] . ' - ' . $travel['station_end'] ?>" disabled>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="email">Date</label>
              <input type="datetime-local" class="form-control" name="date" value="<?= $travel['date_start'] ?>" disabled>
            </div>

            <div class="col-md-6 mb-3">
              <label for="email">Train type</label>
              <input type="text" class="form-control" name="train_type" placeholder="Train type" value="<?= $travel['type_train'] ?>" disabled>
            </div>
          </div>

          <hr class="mb-4">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <span class="form-label">Adults (18+)</span>
                <select class="form-select" name="nbr_adults" id="nbr_adults">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <span class="form-label">Children (0-17)</span>
                <select class="form-select" name="nbr_kids" id="nbr_kids">
                  <option value="0">0</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                </select>

              </div>
            </div>
          </div>
          <hr class="mb-4">

          <h4 class="mb-3">Payment</h4>
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="cc-name">Name on card</label>
              <input type="text" class="form-control" placeholder="Full name" name="card_full_name" value="<?= $user['full_name'] ?>" required>
              <small class="text-muted">Full name as displayed on card</small>

            </div>
            <div class="col-md-6 mb-3">
              <label for="cc-number">Credit card number</label>
              <input type="text" class="form-control" placeholder="Card number" name="card_number" value="<?= $user['card_number'] ?>" required>

            </div>
          </div>
          <div class="row">
            <div class="col-md-3 mb-3">
              <label for="cc-expiration">Expiration</label>
              <input type="text" class="form-control" placeholder="12-23" name="card_date_expiration" value="<?= $user['date_exp'] ?>" required>

            </div>
            <div class="col-md-3 mb-3">
              <label for="cc-expiration">CVV</label>
              <input type="text" class="form-control" placeholder="XXX" name="cvv" value="<?= $user['cvv'] ?>" required>

            </div>
          </div>
          <hr class="mb-4">
          <input class="btn btn-primary btn-lg btn-block" type="submit" name="checkout" value="Continue to checkout"></input>

        </form>
      </div>

    </div>
  </div>

  <?php require_once 'include/footer.php'; ?>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <?php require_once 'include/alert.php'; ?>
  <script>
    var nbr_adults = 1;
    var nbr_kids = 0;

    $('#nbr_adults').on('change', function(e) {
      nbr_adults = $("#nbr_adults").val();
      $("#adults").text(nbr_adults);
      total();
    });
    $('#nbr_kids').on('change', function(e) {
      nbr_kids = $("#nbr_kids").val();
      $("#kids").text(nbr_kids);
      total();
    });

    function total() {
      let total = 0;
      total = (nbr_adults * <?= $travel['price'] ?>) + ((nbr_kids * <?= $travel['price'] ?>) * 0.5);
      $("#total").text(total);
    }
  </script>

</body>

</html>