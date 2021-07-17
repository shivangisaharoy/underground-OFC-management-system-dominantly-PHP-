<!DOCTYPE HTML>
<html>
<link rel="stylesheet" typr="text/css" href="cascade.css">
<body background="q.jpg">
<center><h2>Event Details</h2></center>
<br>

<?php
include("process/dbh.php");

$bsid=$_POST["bsid"];
$cid=$_POST["cid"];
$fnum=$_POST["fnum"];
$etype=$_POST["etype"];
$dab=$_POST["dab"];
$dba=$_POST["dba"];



$querys = "insert into detail(bsid,cid,fnum,etype,dab,dba) values('$bsid','$cid','$fnum','$etype','$dab','$dba')";
$result = mysqli_query($conn,$querys);

?>

<h3> Cable-Fibre Events information is inserted successfully </h3>

<center><a Class="btn" href="eventdetail.php"> Add More Event Details </a></center><br>
<a Class="btn" href="aloginwel.php"> Back To Main Menu </a>


</body>
</html>