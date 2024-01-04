<?php
session_start();
if (isset($_SESSION['notification'])) {
    $message = $_SESSION['notification']['message'];
    $type = $_SESSION['notification']['type'];
    echo "<script>alert('$message');</script>";
    unset($_SESSION['notification']); // Clear the notification after displaying it
}
session_write_close();
?>
<!-- appointment_form.php -->

<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Set Appointment</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <form action="../includes/process_appointment.php" method="post">
            <div class="form-group">
                <label for="customer">Select Customer:</label>
                <select name="customer" id="customer" class="form-control">
                    <!-- Populate this dropdown with customer data from the database -->
                    <?php
                    // Fetch customer data from the database and populate the dropdown
                    // Replace this with your actual database query
                    $sql = "SELECT Customer_Id, First_Name, Last_Name FROM Customer";
                    $result = $conn->query($sql);

                    while ($row = $result->fetch_assoc()) {
                        echo "<option value='{$row["Customer_Id"]}'>{$row["First_Name"]} {$row["Last_Name"]}</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="appointmentType">Appointment Type:</label>
                <input type="text" name="appointmentType" id="appointmentType" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="appointmentDate">Appointment Date:</label>
                <input type="date" name="appointmentDate" id="appointmentDate" class="form-control" required>
            </div>
            <div class="form-group">
                <input type="submit" value="Set Appointment" class="btn btn-primary">
            </div>
        </form>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->
