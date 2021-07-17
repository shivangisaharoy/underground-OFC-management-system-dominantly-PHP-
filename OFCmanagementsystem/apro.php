<!DOCTYPE HTML>
<html>
<link rel="stylesheet" typr="text/css" href="cascade.css">
<body background="q.jpg">
<center><h2>Alter Station Information</h2></center>
<br>

<?php
include("process/dbh.php");

$bsid=$_POST["bsid"];
$sfrom=$_POST["sfrom"];
$sto=$_POST["sto"];
$distance=$_POST["distance"];



$querys = "update stations set sfrom='$sfrom',sto='$sto',distance='$distance' where bsid='$bsid'";
$result = mysqli_query($conn,$querys);

?>

<h3> Altered successfully </h3>


<a class="btn" href="view1.php">View Database</a><br><br>
<a class="btn" href="aloginwel.php"> Back To Main Menu </a>


</body>
</html>