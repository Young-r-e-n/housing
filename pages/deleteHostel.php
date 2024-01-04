<?php
// Include your database connection file
include 'operations.php';

if(isset($_GET['id'])) {
 $id = $_GET['id'];

 // Prepare and execute the SQL statement
 $sql = "DELETE FROM hostels WHERE hostel_id = ?";
 $stmt = $conn->prepare($sql);
 $stmt->bind_param("i", $id);
 $stmt->execute();

 // Redirect back to the hostels page
 header("Location: hostels.php");
}
?>
