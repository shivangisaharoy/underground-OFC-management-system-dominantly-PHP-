<!DOCTYPE HTML>
<html>
<link rel="stylesheet" typr="text/css" href="cascade.css">
<body background="q.jpg">
<center><h2>Alter Station Information</h2></center>
<br>

<?php
include("process/dbh.php");

$srno=$_POST["srno"];
$bsid=$_POST["bsid"];
$cid=$_POST["cid"];




$querys = "update fibre set bsid='$bsid',cid='$cid' where srno='$srno'";
$result = mysqli_query($conn,$querys);

?>

<h3> Altered successfully </h3>


<a class="btn" href="view2.php">View Database</a><br><br>
<a class="btn" href="aloginwel.php"> Back To Main Menu </a>


</body>
</html>