<div class="modal fade" id="modal-city">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="./controllers/trainController.php" method="POST" id="form-city">
					<div class="modal-header">
						<h5 class="modal-title">Add new train</h5>
						<a href="#" class="btn-close" data-bs-dismiss="modal"></a>
					</div>
					<div class="modal-body">
							<input  type="hidden" name="id" id="travel-id">
							<div class="mb-3">
								<label class="form-label">Time</label>
								<input type="number" class="form-control" name="time" id="train-name"/>
							</div>
                            <div class="mb-3">
								<label class="form-label">Capacity</label>
								<input type="number" class="form-control" name="capacity" id="travel-capacity"/>
							</div>
                            <div class="mb-3">
								<label class="form-label">Train</label>
								<select class="form-select" name="train" id="-traveltrain">
									<option value="">Please select</option>
                                    <?php
                                        foreach ($types as $type) {
                                    ?>
									<option value="<?= $type['id']; ?>"><?= $type['name'] ?></option>
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