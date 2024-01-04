<?php
include "db_connection.php";
include "notification_functions.php";

// Function to sanitize user input
function sanitizeInput($input)
{
    return htmlspecialchars(strip_tags(trim($input)));
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Validate and sanitize form data
    $customerId = isset($_POST['customer']) ? sanitizeInput($_POST['customer']) : null;
    $appointmentDate = isset($_POST['appointmentDate']) ? sanitizeInput($_POST['appointmentDate']) : null;
    $appointmentType = isset($_POST['appointmentType']) ? sanitizeInput($_POST['appointmentType']) : null;

    // Validate the presence of required fields
    if (!$customerId || !$appointmentDate || !$appointmentType) {
        echo "All fields are required.";
        exit();
    }

    // Validate date format
    if (!preg_match("/^\d{4}-\d{2}-\d{2}$/", $appointmentDate)) {
        echo "Invalid date format. Please use YYYY-MM-DD.";
        exit();
    }

    // Insert appointment data into the Appointments table with prepared statements to prevent SQL injection
    $insertSql = "INSERT INTO Appointments (Customer_Id, Appointment_Date, Appointment_Type) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($insertSql);

    if ($stmt) {
        $stmt->bind_param("iss", $customerId, $appointmentDate, $appointmentType);
        if ($stmt->execute()) {
            setNotification("Appointment set successfully!", 'success');
        } else {
            setNotification("Error: " . $stmt->error, 'error');
        }
        $stmt->close();
    } else {
        setNotification("Error: " . $stmt->error, 'error');
    }
} else {
    setNotification("invalid request", 'error');
}

// Close the database connection
$conn->close();
?>
