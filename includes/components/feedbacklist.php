<!-- feedback_list.php -->
<div class="card">
  <div class="card-header">
    <h5 class="card-title">Feedback List</h5>
  </div>
  <div class="card-body">
    <?php
    $sql = "SELECT Feedback_Id, Customer_Id, Feedback_Date, Feedback_Text FROM Feedback";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo '<ul class="list-group">';
        while ($row = $result->fetch_assoc()) {
            echo '<li class="list-group-item">';
            echo "Feedback ID: {$row['Feedback_Id']} | ";
            echo "Customer ID: {$row['Customer_Id']} | ";
            echo "Feedback Date: {$row['Feedback_Date']} | ";
            echo "Feedback Text: {$row['Feedback_Text']}";
            echo '</li>';
        }
        echo '</ul>';
    } else {
        echo '<p>No feedback found.</p>';
    }
    ?>
  </div>
</div>
