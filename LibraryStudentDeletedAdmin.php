<?php 

    $link=mysqli_connect("localhost","root","","vikasproject");
	$id=$_REQUEST['Search'];
	$result=mysqli_query($link,"DELETE FROM Library Where RollNo='$id'");
	
 ?>