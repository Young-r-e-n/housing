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

 <div class="content-wrapper">
 <div class="content">
  <div class="container-fluid">
    <h1>Manage Students</h1>

     <!-- Table for displaying students -->
     <table id="studentsTable" class="display">
       <thead>
         <tr>
           <th>Student ID</th>
           <th>User ID</th>
           <th>Admission Number</th>
           <th>First Name</th>
           <th>Last Name</th>
           <th>Telephone Number</th>
           <th>Actions</th>
         </tr>
       </thead>
       <tbody>
         <?php
           // Fetch and display students
           $students = getStudents();
           foreach ($students as $student) {
            echo "<tr>";
            echo "<td>" . $student['student_id'] . "</td>";
            echo "<td>" . $student['user_id'] . "</td>";
            echo "<td>" . $student['admission_number'] . "</td>";
            echo "<td>" . $student['first_name'] . "</td>";
            echo "<td>" . $student['last_name'] . "</td>";
            echo "<td>" . $student['telephone_number'] . "</td>";
            echo "<td>";
            echo "<a class='btn btn-info' href='updateStudent.php?id=" . $student['student_id'] . "'>Edit</a>&nbsp;";
            echo "<a class='btn btn-danger' href='deleteStudent.php?id=" . $student['student_id'] . "'>Delete</a>";
            echo "</td>";
            echo "</tr>";
           }
         ?>
       </tbody>
     </table>

     <?php
       // Initialize DataTables
       echo "<script>$(document).ready(function() { $('#studentsTable').DataTable(); });</script>";
     ?>
   </div>
 </div>
 </div>

 <?php include "../includes/components/footer.php"; ?>
 </div>
</body>
</html>
