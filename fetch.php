<?php
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
	$q ="select *from gctk";
	$r = mysqli_query($c,$q);
	if($r){
		echo "query executed";
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
  <table class="table table-borderd">
  <tr>
  	<td>Name</td>
  	<td>Password</td>
  	<td>Contact</td>
  	<td>Addres</td>
  </tr>
  <tr>
  <?php
  		while($row=mysqli_fetch_assoc($r))
  		echo "<td>".$row['name']."</td>";
  		echo "<td>".$row['pwd']."</td>";
  		echo "<td>".$row['ctn']."</td>";
  		echo "<td>".$row['addr']."</td>";
  		echo "<td> <td>";
		echo "<td> <td>";


  		



  ?>
  	</tr>
  </table>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<script src="js/jquery-1.11.3.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed --> 
	<script src="js/bootstrap.js"></script>
  </body>
</html>
<?php
	}
	else{
		echo "query not exicuted";
	}


	}
	




?>