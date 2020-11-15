<?php
session_start();
if (isset($_SESSION['Admin No.'])) {

?>
<?php include("functions/init.php"); ?>
<?php include("include/sidebarr.php"); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>View Staffs</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Staffs</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
         
      <!-- Default box -->
      <div class="card card-solid">
        <div class="card-body pb-0">
          <div class="row d-flex align-items-stretch">
              <?php
 $sql="SELECT * FROM staff WHERE `sn` = '1' OR `sn` = '0'";
 $result_set=query($sql);
 while($row= mysqli_fetch_array($result_set))
 {
  ?>      
            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
              <div class="card bg-light">
                <div class="card-header text-muted border-bottom-0">
                </div>
                <div class="card-body pt-0">
                  <div class="row">
                  
                    <div class="col-7">
                      <h2 class="lead"><b><?php echo $row['surname']." ".$row['firstname']; ?></b></h2>
                      <p class="text-muted text-sm"><b>Qualification.: </b> <?php echo $row['qual'] ?></p>
                      <ul class="ml-4 mb-0 fa-ul text-muted">
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Address: <?php echo $row['radd'] ?></li>
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Tel 1.: <?php echo $row['tel1'].", ".$row['tel2']; ?></li>
                      </ul>
                    </div>
                    <div class="col-5 text-center">
                      <?php echo '
                      <img src="upload/staffDP/'.$row['passport'].'" alt="" class="img-circle img-fluid">';
                      ?>
                    </div>
                  </div>

                </div>
                <div class="card-footer">
                  <div class="text-right">
                  
                    <a href="#" class="btn btn-sm btn-primary">
                      <i class="fas fa-user"></i> View Full Profile
                    </a>
                  </div>
                </div>
                
              </div>

            </div>
 <?php
  }
  ?>
          </div>

        </div>
        <!-- /.card-body -->
       
        <!-- /.card-footer -->
      </div>
      <!-- /.card -->

    </section>
   
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php include("include/footer.php"); ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
<?php
}
else{
  header("location: ./login");
}

?>