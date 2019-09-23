<?php 
  $link=mysqli_connect("localhost","root","","vikasproject");
  $ID=$_GET['Search'];
  $BookName=$_GET['BookName'];
  $Author=$_GET['Author'];
  $Title=$_GET['Title'];
  $BookCode=$_GET['BookCode'];
  $IssuedDate=$_GET['IssuedDate'];
  $ReturnDate=$_GET['ReturnDate'];
  $Code=$_GET['Code'];
  /*$Branch=$_GET['Branch'];
  $Returnedcheckbox= (!empty($_REQUEST['Returnedcheckbox']))? $_REQUEST['Returnedcheckbox']:0;*/
  $result=mysqli_query($link,"UPDATE libraryfaculty SET Name='$BookName',Author='$Author',Title='$Title',IssueDate='$IssuedDate',ReturnDate='$ReturnDate',Code='$BookCode' WHERE FacultyID='$ID' AND Code='$Code'");
   ?>