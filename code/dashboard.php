<?php
    $title = "Dashboard | Trainpal";
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
    <main>
        <div class="row">
            <div class="col-12 col-md-8">
                <div class="card first-cards card-bg">
                    <div class="row row-cols-2">
                        <div class="col card-body">
                            <h5 class="card-title1 text-light fs-2">Welcome Back</h5>
                            <p class="card-text">Have a nice day at work.</p>
                        </div>
                        <div class="col">
                            <img src="assets/img/juicy-man-studying-financial-analytics.gif" class="img-fluid gif ms-0 ms-md-4 d-none d-sm-block" alt="Juicy man">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mt-3 mt-md-0">
                <div class="card first-cards">
                    <div class="card-header">Last changes made by</div>
                    <div class="card-body">
                        <p class="card-text"></p>
                    </div>
                </div>
            </div>
        </div>    

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 mt-4">
            <div class="col mb-3">
                <div class="card card-statis text-white">
                    <div class="card-body row row-cols-2 justify-content-around align-items-center mt-3 mb-3">
                        <div><i class="col bi bi-signpost-2 fs-3 text-dark text-center ms-5"></i></div>
                        <div class="col text-truncate">
                            <h5 class="card-title">Total Stations</h5>
                            <p class="card-text fs-5">Stations</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-3">
                <div class="card card-statis text-white">
                    <div class="card-body row row-cols-2 justify-content-around align-items-center mt-3 mb-3">
                        <div><i class="col bi bi-people fs-3 text-dark text-center me-1 ms-5"></i></div>
                        <div class="col text-truncate">
                            <h5 class="card-title">Total Customers</h5>
                            <p class="card-text fs-5">Customers</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-3">
                <div class="card card-statis text-white">
                    <div class="card-body row row-cols-2 justify-content-around align-items-center mt-3 mb-3">
                        <div><i class="col bi bi-train-front-fill fs-3 text-dark text-center ms-5"></i></div>
                        <div class="col text-truncate">
                            <h5 class="card-title">Total Trains</h5>
                            <p class="card-text fs-5">Trains</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-3">
                <div class="card card-statis text-white">
                    <div class="card-body row row-cols-2 justify-content-around align-items-center mt-3 mb-3">
                        <div><i class="col bi bi-aspect-ratio fs-3 text-dark text-center ms-5"></i></div>
                        <div class="col text-truncate">
                            <h5 class="card-title">Available E-tickets</h5>
                            <p class="card-text fs-5"> $</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-3">
                <div class="card card-statis text-white">
                    <div class="card-body row row-cols-2 justify-content-around align-items-center mt-3 mb-3">
                        <div><i class="col bi bi-aspect-ratio fs-3 text-dark text-center ms-5"></i></div>
                        <div class="col text-truncate">
                            <h5 class="card-title">Reserved E-tickets</h5>
                            <p class="card-text fs-5"> $</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card card-statis text-white">
                    <div class="card-body row row-cols-2 justify-content-around align-items-center mt-3 mb-3">
                        <div><i class="col bi bi-aspect-ratio fs-3 text-dark text-center ms-5"></i></div>
                        <div class="col text-truncate">
                            <h5 class="card-title">Remaining E-tickets</h5>
                            <p class="card-text fs-5"> $</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- ================== BEGIN core-js ================== -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
	<!-- ================== END core-js ================== -->
</body>
