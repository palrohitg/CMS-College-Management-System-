<?php 
    $link=mysqli_connect("localhost","root","","vikasproject");
	$id=$_GET['Search'];
	$Code=$_GET['BookCode'];
	$result=mysqli_query($link,"DELETE FROM Library Where RollNo='$id' AND Code='$Code'");
?>