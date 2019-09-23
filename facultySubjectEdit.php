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
   $ID=$_REQUEST['Faculty'];
   $result=mysqli_query($link,"SELECT *FROM facultysubjects WHERE FacultySubjectId='$ID'");
   if($result)
   {
   	while($row=mysqli_fetch_assoc($result))
   	{
   $Id=$row['FacultySubjectId'];		
   $FacultyId=$row['FacultyId'];
   $ClassId=$row['ClassId'];
   $StudentId=$row['StudentId'];
   $Subject=$row['Subject'];
   
   	echo"
    <div class='container'>
	<form class='form-control' name='myform' 'action='facultySubjectEdit.php' method='Post' onSubmit='return validation();'>
   		<LABEL>FacultyId</LABEL>
      <input type='text' name='facultyid' value='$FacultyId'><br>
      <LABEL>ClassId</LABEL>
      <input type='text' name='classid' value='$ClassId'><br>
      <LABEL>Gender</LABEL>
      <input type='text' name='studentid' value='$StudentId'><br>
      <LABEL>Subject</LABEL>
      <input type='text' name='subject' value='$Subject'><br>
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
   $id=$_REQUEST['id'];
  $facultyid=$_REQUEST['facultyid'];
  $classid=$_REQUEST['classid'];
  $studentid=$_REQUEST['studentid'];
  $subject=$_REQUEST['subject'];
     $result=mysqli_query($link,"UPDATE facultysubjects SET FacultyId='$facultyid',ClassId='$classid',StudentId='$studentid',Subject='$subject' WHERE FacultySubjectId='$id'");
     if($result)
     {
     	header("location:facultySubjectShowAll.php");
     }
 }

 ?>
 </body>
 </html>