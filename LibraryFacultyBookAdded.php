<?php 
  $link=mysqli_connect("localhost" ,"root" ,"","vikasproject");
      if(!$link)
   {
    echo"database not connected".mysqli_connect_error();
   }
 
    $ID=$_GET['Search'];
    $BookName=$_GET['BookName'];
    $Author=$_GET['Author'];
    $Title=$_GET['Title'];
    $BookCode=$_GET['BookCode'];
    $IssueDate=$_GET['IssueDate'];
    $ReturnDate=$_GET['ReturnDate'];
    $Branch=$_GET['Branch'];
    $result=mysqli_query($link,"INSERT INTO libraryfaculty(FacultyID,Name,Title,Code,Author,IssueDate,ReturnDate,Branch) VALUES ('$ID','$BookName','$Title', '$BookCode','$Author' ,'$IssueDate','$ReturnDate' ,'$Branch')");
 ?>