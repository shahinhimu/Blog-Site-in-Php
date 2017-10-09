<?php
	$server="localhost";
	$user="root";
	$pass="";
	$db="data";

	$con = new mysqli($server,$user,$pass,$db);
	if ($con->connect_error){
		echo "not success".$con->connect_error;
	}
	
  ?>