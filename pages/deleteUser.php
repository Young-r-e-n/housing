<?php
// Include your database connection file
include 'operations.php';

if(isset($_GET['id'])) {
 $id = $_GET['id'];

 // Prepare and execute the SQL statement
 $sql = "DELETE FROM users WHERE user_id = ?";
 $stmt = $conn->prepare($sql);
 $stmt->bind_param("i", $id);
 $stmt->execute();

 // Redirect back to the users page
 header("Location: manageUsers.php");
}
?>
