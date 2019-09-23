<?php session_start() ;?>
<!DOCTYPE html>
<html>
<head>
	<style>
body {
    background-image: url("images/book.jpg");
}
img {
  border-radius: 30%;
}
</style>
	<title>Library login</title>
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
//$Notlogin="";
if(isset($_POST['submit']))
{
$userid=$_POST['userid'];
$password=$_POST['password'];
if($userid=='library' && $password=='library')
{    
	$_SESSION['Loggedin']="library";
	header("location:LibraryDashboard.php");
}
else{
	echo "Invalid userid/password";
}
}
else
{
	//echo;
}
?>
<!DOCTYPE html>
<html>
<head>
	<title> library login</title>
	
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
 <body>
        <div class="bt-img">
 	  <div class="container" style="margin-top:100px;">
 	  <div class="row justify-content-center">
 	  	<div class="col-xl-6 col-xl-offset-3" align="center" id="dialog" title="Library Login">&nbsp;<br>
 	  	 		<!--**********************library login Form Data******************************* -->

 	  		 <img src="images/library-icon.png" height="200" width="200"style="width:200px height:150px"><br><br>
 	  		<form method="post" action="Librarylogin.php">
            
 	  		<input class="form-control" type="text" name="userid" placeholder="LibraryId..." required>&nbsp;&nbsp;&nbsp;&nbsp;<br>
 	  		<input class="form-control" type="password" name="password" placeholder="Library Password ..." required>&nbsp;&nbsp;&nbsp;&nbsp;<br>
 	  		<input class="btn btn-danger btn-block" class="active" type="submit" name="submit"  value="Login">
            </form>
        </div>
 	  </div>
 	</div>
 </div>

</body>
</html>
