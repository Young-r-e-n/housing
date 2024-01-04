<!-- order_form.php -->
<div class="card card-info">
    <div class="card-header">
        <h3 class="card-title">Place Order</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <form action="../includes/process_order.php" method="post">
            <div class="form-group">
                <label for="customer">Select Customer:</label>
                <select class="form-control" name="customer" id="customer" required>
                    <!-- Populate this dropdown with customer data from the database -->
                    <?php
                    $sql = "SELECT Customer_Id, First_Name, Last_Name FROM Customer";
                    $result = $conn->query($sql);

                    while ($row = $result->fetch_assoc()) {
                        echo "<option value='{$row["Customer_Id"]}'>{$row["First_Name"]} {$row["Last_Name"]}</option>";
                    }
                    ?>
                </select>
            </div>

            <div class="form-group">
                <label for="totalAmount">Total Amount:</label>
                <input type="text" class="form-control" name="totalAmount" id="totalAmount" required>
            </div>

            <button type="submit" class="btn btn-primary">Place Order</button>
        </form>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->
