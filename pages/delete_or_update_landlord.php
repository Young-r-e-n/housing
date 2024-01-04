<!DOCTYPE html>
<html lang="en">
<head>
 <!-- Include necessary styles and scripts here -->
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>IMS</title>

 <!-- Google Font: Source Sans Pro -->
 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
 <!-- Font Awesome Icons -->
 <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
 <!-- Theme style -->
 <link rel="stylesheet" href="../dist/css/adminlte.min.css">

 <!-- jQuery library -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

 <!-- DataTables CSS and JS library -->
 <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css"/>
 <script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

</head>
<body class="hold-transition sidebar-mini">
 <div class="wrapper">
   <?php include "../includes/components/navbar.php"; ?>
   <?php include "../includes/components/sidebar.php"; ?>
  <?php include "operations.php";?>
   <div class="content-wrapper">
     <div class="content">
       <div class="container-fluid">
         <h1>Update or Delete Landlord</h1>

         <!-- Table for displaying landlords -->
         <table id="landlordsTable" class="display">
           <thead>
             <tr>
               <th>Landlord ID</th>
               <th>User ID</th>
               <th>First Name</th>
               <th>Last Name</th>
               <th>National ID</th>
               <th>Telephone Number</th>
               <th>Actions</th>
             </tr>
           </thead>
           <tbody>
             <?php
               // Fetch and display landlords
               $landlords = getLandlords();
               foreach ($landlords as $landlord) {
                echo "<tr>";
                echo "<td>" . $landlord['landlord_id'] . "</td>";
                echo "<td>" . $landlord['user_id'] . "</td>";
                echo "<td>" . $landlord['first_name'] . "</td>";
                echo "<td>" . $landlord['last_name'] . "</td>";
                echo "<td>" . $landlord['national_id'] . "</td>";
                echo "<td>" . $landlord['telephone_number'] . "</td>";
                echo "<td>";
                echo "<a class='btn btn-info' href='updateLandlord.php?id=" . $landlord['landlord_id'] . "'>Edit</a>&nbsp;";
                echo "<a class='btn btn-danger' href='../includes/deleteLandlord.php?id=" . $landlord['landlord_id'] . "'>Delete</a>";
                echo "</td>";
                echo "</tr>";
               }
             ?>
           </tbody>
         </table>

         <?php
           // Initialize DataTables
           echo "<script>$(document).ready(function() { $('#landlordsTable').DataTable(); });</script>";
         ?>
       </div>
     </div>
   </div>

   <?php include "../includes/components/footer.php"; ?>
 </div>
</body>
</html>
