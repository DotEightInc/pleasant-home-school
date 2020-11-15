<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Paradise Model School website">
  <meta name="keywords" content="Paradise Model School, School">
   <title>Paradise Model School | Staff Portal</title>
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
        <a href="https://paradisemodelschool.com.ng/" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="tel: +2348103171902" class="nav-link">Portal Help</a>
      </li>
    </ul>

     <!-- Right navbar links -->
  </nav>
  <!-- /.navbar -->

    <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/favicon2.ico" alt="Profile Picture" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Paradise School</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      
      <!-- Sidebar -->
    <div class="sidebar">
     <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
           <?php
                 
 $sql="SELECT * from staff WHERE `staffid` = '".$_SESSION['staff_id']."'";
 $result_set=query($sql);
 while($row= mysqli_fetch_array($result_set))
 {
  ?>
  <?php echo'
          <img style="width: 60px" src="../admin/upload/staffDP/'.$row['passport'].'" class="img-circle elevation-2" alt="Profile Picture">';
          ?>
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $row['surname']." ".$row['firstname']; ?></a>
          <small style="color: white"><?php echo $row['staffid']; ?></small>
        </div>
      </div>
<?php
}
?>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="./index" class="nav-link">
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
              <i class="nav-icon fas fa-upload"></i>
              <p>
                Upload Result
                <i class="fas fa-angle-right right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./frn" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>1st Term </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./snd" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>2nd Term</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./trd" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>3rd Term</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./enr" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Entrance Result</p>
                </a>
              </li>             
            </ul>
          </li>
          <br/>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>
               Upload Files
                <i class="right fas fa-angle-right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./bill" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>School Bill</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./lbk" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List Of Book</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./news" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Newsletter</p>
                </a>
              </li>
            </ul>
          </li>
          <br/>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-credit-card"></i>
              <p>
                Upload Assignment
                <i class="fas fa-angle-right right"></i>
              </p>
            </a>

          </li>
          <br/>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-wifi"></i>
              <p>
               Online Classroom
                <i class="fas fa-angle-right right"></i>
              </p>
            </a>
          </li>
          <br/>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-download"></i>
              <p>
              Downloads
                <i class="right fas fa-angle-right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <?php
                 
 $sql="SELECT * from staff WHERE `staffid` = '".$_SESSION['staff_id']."'";
 $result_set=query($sql);
 while($row= mysqli_fetch_array($result_set))
   $data = $row['staffid'];
   $pass = str_replace('/', '', $data);
 {
  ?>
              <li class="nav-item">
                <?php echo '
                <a target="_blank" href="../admin/upload/employ/'.$pass.'.pdf" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Employment Letter</p>
                </a>
              </li>
              <li class="nav-item">
                <a target="_blank" href="../admin/upload/StaffId/'.$pass.'.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Staff ID Card</p>
                </a>
              </li>';
              ?>
            </ul>
            <?php
          }
          ?>
          </li>
          <br/>
                    <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-check"></i>
              <p>
              Result Templates
                <i class="right fas fa-angle-right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="upload/template/gn.xlsx" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>General</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="upload/template/art.xlsx" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Arts Dept.</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="upload/template/science.xlsx" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Science Dept.</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="upload/template/cmm.xlsx" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Commercial Dept.</p>
                </a>
              </li>
            </ul>
          </li>
          <br/>
          <li class="nav-item has-treeview">
            <a href="./logout" class="nav-link">
              <i class="nav-icon far fa-user"></i>
              <p>
             Logout
               
              </p>
            </a>
          </li>
            </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>