<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">YouTrain</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li> -->
      </ul>
      <?php if (isset($_SESSION['id'])) { ?>
        <div class="nav-item dropdown">
          <a class="nav-link text-white fw-bold ms-2 mb-0 mt-0 pb-0 pt-0" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bi bi-person-circle icon-nav fs-4 fw-bolder"> <span class="fs-6 fw-bold"><?= $_SESSION['first_name'] . " " . $_SESSION['last_name']  ?></span></i>
            <i class="bi bi-caret-down icon-nav fs-5 fw-bolder"></i>
          </a>
          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-light text-muted">
            <?php if ($_SESSION['admin'] == 1) { ?>
              <li><a class="dropdown-item" href="dashboard.php">Dashboard</a></li>
            <?php } ?>
            <li><a class="dropdown-item" href="history.php">My tickets</a></li>
            <li><a class="dropdown-item" href="edituser.php">Settings</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <form action="logout.php" method="POST">
              <li><button class="dropdown-item" type="submit" name="logout">Log Out</button></li>
            </form>
          </ul>
        </div>
      <?php } else { ?>
        <a href="login.php" class="btn btn-outline-success" type="submit">Login</a>
        <a href="signup.php" class="btn btn-info ms-2" type="submit">Sign up</a>
      <?php } ?>
    </div>
  </div>
</nav>