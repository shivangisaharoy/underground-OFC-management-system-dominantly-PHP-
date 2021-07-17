<!DOCTYPE HTML>
<html>
<link rel="stylesheet" typr="text/css" href="cascade.css">
<body background="q.jpg">
<center><h2>Add Cable Information</h2></center>
<br>

<?php
include("process/dbh.php");


$cid=$_POST["cid"];
$bsid=$_POST["bsid"];



$querys = "insert into fibre(cid,bsid) values('$cid','$bsid')";
$result = mysqli_query($conn,$querys);

?>

<h3> Cable information is inserted successfully </h3>

<center><a Class="btn" href="fibre.php"> Add More Cable Details </a></center><br>


<a Class="btn" href="aloginwel.php"> Back To Main Menu </a>


</body>
</html>