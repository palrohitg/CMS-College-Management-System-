<?php 
	$link=mysqli_connect("localhost","root","","vikasproject");
	$id=$_GET['Search'];
	$Code=$_GET['Code'];
	$result=mysqli_query($link,"DELETE FROM libraryfaculty Where FacultyID='$id' AND Code='$Code'");
?>