<!DOCTYPE html>
<html lang="en">
<?php
$title = "All Users | Trainpal";
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
      <div class="mt-3 mb-4 fs-2 ms-2">
         <span class="me-2"><i class="bi bi-people-fill"></i></span>
         <span>All Users</span>
      </div>
      <?php
      require 'views/allUsers.php';
      ?>
   </main>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

   <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
   <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
   <script>
      $(document).ready(function() {
         $("#data-table").DataTable({
            scrollX: true,
            info: false,
            responsive: true,
         });
      });
   </script>
   <?php require_once 'include/alert.php'; ?>
   <script src="assets/js/main.js"></script>
</body>

</html>