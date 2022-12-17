<?php
require_once 'models/statistic.php';
$dash_statistics = new Statistics;
?>
<div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 mt-4">
      <div class="col mb-3">
            <div class="card card-statis text-white">
                  <div class="card-body row justify-content-between mt-3 mb-3">
                        <div class="col-4"><i class="bi bi-signpost-2 fs-2 text-dark text-center ms-3"></i></div>
                        <div class="col-8 text-truncate">
                              <h5 class="card-title">Total Stations</h5>
                              <p class="card-text fs-5"><?php echo ($dash_statistics->statistics_count('stations')['COUNT(*)']); ?> Stations</p>
                        </div>
                  </div>
            </div>
      </div>
      <div class="col mb-3">
            <div class="card card-statis text-white">
                  <div class="card-body row mt-3 mb-3">
                        <div class="col-4"><i class="bi bi-people fs-2 text-dark text-center ms-3"></i></div>
                        <div class="col-8 text-truncate">
                              <h5 class="card-title">Total Customers</h5>
                              <p class="card-text fs-5"><?php echo ($dash_statistics->statistics_count('users')['COUNT(*)']); ?> Customers</p>
                        </div>
                  </div>
            </div>
      </div>
      <div class="col mb-3">
            <div class="card card-statis text-white">
                  <div class="card-body row mt-3 mb-3">
                        <div class="col-4"><i class="bi bi-train-front-fill fs-2 text-dark text-center ms-3"></i></div>
                        <div class="col-8 text-truncate">
                              <h5 class="card-title">Total Trains</h5>
                              <p class="card-text fs-5"><?php echo ($dash_statistics->statistics_count('trains')['COUNT(*)']); ?> Trains</p>
                        </div>
                  </div>
            </div>
      </div>
      <div class="col mb-3">
            <div class="card card-statis text-white">
                  <div class="card-body row mt-3 mb-3">
                        <div class="col-4"><i class="bi bi-aspect-ratio fs-2 text-dark text-center ms-3"></i></div>
                        <div class="col-8 text-truncate">
                              <h5 class="card-title">Available E-tickets</h5>
                              <p class="card-text fs-5"><?php echo ($dash_statistics->available_tickets_count()); ?> Ticket</p>
                        </div>
                  </div>
            </div>
      </div>
      <div class="col mb-3">
            <div class="card card-statis text-white">
                  <div class="card-body row mt-3 mb-3">
                        <div class="col-4"><i class="bi bi-aspect-ratio fs-2 text-dark text-center ms-3"></i></div>
                        <div class="col-8 text-truncate">
                              <h5 class="card-title">Reserved E-tickets</h5>
                              <p class="card-text fs-5"><?php echo ($dash_statistics->reserved_tickets_count()); ?> Ticket</p>
                        </div>
                  </div>
            </div>
      </div>
      <div class="col">
            <div class="card card-statis text-white mb-5">
                  <div class="card-body row mt-3 mb-3">
                        <div class="col-4"><i class="bi bi-aspect-ratio fs-2 text-dark text-center ms-3"></i></div>
                        <div class="col-8 text-truncate">
                              <h5 class="card-title">Remaining E-tickets</h5>
                              <p class="card-text fs-5"><?php echo ($dash_statistics->remaining_tickets_count()); ?> Ticket</p>
                        </div>
                  </div>
            </div>
      </div>
</div>