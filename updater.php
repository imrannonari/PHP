<?php
$nme=$_POST['name'];
$pwd=$_POST['pwd'];
$cont=$_POST['contact'];
$addr=$_POST['addr'];
echo $nme." <br>".$pwd."<br> ".$cont." <br>".$addr."<br>";
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
	$q="update gctk set name='$nme', pwd='$pwd', ctn='$cont', addr='$addr' where name='$nme'; ";
	$r=mysqli_query($c,$q);
	if($r){
		echo "data update";
	}
	else{
		echo "data is not updated";
	}
	}


?>
