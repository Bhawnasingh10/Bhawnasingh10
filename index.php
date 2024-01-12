<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Welcome</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<style>
body{
    /* background-image: url("images/gyanlogo.jpg"); */
    background-position: center;
    background-size: 700px; 
    background-repeat: no-repeat; 
}

	.heading h1{
		color: #254aa5;
		font-size: 42px;
		font-weight: 700;
		margin-top: 6%;
	}
	.heading h4{
		color: black;
	}
	.card-body{
		display: flex;
		flex-direction: column;
	}

	.card{
		margin: auto;
		padding: 10px;
		margin: auto;
		margin-top: 10%;
		width: 60%;
		height: 350px;
		border: none;
		box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
	}
	.button{
		width:40%;
    padding: 10px;
    font-size: 18px;
  margin: auto;
    border: 1px solid grey;
    text-decoration: none;
    color: white;
	background-color: #254aa5;
	margin-top: 5%;
	border-radius: 10px;
	text-align: center;
	}
	.button:hover{
		background-color: #0e3584;
		color: #fff;
	}

	.card-body img{
		margin: auto;
	}

</style>
<body>
	<div class="Main">
	<div class="heading" style="text-align:center">
	<h1>Grievance Management system</h1>
	<h4>Login to your account</h4>
	</div>
	
	<div class="row">
  <div class="col">
    <div class="card">
      <div class="card-body">
        <img src="images/user.png" alt="" height="200px" width="200px" >
        <a href="login.php" class="button" > User Login</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <div class="card-body">
       <img src="images/admin.png" alt="" height="200px" width="200px">
        <a href="admin.php" class="button">Admin Login</a>
      </div>
    </div>
  </div>
</div>
	</div>


	
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>