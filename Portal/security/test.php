<?php
$conn = mysqli_connect("localhost","root","","paradise school cms");

$new = md5("securitysecured");

 $sql = "INSERT into security(`identifier`)";
 $sql.= "VALUES('$new')";
 $result = mysqli_query($conn, $sql);
  ?>