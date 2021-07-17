<!DOCTYPE HTML>
<html>
<link rel="stylesheet" typr="text/css" href="cascade.css">
<body background="q.jpg">
<center><h2>Delete Record : Block Section Details</h2></center>
<br>

<?php
include("process/dbh.php");


$bsid=$_POST["bsid"];




$querys = "DELETE FROM stations WHERE bsid='$bsid';";
$result = mysqli_query($conn,$querys);

?>

<h3>successfully deleted record!</h3>

<center><a class="btn" href="view1.php"> view database </a></center><br><br>
<a class="btn" href="vd.php"> back to view and delete records </a><br><br>

<a class="btn" href="aloginwel.php"> Back To Main Menu </a>


</body>
</html>