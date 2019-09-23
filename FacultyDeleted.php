<?php
    $link=mysqli_connect("localhost","root","","vikasproject");
	$id=$_GET['Search'];
	$result=mysqli_query($link,"DELETE  FROM faculty where FacultyId='$id'");	
?>