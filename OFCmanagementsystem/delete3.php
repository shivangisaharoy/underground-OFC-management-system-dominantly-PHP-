<!DOCTYPE HTML>
<html>
<link rel="stylesheet" typr="text/css" href="cascade.css">
<body background="q.jpg">
<center><h2>Delete Record : Loss Details</h2></center>
<br>

<?php
include("process/dbh.php");

$bsid=$_POST["bsid"];
$cid=$_POST["cid"];
$fnum=$_POST["fnum"];




$querys = "DELETE FROM loss WHERE cid='$cid' and bsid='$bsid' and fnum='$fnum';";
$result = mysqli_query($conn,$querys);

?>

<h3>successfully deleted record!</h3>

<center><a class="btn" href="view3.php"> view database </a></center><br><br>
<a class="btn" href="vd.php"> back to view and delete records </a><br><br>

<a class="btn" href="aloginwel.php"> Back To Main Menu </a>


</body>
</html>