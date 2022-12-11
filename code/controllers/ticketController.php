<?php
require_once '../models/ticket.php';

if (isset($_GET['id'])) {
    extract($_GET);
    $ticket = new Ticket($id);
    $ticket->deleteTicket();
    header('location:../tickets.php');
}

if (isset($_POST['order'])) {
    $ticket = new Ticket();
    $ticket->orderTickets();
    var_dump($ticket->orderTickets());
    die;
    header('location:../tickets.php');
}