<?php 
$version=time();
$con = mysqli_connect("localhost","root","") or die (mysqli_error($con));
mysqli_select_db($con,"timesims") or die(mysqli_error($con));
?>