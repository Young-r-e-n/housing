<!-- appointment_list.php -->
<div class="card card-info">
    <div class="card-header">
        <h3 class="card-title">Appointments List</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <ul class="list-group">
            <?php
            // Fetch appointment data from the database and populate the list
            // Replace this with your actual database query
            $sql = "SELECT * FROM Appointments";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<li class="list-group-item">';
                    echo "Appointment ID: {$row['Appointment_Id']} | ";
                    echo "Customer ID: {$row['Customer_Id']} | ";
                    echo "Appointment Date: {$row['Appointment_Date']} | ";
                    echo "Appointment Type: {$row['Appointment_Type']}";
                    echo '</li>';
                }
            } else {
                echo '<li class="list-group-item">No appointments found.</li>';
            }
            ?>
        </ul>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->
