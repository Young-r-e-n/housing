<!-- document_list.php -->
<div class="card card-info">
    <div class="card-header">
        <h3 class="card-title">Document List</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <?php
        $sql = "SELECT Document_Id, Customer_Id, Document_Type, Document_Details, Document_Status FROM Documents";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo '<ul class="list-group">';
            while ($row = $result->fetch_assoc()) {
                echo '<li class="list-group-item">';
                echo "<strong>Document ID:</strong> {$row['Document_Id']} | ";
                echo "<strong>Customer ID:</strong> {$row['Customer_Id']} | ";
                echo "<strong>Document Type:</strong> {$row['Document_Type']} | ";
                echo "<strong>Document Details:</strong> {$row['Document_Details']} | ";
                echo "<strong>Document Status:</strong> {$row['Document_Status']}";
                echo '</li>';
            }
            echo '</ul>';
        } else {
            echo '<p class="text-muted">No documents found.</p>';
        }
        ?>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->
