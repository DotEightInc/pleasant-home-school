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
            <h1 class="m-0 text-dark">Upload Questions</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="./">Dashboard</a></li>
              <li class="breadcrumb-item active">Upload</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


 <!-- Main content -->
    <section class="content">
          <!-- right column -->
          <div class="col-md-12">
            <!-- general form elements disabled -->
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title"></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form role="form">

                  <div class="form-group">
                    <label for="exampleInputPassword1">Select a Category .:</label>
                        <select id="category" class="form-control">
                          <option id="category">Basic School</option>
                          <option id="category">Junior Secondary School</option>
                          <option id="category">Senior Secondary School</option>
                           <option id="category">Online Examination</option>
                        </select>
                      </div>
                      <button type="button" id="continue" class="btn btn-primary btn-outline-light">Continue</button>
                </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <!-- general form elements disabled -->
           
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
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








<!---modal basic school--->
<div class="modal fade" id="modal-basic">
        <div class="modal-dialog modal-lg">
          <div class="modal-content bg-info">
            <div class="modal-header">
              <h4 class="modal-title">Create a CBT <?php echo date("Y"); ?> class and subject for Basic School</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
               <div class="card-body">
              <form name="uploadquestion" role="form">

                  <div class="form-group">
                    <label for="exampleInputPassword1">Select a Class .:</label>
                        <select id="catclass" class="form-control">
                          <option id="catclass">Basic one</option>
                          <option id="catclass">Basic Two</option>
                          <option id="catclass">Basic Three</option>
                           <option id="catclass">Basic Four</option>
                            <option id="catclass">Basic Five</option>
                             <option id="catclass">Basic Six</option>
                        </select>
                      </div>

                       <div class="form-group">
                    <label for="exampleInputPassword1">Create a subject .:</label>
                        <input type="text" placeholder="e.g Mathematics, English, Basic Science e.t.c" id="subject" name="subject" class="form-control" required>
                      </div>

                      <div class="row">
                      <div class="form-group col-md-6">
                    <label for="exampleInputPassword1">Time Allowed - Hours .:</label>
                       <select id="hour" class="form-control">
                        <?php
                        $x = 0;

                        while($x <= 24) {
                            echo '

   
                          <option style="font-size: 20px" id="hour">'.$x.' </option>
                       

                          <br>';
                          $x++;
                      }
                      ?>

  </select>
                      </div>

                      <div class="form-group col-md-6">
                    <label for="exampleInputPassword1">Time Allowed - Minutes .:</label>
                       <select id="minutes" class="form-control">
                        <?php
                        $x = 1;

                        while($x <= 60) {
                            echo '

   
                          <option style="font-size: 20px" id="minutes">'.$x.' </option>
                       

                          <br>';
                          $x++;
                      }
                      ?>

  </select>
                      </div>
                    </div>
                </form>
              </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
              <button type="button" id="next" class="btn btn-outline-light">Continue</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
      <!--- end of code for basic modal -->




<!---modal junior school--->
<div class="modal fade" id="modal-junior">
        <div class="modal-dialog modal-lg">
          <div class="modal-content bg-info">
            <div class="modal-header">
              <h4 class="modal-title">Create a CBT <?php echo date("Y"); ?> class and subject for Junior Secondary School</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
               <div class="card-body">
              <form name="uploadjss" role="form">

                  <div class="form-group">
                    <label for="exampleInputPassword1">Select a Class .:</label>
                        <select id="jssclass" class="form-control">
                          <option id="jssclass">JSS 1</option>
                          <option id="jssclass">JSS 2</option>
                          <option id="jssclass">JSS 3</option>
                        </select>
                      </div>

                       <div class="form-group">
                    <label for="exampleInputPassword1">Create a subject .:</label>
                        <input type="text" placeholder="e.g Mathematics, English, Basic Science e.t.c" id="jsssubject" name="jsssubject" class="form-control" required>
                      </div>

                                            <div class="row">
                      <div class="form-group col-md-6">
                    <label for="exampleInputPassword1">Time Allowed - Hours .:</label>
                       <select id="jsshour" class="form-control">
                        <?php
                        $x = 0;

                        while($x <= 24) {
                            echo '

   
                          <option style="font-size: 20px" id="jsshour">'.$x.' </option>
                       

                          <br>';
                          $x++;
                      }
                      ?>

  </select>
                      </div>

                      <div class="form-group col-md-6">
                    <label for="exampleInputPassword1">Time Allowed - Minutes .:</label>
                       <select id="jssminutes" class="form-control">
                        <?php
                        $x = 1;

                        while($x <= 60) {
                            echo '

   
                          <option style="font-size: 20px" id="jssminutes">'.$x.' </option>
                       

                          <br>';
                          $x++;
                      }
                      ?>

  </select>
                      </div>
                    </div>
                </form>
              </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
              <button type="button" id="jssnext" class="btn btn-outline-light">Continue</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
      <!--- end of code for junior modal -->








      <!---modal senior school--->
