<?php
// Establish a database connection
$con = mysqli_connect("localhost", "root", "", "user");
if (!$con) {
    die("Database connection failed: " . mysqli_connect_error());
}

// Retrieve form data from the database
$sql = "SELECT * FROM `comp` ";
$qry = mysqli_query($con, $sql);

while ($row = mysqli_fetch_assoc($qry)) {
    $id = $row['id'];
    $noc = $row['nog'];
    $rno = $row['rno'];
    $depart = $row['depart'];
    $file = $row['subject'];
    $act = $row['act'];
    $timestamp = time();
}

// Close the initial database connection
mysqli_close($con);
?>


<!DOCTYPE html>
<html>
<head>
	<title>Admin-Mail</title>
</head>
<style type="text/css">
	body
	{
		color: white;
		font-family: Arial;
	}
	td input{
		padding:5px;
		border-radius: 5px;
		color:#666666;

	}
	.btn
	{
		background-color: #00b33c;
		width:100px;
		height: 35px;
		border-radius: 3px;
	}
		.btn:hover
	{
		background-color:#006622;
		width:100px;
		height: 35px;
		border-radius: 3px;
		color: white;
	}
</style>
<body bgcolor="#003d66" >
<center><br><br><br>
	<h4>   <?php echo  "$rno"; ?> </h4>
	<form action="mail.php" method="post" name="form" autocomplete="off">
	<table>
		<tr><td>Yours Complaint No:</td> <td><input type="value"  value="<?php echo "$id"; ?>" ></td></tr>
       <tr> <td>Name:</td> <td><input type="text" name="name" value="<?php echo "$noc"; ?>" ></td></tr>
	   <tr> <td>Department:</td> <td><input type="text" name="depart" value="<?php echo "$depart"; ?>" ></td></tr>
		<tr><td><label for="phno" autofill="off">Phone No:</label></td>
		<td><input type="text" name="phno" required></td></tr>
		<tr> <td>Description:</td> <td><input type="text" name="subject" value="<?php echo "$file"; ?>" ></td></tr>
		
	</table>
	<input type="submit" name="submit" class="btn">
	</form>
</center>


</body>
</html>

</body>
</html>