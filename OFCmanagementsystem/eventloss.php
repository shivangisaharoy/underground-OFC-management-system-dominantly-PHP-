<!DOCTYPE html>
<html>

<head>
   

    <!-- Title Page-->
    <title>Event Loss | Admin Panel</title>
<link rel="stylesheet" typr="text/css" href="cascade.css">

    
</head>

<body background="q.jpg">
<center>
    <h1>Add Cable-Fibre Loss Details</h1>
    <header>
        <nav>
            <h1>CONFIDENTIAL DATA </h1>
            <ul id="navli">
               <a class="btn" href="aloginwel.php">Main Menu</a><br><br>
				<a class="btn" href="addstation.php">Add Block-Section Details</a><br><br>
				<a class="btn" href="fibre.php">Add Cable Details</a><br><br>
				<a class="btn" href="eventloss.php">Add Loss Details</a><br><br>
<a class="btn" href="eventdetail.php">Add Event Details</a><br><br>
            </ul>
        </nav>
    </header>
    <div class="divider"></div>




    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    
                    <form action="losspro.php" method="POST" enctype="multipart/form-data">


 <table border="2" align="center" cellpadding="5" cellspacing="5">
<tr>
<td>Block Section ID</td>
<td> <input type="text" name="bsid" size="48"> </td>
</tr>
<tr>
<td>Cable ID</td>
<td> <input type="text" name="cid" size="48"> </td>
</tr>
<tr>
<td>Fibre Number</td>
<td> <input type="text" name="fnum" size="48"> </td>
</tr>
<tr>
<td>length in km</td>
<td> <input type="text" name="length" size="48"> </td>
</tr>
<tr>
<td>loss in dB</td>
<td> <input type="text" name="loss" size="48"> </td>
</tr>
<tr>
<td>utilization</td>
<td> <input type="text" name="util" size="48"> </td>
</tr>


<tr>
<td></td>
<td>
<input type="submit" value="submit">
<input type="reset" value="Reset">
</td>
</tr>
</table>

</form>
</center>
</body>

</html>

