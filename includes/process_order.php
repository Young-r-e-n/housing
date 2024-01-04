<?php
include "../includes/db_connection.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve form data
    $customerId = $_POST['customer'];
    $totalAmount = $_POST['totalAmount'];

    // Insert order data into the Orders table
    $insertOrderSql = "INSERT INTO Orders (Customer_Id, Total_Amount) VALUES ('$customerId', '$totalAmount')";

    if ($conn->query($insertOrderSql)) {
        $orderId = $conn->insert_id; // Get the ID of the inserted order

        // Insert delivery data into the Delivery table
        $insertDeliverySql = "INSERT INTO Delivery (Order_Id, Delivery_Status) VALUES ('$orderId', 'Pending')";

        if ($conn->query($insertDeliverySql)) {
            echo "Order placed successfully!";
        } else {
            echo "Error inserting delivery data: " . $conn->error;
        }
    } else {
        echo "Error inserting order data: " . $conn->error;
    }
} else {
    echo "Invalid request.";
}

// Close the database connection
$conn->close();
?>
