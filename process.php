<?php 
	session_start();
	include "db.php";

	if (isset($_POST["submit"])){
		$username =$_POST["username"];
		$password =md5($_POST["password"]);

		$sql ="SELECT * FROM  `in`";
		$result=$con->query($sql);
		while($data = $result->fetch_assoc()){
			$a = $data['username'];
			$b = $data['password'];
		}
		if ($username===$a && $password===$b){
			$_SESSION['user'] = $username;
			header('Location:data/form.php');

		}else{
			echo "no match data";
		}
		
	}





 ?>