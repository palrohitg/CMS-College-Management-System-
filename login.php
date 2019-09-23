
<!DOCTYPE html>
<html>
<head>
	<title>login Php Page</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
 <body>

 	  <div class="container" style="margin-top:100px;">
 	  <div class="row justify-content-center">
 	  	<div class="col-md-6 col-md-offset-3" align="center">
 	  		
 	  		 <img src="images/student.png">
 	  		<form method="post" action="validation.php">
            
 	  		<input class="form-control" type="email" name="email" placeholder="Email..." required><br>
 	  		<input class="form-control" type="password" name="password" placeholder="Enter password ..." required><br>
 	  		<input class="btn btn-primary btn-lg" class="active" type="submit" name="submit"  value="Login">
            </form>
            <h3>create an account? <a href="StudentAdd.php">Sign in</a></h3>
 	  	</div>
 	  </div>
 	</div>

</body>
</html>