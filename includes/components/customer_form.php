<!-- customer_form.php -->

<div class="card">
  <div class="card-header">
    <h3 class="card-title">Customer Form</h3>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <!-- Your HTML form for adding or editing customer data -->
    <form action="../includes/process_customer.php" method="post">
      <div class="form-group">
        <label for="first_name">First Name:</label>
        <input type="text" name="first_name" class="form-control" required>
      </div>
      <div class="form-group">
        <label for="last_name">Last Name:</label>
        <input type="text" name="last_name" class="form-control" required>
      </div>
      <div class="form-group">
        <label for="address">Address:</label>
        <input type="text" name="address" class="form-control" required>
      </div>
      <div class="form-group">
        <label for="phone_no">Phone No:</label>
        <input type="text" name="phone_no" class="form-control" required>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" name="email" class="form-control" required>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary">Save Customer</button>
      </div>
    </form>
  </div>
  <!-- /.card-body -->
</div>
<!-- /.card -->
