<?php
    $title = "E-tickets | Trainpal";
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
                <span class="me-2"><i class="bi bi-ticket-detailed-fill"></i></span>
                <span>E-tickets</span>
            </div>
            <form action="./controllers/ticketController.php" method="POST">
                <a href="" name="order" class="btn btn-dark me-4 mt-2"><i class="bi bi-plus-lg me-2"></i> Order By Last Added</a>
            </form>
        </div>
        <?php
        require 'views/allTickets.php';
        ?>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
</body>