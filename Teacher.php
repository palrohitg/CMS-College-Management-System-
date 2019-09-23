<?php require_once("Include/DB.php");?>
<!DOCTYPE html>
<html>
<head>
	<title>TEACHER LOGIN PAGE</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script  src="js/jquery-3.3.1.min.js"></script>
	<script  src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="Adminstyle.css">
	</head>
<body>
	 <div class="container-fluid">
	 	<div class="row">
	 	 <div class="col-sm-3">
	 	 	<h1>vikas</h1>
			<hr>
	 	 	<ul id="Side_Menu" class="nav nav-pills nav-stacked">
	 	 		<li><a href="AdminPanel.php"><span class="glyphicon glyphicon-th"></span>&nbsp;Dashboard</a></li>
	 	 		<li class="active"><a href="Teacher.php"><span class="glyphicon glyphicon-user"></span>&nbsp;Teacher</a></li>
	 	 		<li><a href="Students.php"><span class="glyphicon glyphicon-pencil"></span>&nbsp;Students</a></li>
	 	 		<li><a href="Library.php"><span class="glyphicon glyphicon-book"></span>&nbsp;Library</a></li>
	 	 		<li><a href="Cirrculam.php"><span class="glyphicon glyphicon-list-alt"></span>&nbsp;Cirrculam</a></li>
	 	 		<li><a href="Notice.php"><span class="glyphicon glyphicon-bell"></span>&nbsp;Notice</a></li>
	 	 		<li><a href="Comments.php"><span class="glyphicon glyphicon-comment"></span>&nbsp;Comments</a></li>
	 	 	    <li><a href="Logout.php"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Logout</a></li>
			</ul>
	 	 </div>
	 	 <div class="col-sm-9">

	 	 	<h1 class="marquee"><div style="background-color:yellow;
			                                font-weight: bold;
											font-style:italic";>
	 	 		<marquee onmouseover="this.stop();" onmouseout="this.start();">
	 	 		 TEACHER LOGIN PAGE</marquee></div></h1>
	 	 		 <?php 
                   if(!isset($_POST['submit'])){
	 	 		 ?>
			     <form class="form-group" action="Teacher.php" method="post">
				 <label>TeacherID</label>
                  <input class="form-control"type="text" name="teacherid" value="Enter ID"/><br>
                  <label>Password</label>				 
				 <input class="form-control"type="password" name="teacherpassword" value="Enter password"/><br>
                 <input  class="btn btn-success btn-lg"type="submit" name="submit" value="login"/>
				 </form>
				 <?php
				 }
				 else{
				 	$teacherid=$_POST['teacherid'];
				 	$password=$_POST['teacherpassword'];
				 	if(($teacherid==1234)&&($password=="admin"))
				 	{
				 		echo"welcome";
				 	}
				 	else
				 	{
				 		echo"please enter the id and password";
				 	}
				 }				 
	 	        ?>	
	 	 	
	 	 </div>
	 </div>
	 </div>

</body>
</html>