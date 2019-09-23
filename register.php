<!DOCTYPE html>
<html>
<head>
	<title>Register Php Page</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
 <body class=".bg-dark">

 	  <div class="container" style="margin-top:100px;">
 	  <div class="row justify-content-center">
 	  	<div class="col-md-6 col-md-offset-3" align="center">
 	  		
 	  		 <img src="images/student.png">
 	  		<form method="post" action="registeration.php">
 	 <input class="form-control" type="text" name="name" placeholder="Name..." required=""><br>
 	 <input class="form-control" type="email" name="email" placeholder="Email..." required=""><br>
 	 <input class="form-control" type="password" name="password" placeholder="Enter password ..." required=""><br>
 	 <input class="form-control" type="password" name="conpassword" placeholder="Enter confirm password ..." required=""><br>
 	 <input class="btn btn-primary btn-lg" class="active" type="submit" name="submit"  value="Register">
     </form>
 	 </div>
 	  </div>
 	</div>

</body>
</html>