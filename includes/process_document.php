<?php
include "../includes/db_connection.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve form data
    $customerId = $_POST['customer'];
    $documentType = $_POST['documentType'];
    $documentDetails = $_POST['documentDetails'];

    // Insert document data into the Documents table
    $insertDocumentSql = "INSERT INTO Documents (Customer_Id, Document_Type, Document_Details, Document_Status) VALUES ('$customerId', '$documentType', '$documentDetails', 'Pending')";

    if ($conn->query($insertDocumentSql)) {
        echo "Document created successfully!";
    } else {
        echo "Error inserting document data: " . $conn->error;
    }
} else {
    echo "Invalid request.";
}

// Close the database connection
$conn->close();
?>
