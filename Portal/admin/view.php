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
            <h1>All Students Enrolled <sup><span class="badge badge-info right"><?php echo $_SESSION['ts']; ?></span></sup>  <button style="background: grey; color: white;" type="button" class="btn btn-tool" onclick="window.print();"><i class="fas fa-print"></i>
                  Print</button></h1> 
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">View Students</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- /.row -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Nursery School</h3>

                  <div class="card-tools">
                   <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i>
                  </button>
                </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th >Admission No. </th>
                            <th >First Name </th>
                            <th >Last Name</th>
                            <th >Other Name </th>
                            <th >Dad No. </th>
                            <th >Mum No. </th>
                            <th >Gender </th>
                            <th ></th>
                    </tr>
                  </thead>
                  <tbody>
         <?php
 $sql="SELECT * FROM students WHERE class= 'Nursery'";
 $result_set=query($sql);
 while($row= mysqli_fetch_array($result_set))
 {
  ?>                
                    <tr>
                      <td><?php echo $row['AdminID'] ?></td>
                                                    <td><?php echo $row['SurName'] ?></td>
                                                    <td><?php echo $row['Middle Name'] ?></td>
                                                    <td><?php echo $row['Last Name'] ?></td>
                                                    <td><?php echo $row['Telephone1'] ?></td>
                                                    <td><?php echo $row['Telephone2'] ?></td>
                                                    <td ><?php echo $row['Gender'] ?></td>
                                                    <?php echo '
                                                    <td ><a href="./more?id='.$row['AdminID'].'">View Full Profile</a></td>';
                                                    ?>
                                                    
                    </tr>
                    <?php
                  }
                  ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->

              <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Basic 1</h3>

                  <div class="card-tools">
                   <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i>
                  </button>
                </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th >Admission No. </th>
                            <th >First Name </th>
                            <th >Last Name</th>
                            <th >Other Name </th>
                            <th >Dad No. </th>
                            <th >Mum No. </th>
                            <th >Gender </th>
                            <th ></th>
                    </tr>
                  </thead>
                  <tbody>
         <?php
 $sql="SELECT * FROM students WHERE class= 'Basic 1'";
 $result_set=query($sql);
 while($row= mysqli_fetch_array($result_set))
 {
  ?>                
                    <tr>
                      <td><?php echo $row['AdminID'] ?></td>
                                                    <td><?php echo $row['SurName'] ?></td>
                                                    <td><?php echo $row['Middle Name'] ?></td>
                                                    <td><?php echo $row['Last Name'] ?></td>
                                                    <td><?php echo $row['Telephone1'] ?></td>
                                                    <td><?php echo $row['Telephone2'] ?></td>
                                                    <td ><?php echo $row['Gender'] ?></td>
                                                    <?php echo '
                                                    <td ><a href="./more?id='.$row['AdminID'].'">View Full Profile</a></td>';
                                                    ?>
                    </tr>
                    <?php
                  }
                  ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->

                    <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Basic 2</h3>

                  <div class="card-tools">
                   <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i>
                  </button>
                </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th >Admission No. </th>
                            <th >First Name </th>
                            <th >Last Name</th>
                            <th >Other Name </th>
                            <th >Dad No. </th>
                            <th >Mum No. </th>
                            <th >Gender </th>
                            <th ></th>
                    </tr>
                  </thead>
                  <tbody>
         <?php
 $sql="SELECT * FROM students WHERE class= 'Basic 2'";
 $result_set=query($sql);
 while($row= mysqli_fetch_array($result_set))
 {
  ?>                
                    <tr>
                      <td><?php echo $row['AdminID'] ?></td>
                                                    <td><?php echo $row['SurName'] ?></td>
                                                    <td><?php echo $row['Middle Name'] ?></td>
                                                    <td><?php echo $row['Last Name'] ?></td>
                                                    <td><?php echo $row['Telephone1'] ?></td>
                                                    <td><?php echo $row['Telephone2'] ?></td>
                                                    <td ><?php echo $row['Gender'] ?></td>
                                                    <?php echo '
                                                    <td ><a href="./more?id='.$row['AdminID'].'">View Full Profile</a></td>';
                                                    ?>
                    </tr>
                    <?php
                  }
                  ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->

                    <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Basic 3</h3>

                  <div class="card-tools">
                   <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i>
                  </button>
                </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th >Admission No. </th>
                            <th >First Name </th>
                            <th >Last Name</th>
                            <th >Other Name </th>
                            <th >Dad No. </th>
                            <th >Mum No. </th>
                            <th >Gender </th>
                            <th ></th>
                    </tr>
                  </thead>
                  <tbody>
         <?php
 $sql="SELECT * FROM students WHERE class= 'Basic 3'";
 $result_set=query($sql);
 while($row= mysqli_fetch_array($result_set))
 {
  ?>                
                    <tr>
                      <td><?php echo $row['AdminID'] ?></td>
                                                    <td><?php echo $row['SurName'] ?></td>
                                                    <td><?php echo $row['Middle Name'] ?></td>
                                                    <td><?php echo $row['Last Name'] ?></td>
                                                    <td><?php echo $row['Telephone1'] ?></td>
                                                    <td><?php echo $row['Telephone2'] ?></td>
                                                    <td ><?php echo $row['Gender'] ?></td>
                                                    <?php echo '
                                                    <td ><a href="./more?id='.$row['AdminID'].'">View Full Profile</a></td>';
                                                    ?>
                    </tr>
                    <?php
                  }
                  ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->

                    <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Basic 4</h3>

                  <div class="card-tools">
                   <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i>
                  </button>
                </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th >Admission No. </th>
                            <th >First Name </th>
                            <th >Last Name</th>
                            <th >Other Name </th>
                            <th >Dad No. </th>
                            <th >Mum No. </th>
                            <th >Gender </th>
                            <th ></th>
                    </tr>
                  </thead>
                  <tbody>
         <?php
 $sql="SELECT * FROM students WHERE class= 'Basic 4'";
 $result_set=query($sql);
 while($row= mysqli_fetch_array($result_set))
 {
  ?>                
                    <tr>
                      <td><?php echo $row['AdminID'] ?></td>
                                                    <td><?php echo $row['SurName'] ?></td>
                                                    <td><?php echo $row['Middle Name'] ?></td>
                                                    <td><?php echo $row['Last Name'] ?></td>
                                                    <td><?php echo $row['Telephone1'] ?></td>
                                                    <td><?php echo $row['Telephone2'] ?></td>
                                                    <td ><?php echo $row['Gender'] ?></td>
                                                    <?php echo '
                                                    <td ><a href="./more?id='.$row['AdminID'].'">View Full Profile</a></td>';
                                                    ?>
                    </tr>
                    <?php
                  }
                  ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->

                    <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Basic 5 & 6</h3>

                  <div class="card-tools">
                   <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i>
                  </button>
                </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th >Admission No. </th>
                            <th >First Name </th>
                            <th >Last Name</th>
                            <th >Other Name </th>
                            <th >Dad No. </th>
                            <th >Mum No. </th>
                            <th >Gender </th>
                            <th ></th>
                    </tr>
                  </thead>
                  <tbody>
         <?php
 $sql="SELECT * FROM students WHERE class= 'Basic 5-6'";
 $result_set=query($sql);
 while($row= mysqli_fetch_array($result_set))
 {
  ?>                
                    <tr>
                      <td><?php echo $row['AdminID'] ?></td>
                                                    <td><?php echo $row['SurName'] ?></td>
                                                    <td><?php echo $row['Middle Name'] ?></td>
                                                    <td><?php echo $row['Last Name'] ?></td>
                                                    <td><?php echo $row['Telephone1'] ?></td>
                                                    <td><?php echo $row['Telephone2'] ?></td>
                                                    <td ><?php echo $row['Gender'] ?></td>
                                                    <?php echo '
                                                    <td ><a href="./more?id='.$row['AdminID'].'">View Full Profile</a></td>';
                                                    ?>
                    </tr>
                    <?php
                  }
                  ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->

                    <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">J.S.S 1</h3>

                  <div class="card-tools">
                   <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i>
                  </button>
                </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th >Admission No. </th>
                            <th >First Name </th>
                            <th >Last Name</th>
                            <th >Other Name </th>
                            <th >Dad No. </th>
                            <th >Mum No. </th>
                            <th >Gender </th>
                            <th ></th>
                    </tr>
                  </thead>
                  <tbody>
         <?php
 $sql="SELECT * FROM students WHERE class= 'J.S.S 1'";
 $result_set=query($sql);
 while($row= mysqli_fetch_array($result_set))
 {
  ?>                
                    <tr>
                      <td><?php echo $row['AdminID'] ?></td>
                                                    <td><?php echo $row['SurName'] ?></td>
                                                    <td><?php echo $row['Middle Name'] ?></td>
                                                    <td><?php echo $row['Last Name'] ?></td>
                                                    <td><?php echo $row['Telephone1'] ?></td>
                                                    <td><?php echo $row['Telephone2'] ?></td>
                                                    <td ><?php echo $row['Gender'] ?></td>
                                                    <?php echo '
                                                    <td ><a href="./more?id='.$row['AdminID'].'">View Full Profile</a></td>';
                                                    ?>
                    </tr>
                    <?php
                  }
                  ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->

                    <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">J.S.S 2</h3>

                  <div class="card-tools">
                   <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i>
                  </button>
                </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th >Admission No. </th>
                            <th >First Name </th>
                            <th >Last Name</th>
                            <th >Other Name </th>
                            <th >Dad No. </th>
                            <th >Mum No. </th>
                            <th >Gender </th>
                            <th ></th>
                    </tr>
                  </thead>
                  <tbody>
         <?php
 $sql="SELECT * FROM students WHERE class= 'J.S.S 2'";
 $result_set=query($sql);
 while($row= mysqli_fetch_array($result_set))
 {
  ?>                
                    <tr>
                      <td><?php echo $row['AdminID'] ?></td>
                                                    <td><?php echo $row['SurName'] ?></td>
                                                    <td><?php echo $row['Middle Name'] ?></td>
                                                    <td><?php echo $row['Last Name'] ?></td>
                                                    <td><?php echo $row['Telephone1'] ?></td>
                                                    <td><?php echo $row['Telephone2'] ?></td>
                                                    <td ><?php echo $row['Gender'] ?></td>
                                                    <?php echo '
                                                    <td ><a href="./more?id='.$row['AdminID'].'">View Full Profile</a></td>';
                                                    ?>
                    </tr>
                    <?php
                  }
                  ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->

                    <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">J.S.S 3</h3>

                  <div class="card-tools">
                   <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i>
                  </button>
                </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th >Admission No. </th>
                            <th >First Name </th>
                            <th >Last Name</th>
                            <th >Other Name </th>
                            <th >Dad No. </th>
                            <th >Mum No. </th>
                            <th >Gender </th>
                            <th ></th>
                    </tr>
                  </thead>
                  <tbody>
         <?php
 $sql="SELECT * FROM students WHERE class= 'J.S.S 3'";
 $result_set=query($sql);
 while($row= mysqli_fetch_array($result_set))
 {
  ?>                
                    <tr>
                      <td><?php echo $row['AdminID'] ?></td>
                                                    <td><?php echo $row['SurName'] ?></td>
                                                    <td><?php echo $row['Middle Name'] ?></td>
                                                    <td><?php echo $row['Last Name'] ?></td>
                                                    <td><?php echo $row['Telephone1'] ?></td>
                                                    <td><?php echo $row['Telephone2'] ?></td>
                                                    <td ><?php echo $row['Gender'] ?></td>
                                                    <?php echo '
                                                    <td ><a href="./more?id='.$row['AdminID'].'">View Full Profile</a></td>';
                                                    ?>
                    </tr>
                    <?php
                  }
                  ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->

                    <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">S.S.S 1</h3>

                  <div class="card-tools">
                   <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i>
                  </button>
                </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th style="width: 15%">Admission No. </th>
                            <th style="width: 15%">First Name </th>
                            <th style="width: 15%">Last Name</th>
                            <th style="width: 15%">Other Name </th>
                            <th style="width: 15%">Department </th>
                            <th style="width: 15%">Dad No. </th>
                            <th style="width: 15%">Mum No. </th>
                            <th style="width: 15%">Gender </th>
                            <th style="width: 15%"></th>
                    </tr>
                  </thead>
                  <tbody>
         <?php
 $sql="SELECT * FROM students WHERE class= 'S.S.S 1'";
 $result_set=query($sql);
 while($row= mysqli_fetch_array($result_set))
 {
  ?>                
                    <tr>
                      <td><?php echo $row['AdminID'] ?></td>
                                                    <td><?php echo $row['SurName'] ?></td>
                                                    <td><?php echo $row['Middle Name'] ?></td>
                                                    <td><?php echo $row['Last Name'] ?></td>
                                                    <td><?php echo $row['Department'] ?></td>
                                                    <td><?php echo $row['Telephone1'] ?></td>
                                                    <td><?php echo $row['Telephone2'] ?></td>
                                                    <td ><?php echo $row['Gender'] ?></td>
                                                    <?php echo '
                                                    <td ><a href="./more?id='.$row['AdminID'].'">View Full Profile</a></td>';
                                                    ?>
                    </tr>
                    <?php
                  }
                  ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->

                    <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">S.S.S 2</h3>

                  <div class="card-tools">
                   <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i>
                  </button>
                </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th style="width: 15%">Admission No. </th>
                            <th style="width: 15%">First Name </th>
                            <th style="width: 15%">Last Name</th>
                            <th style="width: 15%">Other Name </th>
                            <th style="width: 15%">Department </th>
                            <th style="width: 15%">Dad No. </th>
                            <th style="width: 15%">Mum No. </th>
                            <th style="width: 15%">Gender </th>
                            <th style="width: 15%"></th>
                    </tr>
                  </thead>
                  <tbody>
         <?php
 $sql="SELECT * FROM students WHERE class= 'S.S.S 2'";
 $result_set=query($sql);
 while($row= mysqli_fetch_array($result_set))
 {
  ?>                
                    <tr>
                        <td><?php echo $row['AdminID'] ?></td>
                                                    <td><?php echo $row['SurName'] ?></td>
                                                    <td><?php echo $row['Middle Name'] ?></td>
                                                    <td><?php echo $row['Last Name'] ?></td>
                                                    <td><?php echo $row['Department'] ?></td>
                                                    <td><?php echo $row['Telephone1'] ?></td>
                                                    <td><?php echo $row['Telephone2'] ?></td>
                                                    <td ><?php echo $row['Gender'] ?></td>
                                                    <?php echo '
                                                    <td ><a href="./more?id='.$row['AdminID'].'">View Full Profile</a></td>';
                                                    ?>
                    </tr>
                    <?php
                  }
                  ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->

                    <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">S.S.S 3</h3>

                  <div class="card-tools">
                   <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i>
                  </button>
                </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th style="width: 15%">Admission No. </th>
                            <th style="width: 15%">First Name </th>
                            <th style="width: 15%">Last Name</th>
                            <th style="width: 15%">Other Name </th>
                            <th style="width: 15%">Department </th>
                            <th style="width: 15%">Dad No. </th>
                            <th style="width: 15%">Mum No. </th>
                            <th style="width: 15%">Gender </th>
                            <th style="width: 15%"></th>
                    </tr>
                  </thead>
                  <tbody>
         <?php
 $sql="SELECT * FROM students WHERE class= 'S.S.S 3'";
 $result_set=query($sql);
 while($row= mysqli_fetch_array($result_set))
 {
  ?>                
                    <tr>
                       <td><?php echo $row['AdminID'] ?></td>
                                                    <td><?php echo $row['SurName'] ?></td>
                                                    <td><?php echo $row['Middle Name'] ?></td>
                                                    <td><?php echo $row['Last Name'] ?></td>
                                                    <td><?php echo $row['Department'] ?></td>
                                                    <td><?php echo $row['Telephone1'] ?></td>
                                                    <td><?php echo $row['Telephone2'] ?></td>
                                                    <td ><?php echo $row['Gender'] ?></td>
                                                    <?php echo '
                                                    <td ><a href="./more?id='.$row['AdminID'].'">View Full Profile</a></td>';
                                                    ?>
                    </tr>
                    <?php
                  }
                  ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
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