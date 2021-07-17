<!DOCTYPE HTML>
<html>
<link rel="stylesheet" typr="text/css" href="cascade.css">
<body background="q.jpg">
<center><h2>Delete Record : Event Details</h2></center>
<br>

<?php
include("process/dbh.php");


$srno=$_POST["srno"];




$querys = "DELETE FROM detail WHERE srno='$srno';";
$result = mysqli_query($conn,$querys);

?>

<h3>successfully deleted record!</h3>

<center><a class="btn" href="view4.php"> view database </a></center><br><br>
<a class="btn" href="vd.php"> back to view and delete records </a><br><br>

<a class="btn" href="aloginwel.php"> Back To Main Menu </a>


</body>
</html>