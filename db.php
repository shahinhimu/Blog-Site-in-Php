<?php
	$server ="localhost";
	$user ="root";
	$password ="";
	$db ="login";

	$con = new mysqli($server,$user,$password,$db);

	if ($con->connect_error){
		echo "not success".$con->connect_error;
	}


  ?>