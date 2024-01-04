<?php
// Include your database connection file
include 'db_connection.php';

if(isset($_GET['id'])) {
   $id = $_GET['id'];

   // Prepare and execute the SQL statement
   $sql = "DELETE FROM landlords WHERE landlord_id = ?";
   $stmt = $conn->prepare($sql);
   $stmt->bind_param("i", $id);
   $stmt->execute();

   // Redirect back to the landlords page
   header("Location: ../pages/delete_or_update_landlord.");
}
?>
