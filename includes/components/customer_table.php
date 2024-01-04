<!-- customer_table.php -->

<div class="card">
  <div class="card-header">
    <h3 class="card-title">Customer List</h3>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>ID</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Address</th>
          <th>Phone No</th>
          <th>Email</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        // Assume $conn is your database connection
        $sql = "SELECT * FROM Customer";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>{$row['Customer_Id']}</td>";
            echo "<td>{$row['First_Name']}</td>";
            echo "<td>{$row['Last_Name']}</td>";
            echo "<td>{$row['Address']}</td>";
            echo "<td>{$row['Phone_No']}</td>";
            echo "<td>{$row['Email']}</td>";
            echo "<td>
                    <button class='btn btn-sm btn-info'>Edit</button>
                    <button class='btn btn-sm btn-danger'>Delete</button>
                  </td>";
            echo "</tr>";
          }
        } else {
          echo "<tr><td colspan='7'>No customers found</td></tr>";
        }
        ?>
      </tbody>
    </table>
  </div>
  <!-- /.card-body -->
</div>
<!-- /.card -->
