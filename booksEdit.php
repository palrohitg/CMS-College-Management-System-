  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

<html>

<head>
<script type="text/javascript" language="javascript">
    function validation()
	{
	  var title=document.myform.title.value;
	  if(title=="")
	  {
		  alert("Title should not be empty");
		  return false;
	  }
	  len=title.length;
	  for(i=0;i<len;i++)
	  {
		  x=title.charAt(i);
		  if(!((x>='A'&& x<='Z')||(x>='a'&& x<='z')))
		  {
			  alert("TITLE must be contain character only!");
			  return false;
		  }
	  }
	  
	  return true;
	}

   </script> 
   </head>
   <body>
<?php
   if(!isset($_REQUEST['Submit']))
 {
	
   $link=mysqli_connect("localhost","root","","vikasproject");
   $ID=$_REQUEST['books'];
   $result=mysqli_query($link,"SELECT *FROM books WHERE BooksId='$ID'");
   if($result)
   {
   	while($row=mysqli_fetch_assoc($result))
   	{
   $Id=$row['BooksId'];		
   $CategoryId=$row['CategoryId'];
   $Title=$row['Title'];
   $Author=$row['Author'];
   $IsIssued=$row['IsIssued'];
   $BookCode=$row['BookCode'];
     
   	echo"
    <div class='container'>
	<form class='form-control' name='myform' 'action='facultySubjectEdit.php' method='Post' onSubmit='return validation();'>
   		<LABEL>CategoryId</LABEL>
      <input type='text' name='categoryid' value='$CategoryId'><br>
      <LABEL>TITLE</LABEL>
      <input type='text' name='title' value='$Title'><br>
      <LABEL>Author</LABEL>
      <input type='text' name='author' value='$Author'><br>
      <LABEL>IsIssued</LABEL>
      <input type='text' name='issued' value='$IsIssued'><br>
      <LABEL>BookCode</LABEL>
      <input type='text' name='author' value='$BookCode'><br>
       <input type='hidden' name='id' value='$Id'><br>
   		<input type='Submit' name='Submit' value='Update'/>
   		
   	</form>
    </div>";

 
	}
	
   }
   
 }
 else
 {
 	$link=mysqli_connect("localhost","root","","vikasproject");
   $id=$_REQUEST['categoryid'];
  $studentid=$_REQUEST['title'];
  $streamid=$_REQUEST['author'];
  $dated=$_REQUEST['dated'];
  
     $result=mysqli_query($link,"UPDATE attendance SET StudentId='$studentid',StreamId='$streamid',Dated='$dated' WHERE AttendanceId='$id'");
     if($result)
     {
     	header("location:attendanceShowAll.php");
     }
 }

 ?>
 </body>
 </html>