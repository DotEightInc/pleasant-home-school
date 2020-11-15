<?php
session_start();
if (isset($_SESSION['Admin No.'])) {

?>
<?php include("functions/init.php"); ?>
<?php include("include/sider.php"); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Appoint Staff</h1> 
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Appoint Staff</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <?php validate_appoint(); ?>
 <form method="POST" enctype="multipart/form-data">
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

        <div class="row">
          <div class="col-md-12">

            <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title">Appoint New Staff</h3>
              </div>
              <div class="card-body">
               

                 <div class="form-group">
                        <label>Title.:</label>
                        <select name="title" class="custom-select">
                          <option name="title">Mr.</option>
                          <option name="title">Mrs.</option>
                          <option name="title">Miss</option>
                        </select>
                      </div>
                  <!-- /.input group -->


                <div class="form-group">
                  <label>Surname.:</label>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-user"></i></span>
                    </div>
                    <input type="text" placeholder="Input Surname" name="surname" class="form-control" required>
                  </div>
                  <!-- /.input group -->
                </div>
                <!-- /.form group -->

                <div class="form-group">
                  <label>First Name.:</label>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-user"></i></span>
                    </div>
                    <input type="text" placeholder="Input Name" name="firstname" class="form-control" required>
                  </div>
                  <!-- /.input group -->
                </div>
                <!-- /.form group -->

                <div class="form-group">
                  <label>Other Names.:</label>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-user"></i></span>
                    </div>
                    <input type="text" placeholder="Input Other Name" class="form-control" name="lastname" required>
                  </div>
                  <!-- /.input group -->
                </div>
                <!-- /.form group -->

               <div class="form-group">
                  <label>Date of Birth.:</label>
                  <div class="row">
                  <div class="input-group col-md-4">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-calendar"></i></span>
                    </div>
                    <input type="text" name="date" placeholder="Day" class="form-control" data-inputmask='"mask": "99"' data-mask required>
                  </div>
                  <!-- /.input group -->
                   <div class="input-group col-md-4">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                    </div>
                    <input type="text" name="month" placeholder="Month" class="form-control" data-inputmask='"mask": "99"' data-mask required>
                  </div>
                  <!-- /.input group -->
                   <div class="input-group col-md-4">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-calendar"></i></span>
                    </div>
                    <input type="text" name="year" placeholder="Year" class="form-control" data-inputmask='"mask": "9999"' data-mask required>
                  </div>
                  <!-- /.input group -->
                </div>
              </div>
                <!-- /.form group -->

                  <div class="form-group">
                        <label>Gender.:</label>
                        <select name="gender" class="custom-select">
                          <option name="gender">Male</option>
                          <option name="gender">Female</option>
                        </select>
                      </div>
                  <!-- /.input group -->

                    <div class="form-group">
                  <label>Tertiary Institution Attended.:</label>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-graduation-cap"></i></span>
                    </div>
                    <input type="text" name="schlst" placeholder="Input Tertiary Institution Attended" class="form-control" required>
                  </div>
                  <!-- /.input group -->
                </div>
                <!-- /.form group -->

                 <div class="form-group">
                        <label>Qualfication.:</label>
                        <select name="class" class="custom-select">
                          <option name="class">PGD</option>
                          <option name="class">Masters</option>
                          <option name="class">PhD</option>
                          <option name="class">Degree</option>
                          <option name="class">HND</option>
                          <option name="class">OND</option>
                          <option name="class">SSCE</option>
                        </select>
                      </div>
                  <!-- /.input group -->

                   <div class="form-group">
                        <label>Marital Status.:</label>
                        <select name="dept" class="custom-select">
                          <option name="dept">Single</option>
                          <option name="dept">Married</option>
                          <option name="dept">Widowed</option>
                          <option name="dept">Divorced</option>
                          
                        </select>
                      </div>
                  <!-- /.input group -->

                    <div class="form-group">
                  <label>Next of Kin.:</label>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-users"></i></span>
                    </div>
                    <input type="text" name="parent" placeholder="Input Name of Next of Kin" class="form-control" required>
                  </div>
                  <!-- /.input group -->
                </div>
                <!-- /.form group -->

                <div class="form-group">
                        <label>Relationship of Next of Kin.:</label>
                        <select name="relation" class="custom-select">
                          <option name="relation">Husband</option>
                          <option name="relation">Wife</option>
                          <option name="relation">Dad</option>
                          <option name="relation">Mum</option>
                          <option name="relation">Parent</option>
                          <option name="relation">Family Member</option>
                        </select>
                      </div>
                  <!-- /.input group -->

                 <div class="form-group">
                  <label>Next of Kin Occupation.:</label>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-"></i></span>
                    </div>
                    <input name="occupation" type="text" placeholder="Input Next of Kin Occupation" class="form-control" required>
                  </div>
                  <!-- /.input group -->
                </div>
                <!-- /.form group -->

                 <div class="form-group">
                  <label>Residential Address.:</label>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-home"></i></span>
                    </div>
                    <input type="text" name="add" placeholder="Input Residential Address" class="form-control" required>
                  </div>
                  <!-- /.input group -->
                </div>
                <!-- /.form group -->

                 <div class="form-group">
                  <label>Next of Kin Residential Address.:</label>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-home"></i></span>
                    </div>
                    <input type="text" name="add2" placeholder="Input Next of Kin Residential Address" class="form-control" required>
                  </div>
                  <!-- /.input group -->
                </div>
                <!-- /.form group -->

                <!-- phone mask -->
                <div class="form-group">
                  <label>Telephone Number.:</label>
                  <div class="row">
                  <div class="input-group col-md-6">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-phone"></i></span>
                    </div>
                    <input type="number" name="dnum" class="form-control" data-inputmask='"mask": "99999999999"' data-mask placeholder="Input your Telephone Number" required>
                  </div>
                  <div class="input-group col-md-6">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-phone"></i></span>
                    </div>
                    <input type="number" name="mnum" class="form-control" placeholder="Input Next of Kin Telephone Number" data-inputmask='"mask": "99999999999"' data-mask>
                  </div>
                </div>
                  <!-- /.input group -->
                </div>
                <!-- /.form group -->  

              
                <!-- /.form group -->         
                   <div>
                    <label>Upload Student Passport<span style="color: red"> (.jpg or .jpeg files only)</span></label>
                    <div>
                      <input type="file" name="fileToUpload" required>
                    </div>
                  </div>
                 
                 

              </div>

               <div class="card-footer">
                  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col (left) -->

        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
  </form>
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
<!-- Select2 -->
<script src="plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<!-- InputMask -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
<!-- date-range-picker -->
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap color picker -->
<script src="plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Bootstrap Switch -->
<script src="plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- bs-custom-file-input -->
<script src="plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- Page script -->
<script type="text/javascript">
$(document).ready(function () {
  bsCustomFileInput.init();
});
</script>
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Timepicker
    $('#timepicker').datetimepicker({
      format: 'LT'
    })
    
    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    });

    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    });

  })
</script>
</body>
</html>
<?php
}
else{
  header("location: ./login");
}

?>