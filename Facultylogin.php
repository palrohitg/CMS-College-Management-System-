<!DOCTYPE html>
<html>
<head>
	<style>
body {
    background-image: url("images/hello.jpg");
}
img {
  border-radius: 40%;
}
strong{
	color: red;
}
</style>
	<title>Faculty login</title>
<link href="js/jquery-ui.min.css" rel="stylesheet"> 
	    
	    
	 	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	 	<script type="text/javascript" src="js/jquery-ui.min.js"></script>
  
	<script type="text/javascript">
		$(document).ready(function () {
		$('#dialog').dialog({
			autoOpen: true,
      show: {
        effect: "blind",
        duration: 1000
      },
      hide: {
        effect: "explode",
        duration: 1000
      }
		})
		});
	</script>     
	<title>Faculty login</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
 <body>

 	  <div class="container" style="margin-top:100px;">
 	  <div class="row justify-content-center">
 	  	<div class="col-xl-6 col-xl-offset-3" align="center">
 	  		<!--**********************Faculty login Form Data******************************* -->
 	  		<form method="post" action="Facultyvalidation.php" id="dialog" title="Faculty Login">
 	  		 <img src="images/teacher.jpg" style="width:80px height:80px align:center;"/>
            <br><br>
 	  		<input class="form-control" type="email" name="email" placeholder="Email..." required>&nbsp;&nbsp;&nbsp;&nbsp;<br>
 	  		<input class="form-control" type="password" name="password" placeholder="Enter password ..." required>&nbsp;&nbsp;&nbsp;&nbsp;<br>
 	  		<input class="btn btn-primary btn-block" class="active" type="submit" name="submit"  value="Login"><br>
            <b>Create an account ? <a href="FacultyAdd.php"><strong>Register here !</strong></a></b>
            </form>
 	  	</div>
 	  </div>
 	</div>

</body>
</html>