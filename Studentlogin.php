<!DOCTYPE>
<html>
<head>
	<style>
body {
    background-image: url("images/study.jpg");
}
img {
  border-radius: 40%;
}
strong{
	color: red;
}
#wrong{
	align-content: center;
	background-color: green;
	font-family: monospace;
}
</style>


	
	<title>Student login</title>
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
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
 <body>
 	  		  <?php
 	  		      session_start();
 	  		      if(!empty($_SESSION['errormsg']))
 	  		      { 
 	  		      	$var= $_SESSION['errormsg'];
 	  		    echo "<script > alert('.$var.') </script>";
 	  	        unset($_SESSION['errormsg']);
 	  	      	   }
 	  		  ?>
 
 	  <div class="container" style="margin-top:100px;">
 	  <div class="row justify-content-center">
 	  	<div class="col-xs-6 col-xs-offset-3" align="center">
 	  		<div id="#wrong">	
 	  		</div>

 	  <!--********************** Student login Form Data ******************************* -->

 	  		<form method="post" action="Studentvalidation.php" id="dialog" title="Student Login">
 	  		 <img src="images/Students.png" style="width:80px height:80px,align:center">
 	  			<br><br>
            
 	  		<input class="form-control" type="email" name="email" placeholder="Email..." required>&nbsp;&nbsp;&nbsp;&nbsp;<br>
 	  		<input class="form-control" type="password" name="password" placeholder="Enter password ..." required>&nbsp;&nbsp;&nbsp;&nbsp;<br>
 	  		<input class="btn btn-danger btn-block" id="submit" class="active" type="submit" name="submit"  value="Login"><br>
           <!-- <b>Create an account ? <a href="StudentAdd.php"><strong>Register here!</strong></</a></b>-->
            </form>
 	  	</div>
 	  </div>
 	</div>
 </body>
</html>