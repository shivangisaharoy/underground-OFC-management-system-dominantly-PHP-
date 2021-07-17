<!DOCTYPE HTML>
<html>
<link rel="stylesheet" typr="text/css" href="cascade.css">
<script>
function ddlselect()
{
var d=document.getElementById("ddselect");
var displaytext=d.options[d.selectedIndex].text;
document.getElementById("txtvalue").value=displaytext;
}
</script> 
<body background="q.jpg">
<center><h2>Database : Event Details</h2></center>
<br>

<?php
include("process/dbh.php");






$query = "select srno,bsid,cid,fnum,etype,dab,dba from detail"; 
$result = mysqli_query($conn,$query);




?>

<table border="2" align="center" cellpadding="5" cellspacing="5">

<tr>

<th> Serial Number </th>
<th> Block Section Id </th>
<th> Cable ID </th>
<th> Fibre ID </th>
<th> Event Type </th>
<th> Distance A to B </th>
<th> Distance B to A </th>


</tr>

<?php while($row = mysqli_fetch_assoc($result))
{
?>
<tr>
<td><?php echo $row["srno"];?> </td>
<td><?php echo $row["bsid"];?> </td>
<td><?php echo $row["cid"];?> </td>
<td><?php echo $row["fnum"];?> </td>
<td><?php echo $row["etype"];?> </td>
<td><?php echo $row["dab"];?> </td>
<td><?php echo $row["dba"];?> </td>



</tr>
<?php
}


?>
</table>
<br>
<br>



<br><br>
<form action="delete4.php" method="POST" enctype="multipart/form-data">


<center>

<tr>
<td>Enter Serial Number To Delete Record </td>
<?php
$mysqli=NEW MySQLi('localhost','root','','DBname');
$resultSet=$mysqli->query("select srno from detail");
?>
<select id="ddselect" onchange="ddlselect();">
<?php
while($rows=$resultSet->fetch_assoc())
{
$srno=$rows['srno'];
echo "<option value='srno'>$srno</option>";
}
?>
</select>
<td> <input type="text" name="srno" id="txtvalue" size="48"> </td>
</tr>




<tr>
<td></td>
<td>
<input type="submit" value="delete record">
<input type="reset" value="Reset">
</td>
</tr>
</center>

</form>
<br>
<center><a class="btn" href="d.php"> Alter This Table </a><br></center>



<a class="btn" href="vd.php"> back to view and delete records </a><br><br>
<a class="btn" href="aloginwel.php"> back to main menu </a>



</body>
</html>
<br>