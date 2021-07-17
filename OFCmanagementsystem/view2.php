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
<center><h2>Database : Cable Details</h2></center>
<br>

<?php
include("process/dbh.php");






$query = "select srno,bsid,cid from fibre"; 
$result = mysqli_query($conn,$query);




?>

<table border="2" align="center" cellpadding="5" cellspacing="5">

<tr>
<th> Serial Number </th>
<th> Block Section Id </th>
<th> Cable ID </th>


</tr>

<?php while($row = mysqli_fetch_assoc($result))
{
?>
<tr>
<td><?php echo $row["srno"];?> </td>
<td><?php echo $row["bsid"];?> </td>
<td><?php echo $row["cid"];?> </td>



</tr>
<?php
}


?>
</table>
<br>
<br>



<br><br>
<form action="delete2.php" method="POST" enctype="multipart/form-data">


<center>

<tr>
<td>Enter Serial Number To Delete Record</td>
<?php
$mysqli=NEW MySQLi('localhost','root','','DBname');
$resultSet=$mysqli->query("select srno from fibre");
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
<input type="submit" value="delete">
<input type="reset" value="Reset">
</td>
</tr>
</center>

</form>
<br>
<center><a class="btn" href="b.php"> Alter This Table </a><br></center>

<a class="btn" href="vd.php"> back to view and delete records </a><br><br>
<a class="btn" href="aloginwel.php"> back to main menu </a>



</body>
</html>
<br>