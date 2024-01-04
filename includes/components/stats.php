<?php 

include '../includes/db_connection.php';
function fetchOrderCount($conn) {
    $sql = "SELECT COUNT(*) FROM Orders";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            return $row["COUNT(*)"];
        }
    } else {
        return 0;
    }
 }
 
 function fetchUserCount($conn) {
    $sql = "SELECT COUNT(*) FROM Customer";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            return $row["COUNT(*)"];
        }
    } else {
        return 0;
    }
  }
  
  function fetchAppointmentCount($conn) {
    $sql = "SELECT COUNT(*) FROM Appointments";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            return $row["COUNT(*)"];
        }
    } else {
        return 0;
    }
   }
   
   function fetchDocumentCount($conn) {
    $sql = "SELECT COUNT(*) FROM Documents";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            return $row["COUNT(*)"];
        }
    } else {
        return 0;
    }
   }
   
?>
<!-- Small boxes (Stat box) -->
<div class="row">
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
            <div class="inner">
                <h3><?php echo fetchOrderCount($conn); ?></h3>
                <p>Orders</p>
            </div>
            <div class="icon">
                <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>

    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
            <div class="inner">
                <h3><?php echo fetchUserCount($conn); ?></h3>
                <p>Customers</p>
            </div>
            <div class="icon">
                <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>

    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-warning">
            <div class="inner">
            <h3><?php echo fetchAppointmentCount($conn); ?></h3>
                <p>Appointments</p>
            </div>
            <div class="icon">
                <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>

    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-danger">
            <div class="inner">
            <h3><?php echo fetchDocumentCount($conn); ?></h3>
                <p>Documents</p>
            </div>
            <div class="icon">
                <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
</div>
<!-- /.row -->
