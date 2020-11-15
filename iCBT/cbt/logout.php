<?php
session_start();
include("functions/init.php");

session_unset();
header("location: ./");

// redirect("login.php");
?>