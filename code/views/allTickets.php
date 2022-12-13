<?php
include_once './models/ticket.php';
$all_tickets = new Ticket();
$tickets = $all_tickets->allTickets();
?>
<div class="row row-cols-1 row-cols-md-2 g-4">
    <?php
    foreach ($tickets as $ticket) {
    ?>
        <div class="col">
            <div class="card border-secondary">
                <h5 class="card-header">#<?= $ticket["id"] ?> Tickets</h5>
                <div class="card-body">
                    <div class="row row-cols-2">
                        <p class="col"><span class="fw-bold">Passenger Name: </span> <?= $ticket['first_name'] . " " . $ticket['last_name']  ?></p>
                        <p class="col"><span class="fw-bold">Travel Number: </span> <?= $ticket["travel_number"] ?></p>
                    </div>
                    <div class="row row-cols-2">
                        <p class="col"><span class="fw-bold">Adults Number: </span> <?= $ticket["nbr_adults"] ?></p>
                        <p class="col"><span class="fw-bold">Kids Number: </span> <?= $ticket["nbr_kids"] ?></p>
                    </div>
                    <div class="row row-cols-2">
                        <p class="col"><span class="fw-bold">Created At: </span> <?= $ticket["created_at"] ?></p>
                        <p class="col"><span class="fw-bold">Updated At: </span> <?= $ticket["updated_at"] ?></p>
                    </div>
                    <div class="">
                        <a href="traveldetails.php?id=<?= $ticket["travel_number"]; ?>" class="btn btn-primary me-3">Go To Travel details</a>
                        <a href="controllers/ticketController.php?id=<?= $ticket['id']; ?>" class="btn btn-danger"><i class="bi bi-trash3-fill users-icon me-1"></i> Delete E-tickets</a>
                    </div>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
</div>