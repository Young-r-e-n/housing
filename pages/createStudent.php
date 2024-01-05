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
  <h1>Create Student</h1>
   
   <!-- HTML form for creating a student -->
   <form method="POST" action="?">
     <div class="form-group">
       <label for="user_id">User ID:</label>
       <input type="text" name="user_id" class="form-control" required>
     </div>

     <div class="form-group">
       <label for="admission_number">Admission Number:</label>
       <input type="text" name="admission_number" class="form-control" required>
     </div>

     <div class="form-group">
       <label for="first_name">First Name:</label>
       <input type="text" name="first_name" class="form-control" required>
     </div>

     <div class="form-group">
       <label for="last_name">Last Name:</label>
       <input type="text" name="last_name" class="form-control" required>
     </div>

     <div class="form-group">
       <label for="telephone_number">Telephone Number:</label>
       <input type="text" name="telephone_number" class="form-control" required>
     </div>

     <button type="submit" class="btn btn-primary">Create Student</button>
   </form>

   <?php
     // Include your operations.php file
     include "operations.php";

     // Check if the form is submitted
     if ($_SERVER["REQUEST_METHOD"] == "POST") {
       // Get form data
       $user_id = $_POST["user_id"];
       $admission_number = $_POST["admission_number"];
       $first_name = $_POST["first_name"];
       $last_name = $_POST["last_name"];
       $telephone_number = $_POST["telephone_number"];

       // Call the createStudent function from operations.php
       $result = createStudent($user_id, $admission_number, $first_name, $last_name, $telephone_number);

       // Display the result
       echo "<p>{$result}</p>";
     }
   ?>
 </div>
 </div>
 </div>

 <?php include "../includes/components/footer.php"; ?>
 </div>
</body>
</html>
