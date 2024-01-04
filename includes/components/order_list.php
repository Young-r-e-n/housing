<!-- order_list.php -->
<div class="card card-info">
    <div class="card-header">
        <h3 class="card-title">Order List</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <?php
        $sql = "SELECT Orders.Order_Id, Orders.Customer_Id, Orders.Order_Date, Orders.Total_Amount, Delivery.Delivery_Date, Delivery.Delivery_Status
                FROM Orders
                LEFT JOIN Delivery ON Orders.Order_Id = Delivery.Order_Id";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo '<ul class="list-group">';
            while ($row = $result->fetch_assoc()) {
                echo '<li class="list-group-item">';
                echo "<strong>Order ID:</strong> {$row['Order_Id']} | ";
                echo "<strong>Customer ID:</strong> {$row['Customer_Id']} | ";
                echo "<strong>Order Date:</strong> {$row['Order_Date']} | ";
                echo "<strong>Total Amount:</strong> {$row['Total_Amount']} | ";

                if ($row['Delivery_Date'] !== null) {
                    echo "<strong>Delivery Date:</strong> {$row['Delivery_Date']} | ";
                    echo "<strong>Delivery Status:</strong> {$row['Delivery_Status']}";
                } else {
                    echo "<strong>Delivery:</strong> Not Delivered Yet";
                }

                echo '</li>';
            }
            echo '</ul>';
        } else {
            echo '<p class="text-muted">No orders found.</p>';
        }
        ?>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->
