<?php
    include_once './models/admin.php';
    $all_admins = new Admin();
    $admins = $all_admins->allAdmins();
?>
<div class="card-body bg-light">
    <?php
        foreach ($admins as $admin) {
    ?>
    <p class="card-text fw-bold"><i class="bi bi-person-fill-check me-3 fs-5"></i> <?= $admin['first_name'] . " " . $admin['last_name']  ?></p>
    <?php
        }   
    ?>
</div>