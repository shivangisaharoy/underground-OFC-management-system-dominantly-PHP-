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

<script>
function ddlselect1()
{
var d=document.getElementById("ddselect1");
var displaytext=d.options[d.selectedIndex].text;
document.getElementById("txtvalue1").value=displaytext;
}
</script>

<script>
function ddlselect2()
{
var d=document.getElementById("ddselect2");
var displaytext=d.options[d.selectedIndex].text;
document.getElementById("txtvalue2").value=displaytext;
}
</script>


<body background="q.jpg">
<center><h2>Database : Loss Details</h2></center>
<br>

<?php
include("process/dbh.php");






$query = "select bsid,cid,fnum,length,loss,util from loss"; 
$result = mysqli_query($conn,$query);




?>

<table border="2" align="center" cellpadding="5" cellspacing="5">

<tr>

<th> Block Section Id </th>
<th> Cable ID </th>
<th> Fibre Number </th>
<th> Length </th>
<th> Loss </th>
<th> Utilization </th>


</tr>

<?php while($row = mysqli_fetch_assoc($result))
{
?>
<tr>
<td><?php echo $row["bsid"];?> </td>
<td><?php echo $row["cid"];?> </td>
<td><?php echo $row["fnum"];?> </td>
<td><?php echo $row["length"];?> </td>
<td><?php echo $row["loss"];?> </td>
<td><?php echo $row["util"];?> </td>



</tr>
<?php
}


?>
</table>
<br>
<br>



<br><br>
<form action="delete3.php" method="POST" enctype="multipart/form-data">


<center>

<tr>
<td>Enter Block Section ID </td>

<?php
$mysqli=NEW MySQLi('localhost','root','','DBname');
$resultSet=$mysqli->query("select bsid from loss");
?>
<select id="ddselect" onchange="ddlselect();">
<?php
while($rows=$resultSet->fetch_assoc())
{
$bsid=$rows['bsid'];
echo "<option value='bsid'>$bsid</option>";
}
?>
</select>


<td> <input type="text" name="bsid" id="txtvalue" size="48"> </td>
</tr>
<tr>
<td>Enter Cable ID </td>

<?php
$mysqli=NEW MySQLi('localhost','root','','railtelco');
$resultSet=$mysqli->query("select cid from loss");
?>
<select id="ddselect1" onchange="ddlselect1();">
<?php
while($rows=$resultSet->fetch_assoc())
{
$cid=$rows['cid'];
echo "<option value='cid'>$cid</option>";
}
?>
</select>


<td> <input type="text" name="cid" id="txtvalue1" size="48"> </td>
</tr>
<tr>
<td>Enter Fibre Number</td>

<?php
$mysqli=NEW MySQLi('localhost','root','','railtelco');
$resultSet=$mysqli->query("select fnum from loss");
?>
<select id="ddselect2" onchange="ddlselect2();">
<?php
while($rows=$resultSet->fetch_assoc())
{
$fnum=$rows['fnum'];
echo "<option value='fnum'>$fnum</option>";
}
?>
</select>


<td> <input type="text" name="fnum" id="txtvalue2" size="48"> </td>
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
<center><a class="btn" href="c.php"> Alter This Table </a><br></center>


<a class="btn" href="vd.php"> back to view and delete records </a><br><br>
<a class="btn" href="aloginwel.php"> back to main menu </a>



</body>
</html>
<br>