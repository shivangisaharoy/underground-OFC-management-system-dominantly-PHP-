<!DOCTYPE HTML>
<html>
<link rel="stylesheet" typr="text/css" href="cascade.css">
<body background="q.jpg">
<center><h2>Add Station Information</h2></center>
<br>

<?php
include("process/dbh.php");

$bsid=$_POST["bsid"];
$sfrom=$_POST["sfrom"];
$sto=$_POST["sto"];
$distance=$_POST["distance"];


$query = "insert into stations(bsid,sfrom,sto,distance) values('$bsid','$sfrom','$sto','$distance')";
$result = mysqli_query($conn,$query);



?>

<h3> Station information is inserted successfully </h3>

<center><a Class="btn" href="addstation.php"> Add More Block Section Records </a></center><br>
<a Class="btn" href="aloginwel.php"> Back To Main Menu </a>


</body>
</html>