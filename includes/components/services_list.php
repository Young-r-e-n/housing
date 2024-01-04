<!-- services_list.php -->
<div class="card">
    <div class="card-header">
        <h2>Services List</h2>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <?php
        $sql = "SELECT * FROM Services";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo '<ul class="list-group">';
            while ($row = $result->fetch_assoc()) {
                echo '<li class="list-group-item">';
                echo "<strong>Service ID:</strong> {$row['Service_Id']} | ";
                echo "<strong>Service Description:</strong> {$row['Service_Description']} | ";
                echo "<strong>Service Details:</strong> {$row['Service_Details']} | ";
                echo "<strong>Service Price:</strong> {$row['Service_Price']}";
                echo '</li>';
            }
            echo '</ul>';
        } else {
            echo '<p>No services found.</p>';
        }
        ?>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->
