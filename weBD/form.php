<?php
	$server="localhost";
	$username="root";
	$password="";


	$con=mysqli_connect($server, $username, $password);

	if(!$con){
		die("connection to this database failed due to".mysql_connect_error());
	}
	
	
	//echo "Success connecting to the db";

	$NAME=$_POST['Name'];
	$EMAIL=$_POST['Email'];
	$AGE=$_POST['age'];
	$MESSAGE=$_POST['message'];

	$sql="INSERT INTO `hackoff3`.`hackoff3` (`NAME`, `EMAIL`, `AGE`, `MESSAGE`) VALUES ('$Name', '$Email', '$age', '$message');";
	echo $sql;



?>