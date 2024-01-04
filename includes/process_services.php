<?php
include "../includes/db_connection.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve form data
    $serviceDescription = $_POST['serviceDescription'];
    $serviceDetails = $_POST['serviceDetails'];
    $servicePrice = $_POST['servicePrice'];

    // Insert service data into the Services table
    $insertServiceSql = "INSERT INTO Services (Service_Description, Service_Details, Service_Price) VALUES ('$serviceDescription', '$serviceDetails', '$servicePrice')";

    if ($conn->query($insertServiceSql)) {
        echo "Service added successfully!";
    } else {
        echo "Error inserting service data: " . $conn->error;
    }
} else {
    echo "Invalid request.";
}

// Close the database connection
$conn->close();
?>
