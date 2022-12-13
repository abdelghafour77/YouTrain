<?php
    require_once 'include/dash-admin.php';
?>
<nav class="navbar navbar-expand-lg bg-light fixed-top">
    <div class="container-fluid">
        <!-- offcanvas trigger -->
        <button class="navbar-toggler btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
            <span class="navbar-toggler-icon" data-bs-target="#offcanvasExample"></span>
        </button>
        <!-- offcanvas trigger -->
        <a class="navbar-brand d-block d-lg-none" href="#">
            <img src="assets/img/logo.webp" class="img-fluid ps-3" alt="Bootstrap" width="180" height="40">
        </a>
        <button class="navbar-toggler btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse mt-0" id="navbarSupportedContent">
            <ul class="navbar-nav d-flex ms-auto mt-3">
                <li class="nav-item">
                    <!-- <form class="d-flex ms-auto" role="search">
                            <div class="input-group search-navbar me-3 pe-5">
                                <input type="text" class="form-control rounded-pill" placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
                                <button class="btn btn-outline-primary text-white rounded-pill ms-1 search-btn" type="button" id="button-addon2">
                                    <i class="bi bi-search text-dark"></i>
                                </button>
                            </div>
                        </form> -->
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link text-white fw-bold ms-2 mb-0 mt-0 pb-0 pt-0" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="d-flex flex-row mt-2 mt-lg-0">
                            <i class="bi bi-envelope icon-nav fs-4 fw-bolder me-3 me-lg-0"></i>
                            <p class="d-block d-lg-none text-icon mt-2">Messages</p>
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-light text-muted">
                        <li><a class="dropdown-item" href="#">Test</a></li>
                        <li><a class="dropdown-item" href="#">Test</a></li>
                        <li><a class="dropdown-item" href="#">Test</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link text-white fw-bold ms-2 mb-0 mt-0 pb-0 pt-0" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="d-flex flex-row">
                            <i class="bi bi-bell icon-nav fs-4 fw-bolder me-3 me-lg-0"></i>
                            <p class="d-block d-lg-none text-icon mt-2">Notifications</p>
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-light text-muted">
                        <li><a class="dropdown-item" href="#">Test</a></li>
                        <li><a class="dropdown-item" href="#">Test</a></li>
                        <li><a class="dropdown-item" href="#">Test</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link text-white fw-bold ms-2 mb-0 mt-0 pb-0 pt-0" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-person-circle icon-nav fs-4 fw-bolder"> <span class="fs-6 fw-bold"><?= $_SESSION['first_name'] . " " . $_SESSION['last_name']  ?></span></i>
                        <i class="bi bi-caret-down icon-nav fs-5 fw-bolder"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-light text-muted">
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li><a class="dropdown-item" href="#">My tickets</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <form action="logout.php" method="POST">
                            <li><button class="dropdown-item" type="submit" name="logout">Log Out</button></li>
                        </form>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>