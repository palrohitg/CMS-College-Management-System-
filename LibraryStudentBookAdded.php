<?php
 $link=mysqli_connect("localhost" ,"root" ,"","vikasproject");
      if(!$link)
   {
   	echo"database not connected".mysqli_connect_error();
   }

   	$RollNo=$_GET['Search'];
   	$BookName=$_GET['BookName'];
	$Author=$_GET['Author'];
	$BookCode=$_GET['BookCode'];
	$IssueDate=$_GET['IssueDate'];
	$ReturnDate=$_GET['ReturnDate'];
	$Branch=$_GET['Branch'];
	$Semester=$_GET['Semester'];
	$Batch=$_GET['Batch'];
    $result=mysqli_query($link,"INSERT INTO library(RollNo,Name,Author,Code,IssuedDate,ReturnDate,Branch,Batch,Semester) VALUES ('$RollNo','$BookName','$Author' ,'$BookCode','$IssueDate','$ReturnDate' ,'$Branch','$Batch','$Semester')");
	 ?>