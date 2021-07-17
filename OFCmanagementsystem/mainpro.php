<!DOCTYPE HTML>
<html>
<link rel="stylesheet" typr="text/css" href="cascade.css">
<body background="q.jpg">
<center><h2>Check Total Loss Per Cable</h2></center>
<br>

<?php
include("process/dbh.php");

$search = $_REQUEST["bsid"];





$query = "select stations.bsid,stations.sfrom,stations.sto,stations.distance,loss.cid,loss.fnum,loss.length,loss.loss,loss.util from fibre left join stations on fibre.bsid=stations.bsid left join loss on fibre.cid=loss.cid where fibre.bsid='$search'"; 
$result = mysqli_query($conn,$query);

if(mysqli_num_rows($result)>0)

{
?>

<table border="2" align="center" cellpadding="5" cellspacing="5">

<tr>
<th> Block Section Id </th>
<th> station_from(A) </th>
<th> station_to(B) </th>
<th> distance </th>
<th> Cable Id </th>
<th> Fibre Number </th>
<th> length </th>
<th> loss </th>
<th> utility </th>
</tr>

<?php while($row = mysqli_fetch_assoc($result))
{
?>
<tr>
<td><?php echo $row["bsid"];?> </td>
<td><?php echo $row["sfrom"];?> </td>
<td><?php echo $row["sto"];?> </td>
<td><?php echo $row["distance"];?> </td>

<td><?php echo $row["cid"];?> </td>
<td><?php echo $row["fnum"];?> </td>

<td><?php echo $row["length"];?> </td>
<td><?php echo $row["loss"];?> </td>
<td><?php echo $row["util"];?> </td>
</tr>
<?php
}
}
else
echo "<center>No Cable Id found in the Database by the name $search </center>" ;
?>
</table>


<h3> Check Detailed information of losses </h3>

<a Class="btn" href="hoppa.php"> View Events </a><br><br>
<a Class="btn" href="aloginwel.php"> back to main menu </a>


</body>
</html>
<br>