<!-- feedback_form.php -->
<div class="card">
  <div class="card-header">
    <h5 class="card-title">Submit Feedback</h5>
  </div>
  <div class="card-body">
    <form action="process_feedback.php" method="post">

      <div class="mb-3">
        <label for="customer" class="form-label">Select Customer:</label>
        <select name="customer" id="customer" class="form-select" required>
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

      <div class="mb-3">
        <label for="feedbackText" class="form-label">Feedback Text:</label>
        <textarea name="feedbackText" id="feedbackText" class="form-control" required></textarea>
      </div>

      <button type="submit" class="btn btn-primary">Submit Feedback</button>
    </form>
  </div>
</div>
