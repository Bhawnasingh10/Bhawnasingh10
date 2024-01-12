<?php
$con=mysqli_connect("localhost","root","","user");
//echo "Data base connceted";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Database</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body> 
  <div class="container">
<table style="  width: 600px; font-family:sans-serif;"  class="table table-hover">

<?php

  echo "<th>Complaint No</th>";
  echo "<th>Student Name</th>";
  echo "<th>Student's Rollno</th>";
  echo "<th>Categories of grivance</th>";
  echo "<th>Type of complaint</th>";
  echo "<th>Date of complaint</th>";
  echo "<th>Department</th>";
  echo "<th>Description</th>";
  echo "<th>File Uploads</th>";
  echo "<th>Action</th>";
  $rno=$_GET['rn'];
	$res= mysqli_query($con,$sql="SELECT * FROM comp where `rno`='$rno' " );
	while ($row=mysqli_fetch_array($res)) {
	$cn=$row[0];
  $noc=$row[1];
  $rno=$row[2];
	$cate=$row[3];
	$gtype=$row[4];
	$date=$row[5];
	$depart=$row[6];
	$dis=$row[7];
	$ufile=$row[8];
  $act=$row[9];

  
  
  echo "<tr > <td>$cn</td>";
  echo " <td>$noc</td>";
  echo " <td>$rno</td>";
  echo " <td>$cate</td>";
  echo " <td>$gtype</td>";
  echo " <td>$date</td>";
  echo " <td>$depart</td>";
  echo " <td>$dis</td>";
  echo " <td>$ufile</td>";
  echo " <td>$act</td></tr>";
 	}

?>

</table>
</div>
<center>
<button type="button" class="btn btn-danger"><a href="index.php" style="text-decoration: none; color: white;" >close</a></center>
</body>
</html>