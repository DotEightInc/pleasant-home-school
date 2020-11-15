<?php
session_start();
if(!isset($_SESSION['cbt'])) {
  header("location: ../login");
}
?>
<?php include("includes/navbar.php"); ?>
<?php include("includes/sidebar.php"); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">CBT</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

        <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- /.col-md-6 -->
          <div class="col-lg-6">
           
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="m-0">Upload CBT Questions</h5>
              </div>
              <div class="card-body">
                <p class="card-text">Begin by uploading Computer Based Test questions to be taken by students</p>
                <a href="./upload" class="btn btn-primary">Upload</a>
              </div>
            </div>
          </div>
          <!-- /.col-md-6 -->
  
          <div class="col-lg-6">
           
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="m-0">Delete Subjects</h5>
              </div>
              <div class="card-body">
                <p class="card-text">Delete a subject you don`t wish to have anymore. Contact <a href="tel: +2348103171902">DotEightInc</a> for details</p>
                <a href="./deletesubject" class="btn btn-primary">Delete Subjects</a>
              </div>
            </div>
          </div>


          <div class="col-lg-6">
           
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="m-0">Start CBT</h5>
              </div>
              <div class="card-body">
                <p class="card-text">Get your students/Pupils started by starting the Computer Based Test</p>
                <a href="./selectcbt" class="btn btn-primary">Start CBT</a>
              </div>
            </div>
          </div>

           <div class="col-lg-6">
           
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="m-0">Print Result</h5>
              </div>
              <div class="card-body">
                <p class="card-text">View students/pupils scores and assigned them for printing or save as PDF to be shared</p>
                <a href="./printres" class="btn btn-primary">Print Results</a>
              </div>
            </div>
          </div>

        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
    
  </div>
  <!-- /.content-wrapper -->
 <?php include("includes/footer.php"); ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
