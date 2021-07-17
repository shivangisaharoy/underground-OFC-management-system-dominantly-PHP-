<!DOCTYPE html>
<html>

<head>
   

    <!-- Title Page-->
    <title>Add Cable | Admin Panel</title>
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

   
</head>

<body background="q.jpg">
<center>
    <h1>Alter Loss Details</h1>
<header>
        <nav>
            <h1>(CONFIDENTIAL DATA) </h1>
            <ul id="navli">
               <a class="btn" href="aloginwel.php">Back To Main Menu</a><br><br>
<a class="btn" href="view3.php">View Database</a><br>
				
            </ul>
        </nav>
    </header>
    
    <div class="divider"></div>




    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    
                    <form action="cpro.php" method="POST" enctype="multipart/form-data">


 <table border="2" align="center" cellpadding="5" cellspacing="5">
<tr>
<td>For Block Section ID</td>
<?php
echo "Select Block Section Id";
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
<td>For Cable ID</td>
<?php
echo "Select Cable ID Id";
$mysqli=NEW MySQLi('localhost','root','','DBname');
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
<td>For Fibre Number</td>
<?php
echo "Select Fibre Number";
$mysqli=NEW MySQLi('localhost','root','','DBname');
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
</tr><br><br>
<tr>
<td>Change Length Details(in km)</td>
<td> <input type="text" name="length" size="48"> </td>
</tr>
<tr>
<td>Change loss Details(in dB)</td>
<td> <input type="text" name="loss" size="48"> </td>
</tr>
<tr>
<td>Change Utility Details</td>
<td> <input type="text" name="util" size="48"> </td>
</tr>


<tr>
<td></td>
<td>
<input type="submit" value="change">
<input type="reset" value="Reset">
</td>
</tr>
</table>

</form>
</center>
</body>

</html>

