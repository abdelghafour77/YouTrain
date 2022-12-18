<?php
require_once 'models/booking.php';
$book = new Booking();
$result = $book->booking();
// var_dump($result);
// die;

?>



<!DOCTYPE html>
<html lang="en">

<?php
// require_once 'include/session.php';
require_once dirname(__DIR__) . '/code/include/session.php';
unset($_SESSION['search']);

$title = "History | YouTrain";
include("include/head.php");

?>
<style>
      body {
            background: #cad9de;
      }
</style>

<body>
      <?php require_once 'include/navbar-user.php'; ?>

      <div class="p-5">
            <h1 class="pb-3">Booking History</h1>
            <?php
            if (count($result) == 0) {
                  echo "<h1>NO DATA</h1>";
            } else { ?>
                  <div class="table-responsive">
                        <table class="table bg-white">
                              <thead class="bg-dark text-light">
                                    <tr>
                                          <th>Booking Id</th>
                                          <th>Start Station</th>
                                          <th>End Station</th>
                                          <th>Booking date</th>
                                          <th>Number Of Adults</th>
                                          <th>Number Of Kids</th>
                                          <th>Ticket Price</th>
                                          <th>Total Price</th>
                                    </tr>
                              </thead>
                              <tbody>
                                    <?php
                                    foreach ($result as $travel) { ?>
                                          <tr>
                                                <td><?= $travel['id'] ?></td>
                                                <td><?= $travel['start_station'] ?></td>
                                                <td><?= $travel['end_station'] ?></td>
                                                <td><?= $travel['created_at'] ?></td>
                                                <td><?= $travel['nbr_adults'] ?></td>
                                                <td><?= $travel['nbr_kids'] ?></td>
                                                <td><?= $travel['price'] ?> MAD</td>
                                                <td><?= ($travel['price'] * $travel['nbr_adults']) + (($travel['price'] * $travel['nbr_kids']) * 0.5) ?> MAD</td>
                                          </tr>
                                    <?php } ?>
                              </tbody>
                        </table>
                  </div>
            <?php } ?>
      </div>
      <?php require_once 'include/footer.php'; ?>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
      <?php require_once 'include/alert.php'; ?>
</body>

</html>