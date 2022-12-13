<?php
require_once 'models/station.php';
require_once 'models/trainType.php';
$stations = (new Station())->allStations();
$trainTypes = (new TrainType())->allTrainType();
?>
<section id="search">
  <div class="container">
    <div class="row row-search">
      <div class="col-md-11 mx-auto col-md-offset-1">
        <div class="booking-form">
          <form method="get" action="">
            <h1 class="title">Search</h1>
            <div class="row row-search">
              <div class="col-md-6">
                <div class="form-group">
                  <span class="form-label">Departure station</span>
                  <select class="form-control" name="d_station" id="d_station" required>
                    <option value="" disabled selected> Departure station</option>
                    <?php foreach ($stations as $station) { ?>
                      <option value="<?= $station['id'] ?>"><?= $station['city'] . ' - ' . $station['name'] ?></option>
                    <?php } ?>
                  </select>
                  <span class="select-arrow"></span>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <span class="form-label">Arrival station</span>
                  <select class="form-control" name="a_station" id="a_station" required>
                    <option value="" disabled selected> Arrival station</option>
                    <?php foreach ($stations as $station) { ?>
                      <option value="<?= $station['id'] ?>"><?= $station['city'] . ' - ' . $station['name'] ?></option>
                    <?php } ?>
                  </select>
                  <span class="select-arrow"></span>
                </div>
              </div>
            </div>
            <div class="row row-search">
              <div class="col-md-6">
                <div class="form-group">
                  <span class="form-label">Departing</span>
                  <input class="form-control" type="date" name="date_d" id="date_d" required>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <span class="form-label">Train type</span>
                  <select class="form-control" name="train_type" id="train_type" required>
                    <option value="" disabled selected>Train type</option>
                    <?php foreach ($trainTypes as $trainType) { ?>
                      <option value="<?= $trainType['id'] ?>"><?= $trainType['name'] ?></option>
                    <?php } ?>
                  </select>
                  <span class="select-arrow"></span>
                </div>
              </div>
            </div>
            <div class="row row-search">
              <div class="col-md-6">
                <div class="form-group">
                  <span class="form-label">Adults (18+)</span>
                  <select class="form-control" name="nbr_adults" id="nbr_adults" required>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                  </select>
                  <span class="select-arrow"></span>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <span class="form-label">Children (0-17)</span>
                  <select class="form-control" name="nbr_kids" id="nbr_kids" required>
                    <option>0</option>
                    <option>1</option>
                    <option>2</option>
                  </select>
                  <span class="select-arrow"></span>
                </div>
              </div>

            </div>
            <div class="form-btn">
              <input type="submit" class="submit-btn" name="searching" value="Show travels">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<script>
  document.getElementById('d_station').value = "<?= $_SESSION['search']['start_station'] ?>";
  document.getElementById('a_station').value = "<?= $_SESSION['search']['end_station'] ?>";
  document.getElementById('date_d').value = "<?= $_SESSION['search']['date_start'] ?>";
  document.getElementById('train_type').value = "<?= $_SESSION['search']['train_type'] ?>";
  document.getElementById('nbr_adults').value = "<?= $_SESSION['search']['nbr_adults'] ?>";
  document.getElementById('nbr_kids').value = "<?= $_SESSION['search']['nbr_kids'] ?>";
</script>