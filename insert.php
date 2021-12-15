


<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class ="col-lg-6 m-auto">
<a href="./display.php"><button class="btn-info btn">Dashboard</button></a>
<form method="post">
	
	<br><br><div class="card">
		<div class="card-header bg-dark">
			<h1 class="text-white text-center"> Insert Operation</h1>
		</div><br>
		<label> Username: </label>
		<input type="text" name="username" class="form-control"><br>

		<label> Password: </label>
		<input type="text" name="password" class="form-control"><br>
    <input type="submit" value="Submit" name="Submit">

		</div>
	</form>
 </div>


<?php
include_once("conn.php");
if(isset($_POST['Submit']))
{
	$username=$_POST['username'];
	$password=$_POST['password'];
	$q="INSERT INTO crudtable(username,password)VALUES('$username','$password')";


 $query= mysqli_query($conn,$q);


}


?>

	</body>
	</html>
