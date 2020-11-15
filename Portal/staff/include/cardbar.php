<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Paradise Model School website">
  <meta name="keywords" content="Paradise Model School, School">
   <title>Paradise Model School | Admin Portal</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <link rel="icon" href="dist/img/favicon2.ico" type="image/ico" />
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
   <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <style>
    @media print{
      @page {
        size: 97mm 10mm;
        margin: 25mm;
        margin-top: 45mm;
      }
    }
</style>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Portal Help</a>
      </li>
    </ul>

     <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
     
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/favicon2.ico" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Paradise School</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
         
        </div>
        <div class="info">
          <a href="#" class="d-block">School Admin Portal</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="../index.php" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-down"></i>
              </p>
            </a>
            
          </li>
         <br/>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-graduation-cap"></i>
              <p>
                Students
                <i class="fas fa-angle-right right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../view.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View all Student</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../delstud.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Delete a Student</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../enroll.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Enroll New Student</p>
                </a>
              </li>
              
             
            </ul>
          </li>
          <br/>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Staffs
                <i class="right fas fa-angle-right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../viewstaff.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View all Staffs</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../delstaff.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Delete a Staff</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../appoint.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Appoint New Staff</p>
                </a>
              </li>
            </ul>
          </li>
          <br/>
          <li class="nav-item has-treeview">
            <a href="../debt.php" class="nav-link">
              <i class="nav-icon fas fa-credit-card"></i>
              <p>
                View Debtors
                <i class="fas fa-angle-right right"></i>
              </p>
            </a>

          </li>
          <br/>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Absentees
                <i class="fas fa-angle-right right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../abstaff.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Staff Absent Today</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../abstud.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Student Absent Today</p>
                </a>
              </li>
              
            </ul>
          </li>
          <br/>
          
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
               Send Mail
                <i class="fas fa-angle-right right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../parent.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>To Parents</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="../staff.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>To Staffs</p>
                </a>
              </li>
            </ul>
          </li>
<br/>
<li class="nav-item has-treeview">
            <a href="credit.php" class="nav-link">
              <i class="nav-icon far fa-credit-card"></i>
              <p>
            Payment History
                <i class="fas fa-angle-right right"></i>
              </p>
            </a>
          </li>
          <br/>
          <li class="nav-item has-treeview">
            <a href="../profile.php" class="nav-link">
              <i class="nav-icon far fa-user"></i>
              <p>
               Profile
                <i class="fas fa-angle-right right"></i>
              </p>
            </a>
          </li>
            </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>