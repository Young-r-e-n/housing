<?php
// Include your database connection file
include 'dbconnect.php';

if(isset($_GET['id'])) {
 $id = $_GET['id'];

 // Prepare and execute the SQL statement
 $sql = "DELETE FROM rooms WHERE room_id = ?";
 $stmt = $conn->prepare($sql);
 $stmt->bind_param("i", $id);
 $stmt->execute();

 // Redirect back to the rooms page
 header("Location: manageRooms.php");
}
?>
