<!DOCTYPE html>
<html>
<head>
  <title>Grievance_Details</title>
</head>
<link rel="stylesheet" type="text/css" href="admin.css"><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<body>
    <div id="header" style="background-color:#FFDE00;color: #006680;font-size:18px;" ><p style="float :left;padding-right:20px;padding-left:550px;margin-top:25px;">Shanmuga Industries Arts & Science College - Admin</p>
       <img src="img\adm.png" width="60px;" style="margin-top: 5px;"> 
   </div>
    <div id="cont">
      <div id="left">
      <div style="background-color:#006680;padding:16px;font-family:arial;color: white;margin-top:0px; text-align: center;">
      <b><label>Mange Complaints</label></b>
       </div>
           <ul><li><a href="ncomp.php">New Complaints</li></a>
        <li><a href="bcomp.php">Bending Complaints</li></a>
        <li><a href="ccomp.php">Closed Complaints</li></a>
        <li><a href="ucomp.php">complaints Details</li></a>
                <li><a href="adm.php">Back to home</li></a>
        <li><a href="index.php">Logout</li></a></ul>
      </div>
      <?php
        $con= mysqli_connect('localhost','root','');
      mysqli_select_db($con,'user');
      //echo"data base connected...";
      $sql="SELECT * from comp where act='Closed'";
      $records=mysqli_query($con,$sql);
    ?>    
    <div class="container" style="padding-left:10px">
  <h2> Closed Complaint Data </h2>
  <p>Student's Grivance Details</p>            
  <table class="table table-hover" style="width:auto">
    <thead>
      <tr>
        <th>Complaint No</th>
        <th>Name of the Student</th>
        <th>Categories</th>
        <th>Types</th>
        <th>DateOF Complaint</th>
        <th>Department</th>
        <th>Description</th>
        <th>uploads</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
 <?php
  while($user=mysqli_fetch_assoc($records))
  {
    echo "<tr>";
    echo "<td>".$user['id']."</td>";
    echo "<td>".$user['nog']."</td>";
    echo "<td>".$user['rno']."</td>";
    echo "<td>".$user['cat']."</td>";
    echo "<td>".$user['type']."</td>";
    echo "<td>".$user['date']."</td>";
    echo "<td>".$user['depart']."</td>";
    echo "<td>".$user['subject']."</td>";
    echo "<td>".$user['file']."</td>";
    echo "<td>".$user['act']."</td>";
  } echo "</tr>";
    
?>
    
      </tr>
      
      
    </tbody>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
       

  </table>

</body>
</html>