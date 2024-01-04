<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="IMS Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">IMS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <?php
            // Retrieve user information from the session
            session_start();
            if (isset($_SESSION['username'])) {
                $username = $_SESSION['username'];
                echo "<a href='userprofile' class='d-block'>$username</a>";
            } else {
                // Redirect to the login page if the user is not logged in
                header("Location: ../index.php");
                exit();
            }
          ?>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
            <a href="dashboard.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
               Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href=" appointments.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Appointments
               
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href=" customers.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
               Customers
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href=" delivery.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
               Deliveries
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href=" documents.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
               Documents
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href=" feedback.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
               Feedback
              </p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href=" services.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
               Services
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>