<!DOCTYPE HTML>
<html>
<link rel="stylesheet" typr="text/css" href="cascade.css">
<body background="q.jpg">
<center><h2>Total Cable Loss Information</h2></center>
<br>

<?php
include("process/dbh.php");

$bsid=$_POST["bsid"];
$cid=$_POST["cid"];
$fnum=$_POST["fnum"];
$length=$_POST["length"];
$loss=$_POST["loss"];
$util=$_POST["util"];



$querys = "insert into loss(bsid,cid,fnum,length,loss,util) values('$bsid','$cid','$fnum','$length','$loss','$util')";
$result = mysqli_query($conn,$querys);

?>

<h3> Cable-Fibre Loss information is inserted successfully </h3>

<center><a Class="btn" href="eventloss.php"> Add More Cable-Fibre Loss Details </a></center><br>

<a Class="btn" href="aloginwel.php"> Back To Main Menu </a>


</body>
</html>