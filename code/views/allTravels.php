<table id="data-table" class="display dataTable" style="width: 100%" aria-describedby="example_info">
    <thead>
        <tr>
            <th>Name</th>
            <th>Time</th>
            <th>Price</th>
            <th>Start Station</th>
            <th>End Station</th>
            <th>Date Start</th>
            <th>Train</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
            <tr class="odd">
                <td class="sorting_1"></td>
                <td class=""></td>
                <td class=""></td>
                <td class=""></td>
                <td class=""></td>
                <td class=""></td>
                <td class=""></td>
                <td>
                    <div class="d-flex fs-3">
                        <a href="#modal-city" data-bs-toggle="modal" class="btn btn-warning me-3" onclick="editTrain()"><i class="bi bi-pencil-square users-icon"></i></a>
                        <a href="controllers/travelController.php?id=" class="btn btn-danger text-dark"><i class="bi bi-trash3-fill users-icon"></i></a>
                    </div>
                </td>
            </tr>
    </tbody>
</table>
<script src="assets/js/main.js"></script>