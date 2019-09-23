<?php 
    session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<style>
body {
    background-image: url("images/Admin.jpg");
}
img {
  border-radius: 30%;
}
#wrong{
	align-content: center;
	background-color: green;
	font-family: monospace;
}
</style>
	<title>Admin login</title>
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
<?php

if(isset($_POST['submit']))
{
$userid=$_POST['userid'];
$password=$_POST['password'];
if($userid=='Admin' && $password=='Admin')
{    
	$_SESSION['loggedin']="Admin";
	header("location:Dashboard.php");
}
else{
	?>
    <div class="container">
    	<div class="row align-center ">
    	<div class="col-md-12 offset-md-1pfa text-center">
    		
    	<h1 class='alert alert-danger h4'>Invalid userid/password</h1>
    	</div>	
    	</div>
    </div>
	
	<?php

}
}

?>
<!DOCTYPE html>
<html>
<head>

	<title> Admin login </title>
	
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
 
        <div class="bt-img">
 <body>
 	  <div class="container" style="margin-top:100px;">
 	  <div class="row justify-content-center">
 	  	<div class="col-xl-6 col-xl-offset-3 text-center" id="dialog" title="Admin Login">&nbsp;<br>
 	   	  		<!--**********************Admin login Form Data******************************* -->

 	  		<form method="post" action="Adminlogin.php" >
 	  		 <img src="images/rohit.jpg" height="120px" style="width:200px height:150px">
 	  			<br><br>
            
 	  		<input class="form-control" type="text" name="userid" placeholder="AdminId..." required>&nbsp;&nbsp;&nbsp;&nbsp;<br>
 	  		<input class="form-control" type="password" name="password" placeholder="Admin Password ..." required>&nbsp;&nbsp;&nbsp;&nbsp;<br>
 	  		<input class="btn btn-danger btn-block" class="active" type="submit" name="submit"  value="Login">
            </form>
        
        </div>
 	</div>
 </div>

</body>
</html>
</head>
<body>

</body>
</html>
