<!DOCTYPE html>
<html>

<head>
   

    <!-- Title Page-->
    <title>Add Station | Admin Panel</title>
<link rel="stylesheet" typr="text/css" href="cascade.css">

    
</head>

<body background="q.jpg">
<center>
    <header>
        <nav>
            <h1>(CONFIDENTIAL DATA) h1>
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
                    <h2 class="title">Insert Block-Section Information</h2>
                    <form action="addstprocess.php" method="POST" enctype="multipart/form-data">


 <table border="2" align="center" cellpadding="5" cellspacing="5">
<tr>
<td>Block Section ID</td>
<td> <input type="text" name="bsid" size="48"> </td>
</tr>
<tr>
<td>Station From</td>
<td> <input type="text" name="sfrom" size="48"> </td>
</tr>
<tr>
<td>Station To</td>
<td> <input type="text" name="sto" size="48"> </td>
</tr>
<tr>
<td>Distance</td>
<td> <input type="text" name="distance" size="48"> </td>
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

