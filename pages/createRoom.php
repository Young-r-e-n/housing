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
     <h1>Create Room</h1>
      
      <!-- HTML form for creating a room -->
      <form method="POST" action="?">
        <div class="form-group">
          <label for="hostel_id">Hostel ID:</label>
          <input type="text" name="hostel_id" class="form-control" required>
        </div>

        <div class="form-group">
          <label for="price">Price:</label>
          <input type="text" name="price" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Create Room</button>
      </form>

      <?php
        // Include your operations.php file
        include "operations.php";

        // Check if the form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          // Get form data
          $hostel_id = $_POST["hostel_id"];
          $price = $_POST["price"];

          // Call the createRoom function from operations.php
          $result = createRoom($hostel_id, $price);

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
