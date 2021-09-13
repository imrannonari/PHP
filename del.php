<?php
$name=$_GET['name'];
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
	$q="delete from gctk where name='$name';";
	$r=mysqli_query($c,$q);
	if($r){
		echo "record is deleted";
		header("location:fetch.php");
	}
	else{
		echo "record is not delted";
		}
	}
?>	
