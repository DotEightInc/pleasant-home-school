<?php

$conn = mysqli_connect("localhost","root","","paradise school cms");

  $cons = mysqli_query($conn,"SELECT * from staff");
  while ($row = mysqli_fetch_array($cons)) {
  $x = $row['tel1']." ".$row['tel2'];
  }

if (isset($_POST['submit'])) {
$a = urlencode('Greatnessabolade@outlook.com'); //Note: urlencodemust be added forusernameand
$b = urlencode('securemelikekilode'); // passwordas encryption code for security purpose.
$c = $_POST['msg'];
$d = "Paradise";
$e = $x;
$url = "https://portal.nigeriabulksms.com/api/?username=".$a."&password=".$b."&message=".$c."&sender=".$d."&mobiles=".$e;
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_HEADER, 0);
$resp = curl_exec($ch);
echo $resp; // Add double slash or delete “echo”
echo "<br>Thank you for using Interbound Media SMS API"; // Your notification message here
curl_close($ch);
} 
header("location: ./staffs");
?>