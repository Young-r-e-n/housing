<!-- services_form.php -->
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Add Service</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <form action="process_services.php" method="post">
            <div class="form-group">
                <label for="serviceDescription">Service Description:</label>
                <input type="text" class="form-control" name="serviceDescription" id="serviceDescription" required>
            </div>

            <div class="form-group">
                <label for="serviceDetails">Service Details:</label>
                <textarea class="form-control" name="serviceDetails" id="serviceDetails" required></textarea>
            </div>

            <div class="form-group">
                <label for="servicePrice">Service Price:</label>
                <input type="text" class="form-control" name="servicePrice" id="servicePrice" required>
            </div>

            <button type="submit" class="btn btn-primary">Add Service</button>
        </form>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->
