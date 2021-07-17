<!DOCTYPE HTML>
<html>
<link rel="stylesheet" typr="text/css" href="cascade.css">
<body background="q.jpg">
<center><h2>Check Event Details</h2></center>
<br>

<?php
include("process/dbh.php");

$search1 = $_REQUEST["bsid"];
$search = $_REQUEST["cid"];





$query = "select cid,bsid,fnum,etype,dab,dba from detail where cid='$search' and bsid='$search1'"; 
$result = mysqli_query($conn,$query);

if(mysqli_num_rows($result)>0)

{
?>

<table border="2" align="center" cellpadding="5" cellspacing="5">

<tr>
<th> Block Section Id </th>
<th> Cable Id </th>
<th> Fibre Number </th>
<th> Event Type </th>
<th> Distance A to B </th>
<th> Distance B to A </th>
</tr>

<?php while($row = mysqli_fetch_assoc($result))
{
?>
<tr>
<td><?php echo $row["bsid"];?> </td>
<td><?php echo $row["cid"];?> </td>
<td><?php echo $row["fnum"];?> </td>
<td><?php echo $row["etype"];?> </td>
<td><?php echo $row["dab"];?> </td>
<td><?php echo $row["dba"];?> </td>

</tr>
<?php
}
}
else
echo "<center>No Data found in the Database by the name $search </center>" ;
?>
</table>

<a Class="btn" href="main.php"> View Total Loss </a><br><br>
<a Class="btn" href="aloginwel.php"> back to main menu </a>



</body>
</html>
<br>