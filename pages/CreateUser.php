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
   <h1>Create User</h1>
    
    <!-- HTML form for creating a user -->
    <form method="POST" action="?">
      <div class="form-group">
        <label for="user_id">User ID:</label>
        <input type="text" name="user_id" class="form-control" required>
      </div>

      <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" name="username" class="form-control" required>
      </div>

      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" name="password" class="form-control" required>
      </div>

      <div class="form-group">
        <label for="user_type">User Type:</label>
        <input type="text" name="user_type" class="form-control" required>
      </div>

      <button type="submit" class="btn btn-primary">Create User</button>
    </form>

    <?php
      // Include your operations.php file
      include "operations.php";

      // Check if the form is submitted
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get form data
        $user_id = $_POST["user_id"];
        $username = $_POST["username"];
        $password = $_POST["password"];
        $user_type = $_POST["user_type"];

        // Call the createUser function from operations.php
        $result = createUser($user_id, $username, $password, $user_type);

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