<div class="modal fade" id="modal-senior">
        <div class="modal-dialog modal-lg">
          <div class="modal-content bg-info">
            <div class="modal-header">
              <h4 class="modal-title">Create a CBT <?php echo date("Y"); ?> class and subject for Senior Secondary School</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
               <div class="card-body">
              <form name="uploadsenior" role="form">

                  <div class="form-group">
                    <label for="exampleInputPassword1">Select a Class .:</label>
                        <select id="seniorclass" class="form-control">
                          <option id="seniorclass">SSS 1</option>
                          <option id="seniorclass">SSS 2</option>
                          <option id="seniorclass">SSS 3</option>
                        </select>
                      </div>

                       <div class="form-group">
                    <label for="exampleInputPassword1">Create a subject .:</label>
                        <input type="text" placeholder="e.g Mathematics, English, Chemistry e.t.c" id="seniorsubject" name="seniorsubject" class="form-control" required>
                      </div>

                                            <div class="row">
                      <div class="form-group col-md-6">
                    <label for="exampleInputPassword1">Time Allowed - Hours .:</label>
                       <select id="sshour" class="form-control">
                        <?php
                        $x = 0;

                        while($x <= 24) {
                            echo '

   
                          <option style="font-size: 20px" id="sshour">'.$x.' </option>
                       

                          <br>';
                          $x++;
                      }
                      ?>

  </select>
                      </div>

                      <div class="form-group col-md-6">
                    <label for="exampleInputPassword1">Time Allowed - Minutes .:</label>
                       <select id="ssminutes" class="form-control">
                        <?php
                        $x = 1;

                        while($x <= 60) {
                            echo '

   
                          <option style="font-size: 20px" id="ssminutes">'.$x.' </option>
                       

                          <br>';
                          $x++;
                      }
                      ?>

  </select>
                      </div>
                    </div>
                </form>
              </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
              <button type="button" id="seniornext" class="btn btn-outline-light">Continue</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
      <!--- end of code for junior modal -->






      <!---modal others school--->
<div class="modal fade" id="modal-others">
        <div class="modal-dialog modal-lg">
          <div class="modal-content bg-info">
            <div class="modal-header">
              <h4 class="modal-title">Create a CBT <?php echo date("Y"); ?> Subject for Online Examination</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
               <div class="card-body">
              <form name="uploadonline" role="form">

                       <div class="form-group">
                    <label for="exampleInputPassword1">Create a subject .:</label>
                        <input type="text" placeholder="e.g Mathematics, English, Chemistry e.t.c" id="onlinesubject" name="onlinesubject" class="form-control" required>
                      </div>

                                            <div class="row">
                      <div class="form-group col-md-6">
                    <label for="exampleInputPassword1">Time Allowed - Hours .:</label>
                       <select id="othour" class="form-control">
                        <?php
                        $x = 0;

                        while($x <= 24) {
                            echo '

   
                          <option style="font-size: 20px" id="othour">'.$x.' </option>
                       

                          <br>';
                          $x++;
                      }
                      ?>

  </select>
                      </div>

                      <div class="form-group col-md-6">
                    <label for="exampleInputPassword1">Time Allowed - Minutes .:</label>
                       <select id="otminutes" class="form-control">
                        <?php
                        $x = 1;

                        while($x <= 60) {
                            echo '

   
                          <option style="font-size: 20px" id="otminutes">'.$x.' </option>
                       

                          <br>';
                          $x++;
                      }
                      ?>

  </select>
                      </div>
                    </div>
                </form>
              </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
              <button type="button" id="online" class="btn btn-outline-light">Continue</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
      <!--- end of code for junior modal -->











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
<script src="plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<script type="text/javascript">
$(document).ready(function () {
  bsCustomFileInput.init();
});
</script>
<script src="ajax.js"></script>
<!-- SweetAlert2 -->
<script src="plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="plugins/toastr/toastr.min.js"></script>
<script type="text/javascript">
  $(function() {
    const Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });
  });

</script>
</body>
</html>