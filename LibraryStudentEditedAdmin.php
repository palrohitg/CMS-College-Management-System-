<?php 
  $link=mysqli_connect("localhost","root","","vikasproject");
  $id=$_GET['Search'];
  $BookName=$_GET['BookName'];
  $Author=$_GET['Author'];
  $BookCode=$_GET['BookCode'];
  $IssuedDate=$_GET['IssuedDate'];
  $ReturnDate=$_GET['ReturnDate'];
 // $Branch=$_REQUEST['Branch'];
  //$Batch=$_REQUEST['Batch'];
  //$Returnedcheckbox= (!empty($_REQUEST['Returnedcheckbox']))? //$_REQUEST['Returnedcheckbox']:0;
  $result=mysqli_query($link,"UPDATE library SET Name='$BookName',Author='$Author',Code='$BookCode',IssuedDate='$IssuedDate',ReturnDate='$ReturnDate' WHERE RollNo='$id'");
?>