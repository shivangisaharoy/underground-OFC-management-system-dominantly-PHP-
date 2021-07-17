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
</head>

<body background="q.jpg">
<center>
    <h1>Alter Block Section Details</h1>
<header>
        <nav>
            <h1>(CONFIDENTIAL  DATA)</h1>
            <ul id="navli">
               <a class="btn" href="aloginwel.php">Back To Main Menu</a><br><br>
		<a class="btn" href="view1.php">View Database</a><br>
				
            </ul>
        </nav>
    </header>
    
    <div class="divider"></div>




    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    
                    <form action="apro.php" method="POST" enctype="multipart/form-data">


 <table border="2" align="center" cellpadding="5" cellspacing="5">
<tr>
<td>For Block Section ID</td>
<?php
echo "Select Block Section ID";
$mysqli=NEW MySQLi('localhost','root','','DBname');
$resultSet=$mysqli->query("select bsid from stations");
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
<td>Change Station FROM Location</td>
<td> <input type="text" name="sfrom" size="48"> </td>
</tr>
<tr>
<td>Change Station TO Location</td>
<td> <input type="text" name="sto" size="48"> </td>
</tr>
<tr>
<td>Change Distance</td>
<td> <input type="text" name="distance" size="48"> </td>
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

