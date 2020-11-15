<?php
session_start();
if (isset($_SESSION['Admin No.'])) {

?>
<?php include("functions/init.php"); ?>
<?php include("include/head.php"); ?>
<?php include("include/sidebar.php"); ?>
<?php include("include/topnav.php"); ?> 
        <!-- page content -->
        <div class="right_col" role="main">

          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Paradise Admin</h3>
              </div>

              
            </div>
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Admin Profile</h2>
                    <?php include("include/collapse.php"); ?>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <div class="col-md-7 col-sm-7 col-xs-12">
                      <div class="product-image">
                        <img src="images/profile.png" alt="profile picture" />
                      </div>
                      </div>
<?php

 $sql="SELECT * FROM admin";
 $result_set=query($sql);
 while($row= mysqli_fetch_array($result_set))
 {
  ?>     
                    <div class="col-md-5 col-sm-5 col-xs-12" style="border:0px solid #e5e5e5;">

                      <h3 class="prod_title">Email: <?php echo $row['Email'] ?> </h3>
                  <div class="x_content">                   

                      <div class="">
                        <div class="product_price">
                          <h1 class="price"><?php echo $row['Admin No.'] ?></h1>
                          <span class="price-tax">Password: <?php echo $row['Password'] ?></span>
                          <br>
                        </div>
                      </div>
<?php
 }
 ?>    
                     
                      <div class="product_social">
                        <ul class="list-inline">
                          <li title="Facebook"><a target="_blank" href="https://www.facebook.com/paradisemodelschool.com.ng"><i class="fa fa-facebook"></i></a>
                          </li>
                          <li title="Instagram"><a target="_blank" href="https://www.Instagram.com/paradise_model_school"><i class="fa fa-instagram"></i></a>
                          </li>
                          <li title="Info@paradisemodelschool.com.ng"><a href="#"><i class="fa fa-envelope"></i></a>
                          </li>
                          <li title="Website"><a target="_blank" href="http://www.paradisemodelschool.com.ng"><i class="fa fa-globe"></i></a>
                          </li>
                        </ul>
                      </div>

                    </div>


                   
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
       <?php include("include/footer.php"); ?>
        <!-- /footer content -->
      </div>
    </div>
<?php include("include/jquery.php"); ?>
  </body>
</html>
<?php
}
else{
  header("location:./login");
}

?>