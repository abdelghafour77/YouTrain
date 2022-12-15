<?php
require_once 'models/booking.php';
$book = new Booking();
$result = $book->booking();

?>



<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>User Hestorique</title>
      <!-- ================== BEGIN core-css ================== -->
      <link rel="stylesheet" href="assets/css/style.css">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css%22%3E">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
      <!-- ================== END core-css ================== -->
</head>
<style>
      body {
            background: #cad9de;
      }
</style>

<body>
      <div class="p-5">
            <h1 class="pb-3">Booking History</h1>
            <div class="table-responsive">
                  <table class="table bg-white">
                        <thead class="bg-dark text-light">
                              <tr>
                                    <th>Booking Id</th>
                                    <th>Full Name</th>
                                    <th>Travel Id</th>
                                    <th>Number Of Adults</th>
                                    <th>Number Of Kids</th>
                                    <th>Ticket Price</th>
                              </tr>
                        </thead>
                        <tbody>
                              <?php
                              foreach ($result as $travel) { ?>
                                    <tr>
                                          <td><?= $travel['id'] ?></td>
                                          <td><?= $travel['first_name'] . " " . $travel['last_name'] ?></td>
                                          <td><?= $travel['travel_id'] ?></td>
                                          <td><?= $travel['nbr_adults'] ?></td>
                                          <td><?= $travel['nbr_kids'] ?></td>
                                          <td><?= $travel['price'] ?>$</td>
                                    </tr>
                              <?php } ?>
                        </tbody>
                  </table>
            </div>
      </div>
</body>

</html>