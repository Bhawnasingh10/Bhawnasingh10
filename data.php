
<!DOCTYPE html>
<head>
  <title>data of Grivance</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 
</head>
<script type="text/javascript">
    function popwin()
    {
      window.open("imail.php", "myWindow", "width=600,height=800");
    }

</script>
<body>

<?php
$con=mysqli_connect("localhost","root","");
$db=mysqli_select_db($con,"user");
?>
<?php
$id=$_POST['id'];
$nog=$_POST['noc'];
$rno=$_POST['rno'];
$cat=$_POST['cat'];
$type=$_POST['type'];
$date=$_POST['date'];
$depart=$_POST['depart'];
$subject=$_POST['subject'];
$file=$_POST['file'];
$act=$_POST['act'];
$timestamp=time();

$sql="INSERT INTO `comp` VALUES ('$id','$nog','$rno','$cat','$type','$date','$depart','$subject','$file','$act','$timestamp')";
$qry=mysqli_query($con,$sql);

	if(!$qry)
	{
		echo mysqli_error($con);
	}
	else
	{
		// echo "Sucessfully Value inserted";
	}
?>

<?php
$sql="SELECT * FROM  `comp` ";
$qry=mysqli_query($con,$sql);
while ($row=mysqli_fetch_assoc($qry)) 
 {
 	$id=$row['id'];
	$noc=$row['nog'];
  $rno=$row['rno'];
	$cate=$row['cat'];
	$gtype=$row['type'];
	$date=$row['date'];
	$depart=$row['depart'];
	$dis=$row['subject'];
	$ufile=$row['file'];
  $act=$row['act'];
  $timestamp=time();
 }
?>


<div class="container">
  <h2> View Grivance </h2>
  <p>your's Grivance Details</p>            
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Complaint No</th>
        <th>Name Of The Student</th>
        <th>Student's Rollno</th>
        <th>Categories</th>
        <th>Types</th>
        <th>DateOF Complaint</th>
        <th>Department</th>
        <th>Description</th>
        <th>uploads</th>
        <th>Action</th>
        <th>timestamp</th>
      </tr>
    </thead>
    <tbody>
     <tr>
      
        <td><?php echo "$id"; ?></td>
        <td><?php echo "$noc"; ?></td>
        <td><?php echo "$rno"; ?></td>
        <td><?php echo "$cat"; ?></td>
        <td><?php echo "$type"; ?></td>
        <td><?php echo "$date"; ?></td>
        <td><?php echo "$depart"; ?></td>
        <td><?php echo "$subject"; ?></td>
        <td><?php echo "$file"; ?></td>
        <td><?php echo "$act"; ?></td>
        <td><?php echo "$timestamp"; ?></td>
      </tr>
    
    </tbody>
  </table><center>
<button  onclick="popwin()" class="btn btn-primary btn-sm">Submit</button></a>
        <button type="button" class="btn btn-warning"><a href="comp.php" style="text-decoration: none; color: white;" >Cancel</a></button><button type="button" class="btn btn-danger"><a href="logout.php" style="text-decoration: none; color: white;" > OK</a></button></center>
</div>

</body>
</html>
