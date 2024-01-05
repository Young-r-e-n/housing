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
 <?php include "operations.php"; ?>
 <?php include "../includes/components/navbar.php"; ?>
 <?php include "../includes/components/sidebar.php"; ?>

 <div class="content-wrapper">
 <div class="content">
   <div class="container-fluid">
    <thead>
   <th>Hostel ID</th>
           <th>Price</th>
           <th>Actions</th>
         </tr>
       </thead>
       <tbody>
         <?php
           // Fetch and display rooms
           $rooms = getRooms();
           foreach ($rooms as $room) {
            echo "<tr>";
            echo "<td>" . $room['room_id'] . "</td>";
            echo "<td>" . $room['hostel_id'] . "</td>";
            echo "<td>" . $room['price'] . "</td>";
            echo "<td>";
            echo "<a class='btn btn-info' href='updateRoom.php?id=" . $room['room_id'] . "'>Edit</a>&nbsp;";
            echo "<a class='btn btn-danger' href='deleteRoom.php?id=" . $room['room_id'] . "'>Delete</a>";
            echo "</td>";
            echo "</tr>";
           }
         ?>
       </tbody>
     </table>

     <?php
       // Initialize DataTables
       echo "<script>$(document).ready(function() { $('#roomsTable').DataTable(); });</script>";
     ?>
   </div>
 </div>
 </div>
 </div>
 </div>

 <?php include "../includes/components/footer.php"; ?>
 </div>
</body>
</html>
