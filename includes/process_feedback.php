<?php
include "../includes/db_connection.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve form data
    $customerId = $_POST['customer'];
    $feedbackText = $_POST['feedbackText'];

    // Insert feedback data into the Feedback table
    $insertFeedbackSql = "INSERT INTO Feedback (Customer_Id, Feedback_Text) VALUES ('$customerId', '$feedbackText')";

    if ($conn->query($insertFeedbackSql)) {
        echo "Feedback submitted successfully!";
    } else {
        echo "Error inserting feedback data: " . $conn->error;
    }
} else {
    echo "Invalid request.";
}

// Close the database connection
$conn->close();
?>
