<?php
// Include your database connection file
include "db_connection.php";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Generate a unique Admin_id
    $admin_id = uniqid();
    $user_id = uniqid();
    // Retrieve form data
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Hash the password for security
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // SQL query to insert data into the Admin table using prepared statement
    $sql = "INSERT INTO admins (admin_id, first_name, last_name) VALUES (?, ?, ?)";
$sql2 = "INSERT INTO users (user_id, username,password,user_type) VALUES(?,?,?,'admin')";
    // Prepare the statement
    $stmt = $conn->prepare($sql);
    $stmt2 = $conn->prepare($sql2);
    if ($stmt) {
        // Bind parameters and execute the statement
        $stmt->bind_param("sss", $admin_id, $first_name, $last_name);
        $stmt->execute();

if($stmt2){
    $stmt2->bind_param("sss",$user_id,$username,$hashed_password);
    $stmt2->execute();
}

        echo "Admin registration successful!";
        $stmt->close();
    } else {
        echo "Error: " . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>
