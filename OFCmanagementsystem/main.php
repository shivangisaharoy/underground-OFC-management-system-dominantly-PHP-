<!DOCTYPE html>
<html>

<head>
   

    <!-- Title Page-->
    <title>Fetch Information | Admin Panel</title>
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
    <h1>Fetch Loss Per Cable Information</h1>
    
    <div class="divider"></div>




    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    
                    
<form action="mainpro.php" method="POST" enctype="multipart/form-data">



<tr>
<td>Enter Block Section ID</td>

<?php
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
<input type="text" name="bsid" id="txtvalue" size="48">


</tr>



<tr>
<td></td>
<td>
<input type="submit" name="submit" value="submit">
<input type="reset" name="rename" value="Reset">
</td>
</tr>


</form>
<a class="btn" href="aloginwel.php">Back To Main Menu</a><br>
				
</center>
</body>

</html>

