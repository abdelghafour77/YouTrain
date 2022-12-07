<?php
    $title = "Customers| Trainpal";
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
      <h2 class="mb-4">Customers</h2>
      <table id="bla" class="display dataTable" style="width: 100%" aria-describedby="example_info">
         <thead>
            <tr>
               <th class="sorting sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 131.163px">Full Name</th>
               <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 218.163px">Email</th>
               <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 96.9625px">Phone Number</th>
               <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 39.0125px">Age</th>
               <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 85.55px">Admin</th>
               <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 73.3px">Actions</th>
            </tr>
         </thead>
         <tbody>
            <tr class="odd">
               <td class="sorting_1">Airi Satou</td>
               <td>Accountant</td>
               <td>Tokyo</td>
               <td>33</td>
               <td>2008-11-28</td>
               <td>$162,700</td>
            </tr>
            <tr class="even">
               <td class="sorting_1">Angelica Ramos</td>
               <td>Chief Executive Officer (CEO)</td>
               <td>London</td>
               <td>47</td>
               <td>2009-10-09</td>
               <td>$1,200,000</td>
            </tr>
            <tr class="odd">
               <td class="sorting_1">Ashton Cox</td>
               <td>Junior Technical Author</td>
               <td>San Francisco</td>
               <td>66</td>
               <td>2009-01-12</td>
               <td>$86,000</td>
            </tr>
            <tr class="even">
               <td class="sorting_1">Bradley Greer</td>
               <td>Software Engineer</td>
               <td>London</td>
               <td>41</td>
               <td>2012-10-13</td>
               <td>$132,000</td>
            </tr>
            <tr class="odd">
               <td class="sorting_1">Brenden Wagner</td>
               <td>Software Engineer</td>
               <td>San Francisco</td>
               <td>28</td>
               <td>2011-06-07</td>
               <td>$206,850</td>
            </tr>
            <tr class="even">
               <td class="sorting_1">Brielle Williamson</td>
               <td>Integration Specialist</td>
               <td>New York</td>
               <td>61</td>
               <td>2012-12-02</td>
               <td>$372,000</td>
            </tr>
            <tr class="odd">
               <td class="sorting_1">Bruno Nash</td>
               <td>Software Engineer</td>
               <td>London</td>
               <td>38</td>
               <td>2011-05-03</td>
               <td>$163,500</td>
            </tr>
            <tr class="even">
               <td class="sorting_1">Caesar Vance</td>
               <td>Pre-Sales Support</td>
               <td>New York</td>
               <td>21</td>
               <td>2011-12-12</td>
               <td>$106,450</td>
            </tr>
            <tr class="odd">
               <td class="sorting_1">Cara Stevens</td>
               <td>Sales Assistant</td>
               <td>New York</td>
               <td>46</td>
               <td>2011-12-06</td>
               <td>$145,600</td>
            </tr>
            <tr class="even">
               <td class="sorting_1">Cedric Kelly</td>
               <td>Senior Javascript Developer</td>
               <td>Edinburgh</td>
               <td>22</td>
               <td>2012-03-29</td>
               <td>$433,060</td>
            </tr>
         </tbody>
      </table>
   </main>
   <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
   <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
   <script>
      $(document).ready(function () {
         $("#bla").DataTable({
            info: false,
            responsive: true,
         });
      });
   </script>
</body>
