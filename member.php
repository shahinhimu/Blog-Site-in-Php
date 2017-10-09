<?php
	session_start();
	if (!$_SESSION['user']) {

		header('Location:form.php');
		
	}else{

		echo "Wellcome".$_SESSION['user']."<br />";

		echo "<a href='logout.php'>Log Out</a>";
	}


  ?>