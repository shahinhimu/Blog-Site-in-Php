<?php
 include 'head.php'; 
	session_start();
	if (!$_SESSION['user']) {
  	header('location:../form.php');
  }



?>


			<div class="col-md-offset col-md-6" id="himu">
			
			<form method="post" action="process.php">
			  <div class="form-group">
			    <label for="exampleInputEmail1">Username:</label>
			    <input type="text" name="username" class="form-control" id="exampleInputEmail1" placeholder="Username">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Password:</label>
			    <input type="password" name="password"  class="form-control" id="exampleInputPassword1" placeholder="Password">
			  </div>
			  <button type="submit" name="submit" class="btn btn-primary btn-primary">Submit</button>
		    </form>
	    </div>


				
		</div>
		<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
	</body>
</html>