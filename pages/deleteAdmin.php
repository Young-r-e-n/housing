<?php
// Include your database connection file
include 'operations.php';

if(isset($_GET['id'])) {
  $id = $_GET['id'];

  // Fetch the admin details
  $sql = "SELECT * FROM admins WHERE admin_id = ?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("i", $id);
  $stmt->execute();
  $result = $stmt->get_result();
  $admin = $result->fetch_assoc();
}
?>

<!-- Your form for updating admin details goes here -->
