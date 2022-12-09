<?php
include_once './models/station.php';
$all_cities = new Station();
$cities = $all_cities->allCities();
?>
<div class="modal fade" id="modal-city">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="./controllers/stationController.php" method="POST" id="form-city">
					<div class="modal-header">
						<h5 class="modal-title">Add new station</h5>
						<a href="#" class="btn-close" data-bs-dismiss="modal"></a>
					</div>
					<div class="modal-body">
							<input  type="hidden" name="id" id="station-id">
							<div class="mb-3">
								<label class="form-label">Name</label>
								<input type="text" class="form-control" name="name" id="station-name"/>
							</div>
                            <div class="mb-3">
								<label class="form-label">Address</label>
								<input type="text" class="form-control" name="address" id="station-address"/>
							</div>
                            <div class="mb-3">
								<label class="form-label">Capacity</label>
								<input type="number" class="form-control" name="capacity" id="station-capacity"/>
							</div>
                            <div class="mb-3">
								<label class="form-label">City</label>
								<select class="form-select" name="city" id="station-city">
									<option value="">Please select</option>
                                    <?php
                                        foreach ($cities as $city) {
                                    ?>
									<option value="<?= $city['id']; ?>"><?= $city['name'] ?></option>
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