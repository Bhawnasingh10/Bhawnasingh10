<!DOCTYPE html>
<html>
<head>
  <title></title>
</head><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script type="text/javascript">
    function popwin()
    {
      window.open("detail.php", "myWindow", "width=600,height=800");
    }

</script>
<body>
<?php
       $con=mysqli_connect('localhost','root','','user');
          mysqli_select_db($con, 'user');
      //echo"data base connected...";
      $sql="SELECT * from comp where act='Notyet'";
      $records=mysqli_query($con,$sql);
    ?>    
    <div class="container" style="padding-left:10px">
  <h2> View Grivance </h2>
  <p>Student's Grivance Details</p>            
  <table class="table table-hover" style="width:auto">
    <thead>
      <tr>
        <th>Complaint No</th>
        <th>Name of the Student</th>
        <th>Categories</th>
        <th>Types</th>
        <th>Date Of Complaint</th>
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
    echo "<td><a href=\"detail.php?id=".$user['id']."\"class='btn btn-warning'>action</a></td>";
  } echo "</tr>";
    
?>
    
      </tr>
      
      
    </tbody>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
       

  </table>
</div></div>
</body>
</html>