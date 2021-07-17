<!DOCTYPE HTML>
<html>
<link rel="stylesheet" typr="text/css" href="cascade.css">
<body background="q.jpg">
<center><h2>Alter Loss Information</h2></center>
<br>

<?php
include("process/dbh.php");

$bsid=$_POST["bsid"];
$cid=$_POST["cid"];
$fnum=$_POST["fnum"];
$length=$_POST["length"];
$loss=$_POST["loss"];
$util=$_POST["util"];



$querys = "update loss set length='$length',loss='$loss',util='$util' where bsid='$bsid' and cid='$cid' and fnum='$fnum'";
$result = mysqli_query($conn,$querys);

?>

<h3> Altered successfully </h3>


<a class="btn" href="view3.php">View Database</a><br><br>
<a class="btn" href="aloginwel.php"> Back To Main Menu </a>


</body>
</html>