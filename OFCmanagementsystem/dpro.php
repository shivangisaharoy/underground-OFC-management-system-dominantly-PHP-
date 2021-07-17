<!DOCTYPE HTML>
<html>
<link rel="stylesheet" typr="text/css" href="cascade.css">
<body background="q.jpg">
<center><h2>Alter Event Information</h2></center>
<br>

<?php
include("process/dbh.php");

$srno=$_POST["srno"];
$bsid=$_POST["bsid"];
$cid=$_POST["cid"];
$fnum=$_POST["fnum"];
$etype=$_POST["etype"];
$dab=$_POST["dab"];
$dba=$_POST["dba"];



$querys = "update detail set bsid='$bsid',cid='$cid',fnum='$fnum',etype='$etype',dab='$dab',dba='$dba' where srno='$srno'";
$result = mysqli_query($conn,$querys);

?>

<h3> Altered successfully </h3>


<a class="btn" href="view4.php">View Database</a><br><br>
<a class="btn" href="aloginwel.php"> Back To Main Menu </a>


</body>
</html>