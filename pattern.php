<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="./style.css">
  </head>
<body>
	<div class="container">
		<div class ="col-lg-12">
			<a href="insert.php"><button class="btn-info btn">Add New User</button></a>
			<br><br>
			<h1 class="text-warning text-center" > Display Table Data</h1>
			<br>
			<table class=" table table-striped table-hover table-bordered">
			
				<tr class="bg-dark text-white text-center">
					
                  <th>Username</th>
                
				   
				</tr >

<?php
//       include_once("conn.php");

	

//     $q="SELECT username from crudtable where Name like'A%' ";
   
// $query = /*mysqli_query($db, $sql) */ die( mysqli_error($conn));


    //$query= mysqli_query($conn,$q);

    include_once("conn.php"); 
	$q="select id,username from crudtable WHERE username like'A%'";


 $query= mysqli_query($conn,$q);
  
        while($res=mysqli_fetch_array($query))
        {
    
    
    
    ?>
                    <tr class=text-center>
                       
                        <td><?php echo $res['username'];?></td>
                        <!-- <td><?php echo $res['password'];?></td> -->
                        <td> <button class="btn-danger btn"> <a href="delete.php?id= <?php echo $res['id']; ?>" class="text-white" > Delete</a>
                        </button>
                         </td>
    
                         <td> <button class="btn-primary btn"> <a href="update.php?id= <?php echo $res['id']; ?>" class="text-white" > Update</a>
                        </button>
                         </td>
                     
                         </tr>
                         <?php
                         }



			
                     	?>
			</table>
		</div>
	</div>
<?php
include_once("conn.php"); 
	$q="SELECT username from crudtable WHERE username like'A%' ";
   

 $query= //mysqli_query($conn,$q);
 die( mysqli_error($conn));




?>
</body>
	</html>