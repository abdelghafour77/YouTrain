<?php
require_once '../models/booking.php';
require_once '../models/card_payment.php';

if (isset($_POST['checkout'])) {
  extract($_POST);
  $date = date("Y-m-d h:i:sa");
  $book = new Booking($_SESSION['id'], $id_travel, $nbr_adults, $nbr_kids, $date);
  $card = new CradPayment($_SESSION['id'], $card_number, $card_full_name, $cvv, $card_date_expiration);
  $payment = $card->add();
  $booking = $book->checkout();
  if ($payment and $booking) {
    header("location: ../done.php");
  }
}
