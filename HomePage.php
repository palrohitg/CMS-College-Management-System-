<?php// require_once("Include/TeacherForm.php");?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME PAGE</title>
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
					<li class="active"><a href="HomePage.php"><span class="glyphicon glyphicon-th"></span>&nbsp;Dashboard</a></li>
					<li><a href="Teacher.php"><span class="glyphicon glyphicon-user"></span>&nbsp;Teacher</a></li>
					
					<li><a href="Students.php"><span class="glyphicon glyphicon-pencil"></span>&nbsp;Students</a></li>
					<select>
						&nbsp;&nbsp;<option value="">Student register</option>
						&nbsp;&nbsp;<option value="">Student login</option>
					</select>
					<li><a href="Library.php"><span class="glyphicon glyphicon-book"></span>&nbsp;Library</a></li>
					<li><a href="Cirrculam.php"><span class="glyphicon glyphicon-list-alt"></span>&nbsp;Notice</a></li>
					<li><a href="Comments.php"><span class="glyphicon glyphicon-comment"></span>&nbsp;Comments</a></li>
					<li><a href="Logout.php"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Logout</a></li>
				</ul>
			</div>
			<div class="col-sm-9">

				<h1 class="marquee"><div>
					<marquee onmouseover="this.stop();" onmouseout="this.start();">
					COLLEGE MANAGEMENT SYSTEM BY VIKAS PAL</marquee></div></h1>
					
					
				</div>
			</div>
		</div>

	</body>
	</html>