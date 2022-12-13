<?php
include_once './models/train.php';
$all_types = new Train();
$types = $all_types->allTypes();
?>
<div class="modal fade" id="modal-city">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="./controllers/trainController.php" method="POST" id="form-city" data-parsley-validate>
					<div class="modal-header">
						<h5 class="modal-title">Add new train</h5>
						<a href="#" class="btn-close" data-bs-dismiss="modal"></a>
					</div>
					<div class="modal-body">
							<input  type="hidden" name="id" id="train-id">
							<div class="mb-3">
								<label class="form-label">Name</label>
								<input type="text" class="form-control" name="name" id="train-name" required data-parsley-minlength="3" data-parsley-trigger="keyup"/>
							</div>
                            <div class="mb-3">
								<label class="form-label">Capacity</label>
								<input type="number" class="form-control" name="capacity" id="train-capacity" required data-parsley-trigger="keyup"/>
							</div>
                            <div class="mb-3">
								<label class="form-label">Train Type</label>
								<select class="form-select" name="type" id="train-type" required data-parsley-trigger="keyup">
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