<?php 
    include "db.php";

	if(isset($_POST["submit"])){
		
		$username=$_POST["username"];
		$password =md5($_POST["password"]);
		
		$sql="INSERT INTO inf(username,password) values ('$username','$password')";
		if($con->query($sql) === TRUE){
			echo "Inserted";
		}

	}else{
		echo "not Inserted data";
		header("Location: form.php");
	}