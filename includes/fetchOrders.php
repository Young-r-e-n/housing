<?php
include 'db_connection.php';
// SQL query to fetch data from the Orders table
$sql = "SELECT Order_Id, Customer_Id, Order_Date, Total_Amount FROM Orders";
$result = $conn->query($sql);

// Initialize an array to hold the data
$data = array();

// Loop through the result set and add each row to the data array
while($row = $result->fetch_assoc()) {
   $data[] = $row;
}

// Close the connection
$conn->close();

// Output the data in JSON format
echo json_encode($data);
?>
