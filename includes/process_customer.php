<!-- process_customer.php -->

<?php
include "db_connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $address = $_POST["address"];
    $phone_no = $_POST["phone_no"];
    $email = $_POST["email"];

    $sql = "INSERT INTO Customer (First_Name, Last_Name, Address, Phone_No, Email) VALUES ('$first_name', '$last_name', '$address', '$phone_no', '$email')";

    if ($conn->query($sql) === TRUE) {
        echo "Customer added successfully!";
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
}
?>
