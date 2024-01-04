<?php
// Include your database connection file
include 'operations.php';

if(isset($_GET['id'])) {
 $id = $_GET['id'];

 // Prepare and execute the SQL statement
 $sql = "DELETE FROM students WHERE student_id = ?";
 $stmt = $conn->prepare($sql);
 $stmt->bind_param("i", $id);
 $stmt->execute();

 // Redirect back to the students page
 header("Location: manageStudents.php");
}
?>
