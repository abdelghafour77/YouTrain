<?php
include_once './models/travel.php';
$all_stations = new Travel();
$stations = $all_stations->allStations();
$trains = $all_stations->allTrains();
?>
<div class="modal fade" id="modal-city">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="./controllers/travelController.php" method="POST" id="form-city">
					<div class="modal-header">
						<h5 class="modal-title">Add new travel</h5>
						<a href="#" class="btn-close" data-bs-dismiss="modal"></a>
					</div>
					<div class="modal-body">
							<input  type="hidden" name="id" id="travel-id">
							<div class="mb-3">
								<label class="form-label">Time</label>
								<input type="number" class="form-control" name="time" id="travel-time"/>
							</div>
                            <div class="mb-3">
								<label class="form-label">Price</label>
								<input type="number" class="form-control" name="price" id="travel-price"/>
							</div>
							<div class="mb-3">
								<label class="form-label">Start Station</label>
								<select class="form-select" name="start" id="travel-start">
									<option value="">Please select</option>
                                    <?php
                                        foreach ($stations as $station) {
                                    ?>
									<option value="<?= $station['id']; ?>"><?= $station['name'] ?></option>
                                    <?php
                                        }
                                    ?>
								</select>
							</div>
							<div class="mb-3">
								<label class="form-label">End Station</label>
								<select class="form-select" name="end" id="end">
									<option value="">Please select</option>
                                    <?php
                                        foreach ($stations as $station) {
                                    ?>
									<option value="<?= $station['id']; ?>"><?= $station['name'] ?></option>
                                    <?php
                                        }
                                    ?>
								</select>
							</div>
							<div class="mb-3">
								<label class="form-label">Date Start</label>
								<input type="datetime-local" class="form-control" name="date" id="date"/>
							</div>
                            <div class="mb-3">
								<label class="form-label">Train</label>
								<select class="form-select" name="train" id="train">
									<option value="">Please select</option>
                                    <?php
                                        foreach ($trains as $train) {
                                    ?>
									<option value="<?= $train['id']; ?>"><?= $train['name'] ?></option>
                                    <?php
                                        }
                                    ?>
								</select>
							</div>
					</div>
					<div class="modal-footer">
						<a href="#" class="btn btn-secondary" data-bs-dismiss="modal" id="city-cancel-btn">Cancel</a></button>
						<button type="submit" name="update" class="btn btn-warning city-action-btn" id="city-update-btn">Update</a></button>
						<button type="submit" name="save" class="btn btn-primary city-action-btn" id="city-save-btn">Save</button>
					</div>
				</form>
			</div>
		</div>
	</div>