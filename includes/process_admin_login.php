<?php
// Include your database connection file
include("db_connection.php");

// Start the session
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $username = $_POST["username"];
    $password = $_POST["password"];

    // SQL query to check login credentials
    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
       echo $row = $result->fetch_assoc();
        if (password_verify($password, $row["password"])) {
            // Set user session
            $_SESSION['username'] = $username;

            // Redirect to the dashboard
            header("Location: ../pages/manageUsers.php");
            exit(); // Ensure that no further code is executed after the header redirect
        } else {
            echo "Invalid password";
        }
    } else {
        echo "Username not found";
    }

    // Close the database connection
    $conn->close();
}
?>
