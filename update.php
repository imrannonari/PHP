<?php
$name=$_GET['name'];
$cotn;
$pwd;
$addr;
$host="localhost";
$user="root";
$pwd="";
$db="gct";
$c=mysqli_connect($host,$user,$pwd,$db);
if(!$c){
	die("database is not connected<br>");
}
else{
	echo "database is connected<br>";
	$q="select * from gctk where name='$name';";
	$r=mysqli_query($c,$q);
	if($r){
		echo "record is selected";
		//header("location:fetch.php");
		if(mysqli_num_rows($r)>0){
		while($row=mysqli_fetch_assoc($r)){
			$pwd=$row['pwd'];
			$cotn=$row['ctn'];
			$addr=$row['addr'];

		}
			}
	}
	else{
		echo "record is not selected";
		}
	}
?>	
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login System</title>
    <!-- Bootstrap -->
	<link href="css/bootstrap.css" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
  </head>
  <body>
	  <br><br>
	  <div class="container">
	  	<div class="row">
			<div class="col-sm-3"></div>  
			<div class="col-sm-6">
			  <div class="well">
					<h1 class="text-center">User Registration</h1><hr>
					<form action="updater.php" method="post" name="form1" id="form1">
					  <p>
					    <label for="uname">User Name:</label>
					    <input name="name" type="text" required="required" class="form-control" id="uname" value="<?= $name ?>" readonly>
				      </p>
					  <p>
					    <label for="upwd">Password:</label>
                        <input name="pwd" type="password" required="required" class="form-control" id="upwd"  value="<?= $pwd ?>">
					  </p>
					  <p>
					    <label for="contact2">Contact:</label>
					    <input name="contact" type="text" required="required" class="form-control" id="contact"  value="<?= $cotn ?>">
					  </p>
					  <p>
					    <label for="addr2">Address:</label>
					    <input name="addr" type="text" required="required" class="form-control" id="addr"  value="<?= $addr ?>">
					  </p>
					  <p><hr>
					    <input name="reset" type="reset" class="btn btn-info" id="reset" value="Reset">
					    <input name="submit" type="submit" class="btn btn-primary" id="submit" value="Submit">
						
					  </p>
                </form>
						
				</div>
			</div>  
			<div class="col-sm-3"></div>  
		</div>
	  </div>
	  
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<script src="js/jquery-1.11.3.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed --> 
	<script src="js/bootstrap.js"></script>
  </body>
</html>