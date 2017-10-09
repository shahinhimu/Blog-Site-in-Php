<?php 
		session_start();
	if (!$_SESSION['user']){
		header('Location:../form.php');
	}else{
		session_unset();
		header('Location:../form.php');
	}

 ?>