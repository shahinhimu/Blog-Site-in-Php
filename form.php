<!DOCTYPE html>
<html>
	<head>
		 <meta charset="utf-8">
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <meta name="viewport" content="width=device-width, initial-scale=1">
		 <title>index</title>
		 <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		 <link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		<div class="container">


			<div class="col-md-offset-4 col-md-4" id="himu">
				<div class="alert alert-warning" role="alert">Please Login And Register</div>

				<form method="post" action="process.php">
				  <div class="form-group">
				    <label for="exampleInputEmail1">Username:</label>
				    <input type="text" name="username" class="form-control" id="exampleInputEmail1" placeholder="Username">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputPassword1">Password:</label>
				    <input type="password" name="password"  class="form-control" id="exampleInputPassword1" placeholder="Password">
				  </div>
				  <button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>
			    </form>
		    </div>
		</div>
		<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
	</body>
</html>