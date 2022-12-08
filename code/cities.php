<?php
$title = "Cities | Trainpal";
include("include/head.php");
?>

<body class="bg-light">
    <!-- Begin navbar -->
    <?php
    include("include/navbar.php");
    ?>
    <!-- END navbar -->
    <!-- BEGIN Offcanvas -->
    <?php
    include("include/sidebar.php");
    ?>
    <!-- END Offcanvas -->
    <main class="mb-4">
        <div class="d-flex justify-content-between mt-3 mb-4 ms-2">
            <div class="fs-2">
                <span class="me-2"><i class="bi bi-buildings"></i></span>
                <span>Cities</span>
            </div>
            <a href="#modal-city" data-bs-toggle="modal" class="btn btn-dark me-4 mt-2" onclick="addCity()"><i class="bi bi-plus-lg me-2"></i> Add City</a>
        </div>
        <?php
        require 'views/allCities.php';
        ?>
    </main>
    <!-- City MODAL -->
	<div class="modal fade" id="modal-city">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="./controllers/cityController.php" method="POST" id="form-city">
					<div class="modal-header">
						<h5 class="modal-title">Add new city</h5>
						<a href="#" class="btn-close" data-bs-dismiss="modal"></a>
					</div>
					<div class="modal-body">
							<input  type="hidden" name="id" id="city-id">
							<div class="mb-3">
								<label class="form-label">Name</label>
								<input type="text" class="form-control" name="name" id="city-name"/>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/jquery.dataTables.min.js" integrity="sha512-BkpSL20WETFylMrcirBahHfSnY++H2O1W+UnEEO4yNIl+jI2+zowyoGJpbtk6bx97fBXf++WJHSSK2MV4ghPcg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(document).ready(function() {
            $("#data-table").DataTable({
                scrollX: true,
                info: false,
                responsive: true,
            });
        });
    </script>
    <script src="assets/js/main.js"></script>
</body>