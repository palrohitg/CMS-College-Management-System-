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
	 include'blank.html';
   $link=mysqli_connect("localhost","root","","vikasproject");
   $ID=$_REQUEST['Attendance'];
   $result=mysqli_query($link,"SELECT *FROM attendance WHERE AttendanceId='$ID'");
   if($result)
   {
   	while($row=mysqli_fetch_assoc($result))
   	{
   $Id=$row['AttendanceId'];		
   $StudentId=$row['StudentId'];
   $StreamId=$row['StreamId'];
   $Dated=$row['Dated'];
   echo "<div class='content-wrapper'>";
   echo "<div class='container-fluid'>";
   echo "<div class='row'>";
     //echo"<div class='col sm-2' background-color:'white'>";
     //echo "</div>";
   echo"<div class='card-body'>";
   
     
   	echo"
    
	<form class='form-control' name='myform' 'action='facultySubjectEdit.php' method='Post' onSubmit='return validation();'>
             <h1>Attendance Edit </h1><br>
      <ul>
   		<li><LABEL>StudentId</LABEL></li>
      <input type='text' name='studentid' value='$StudentId'><br>
      <li><LABEL>StreamId</LABEL></li>
      <input type='text' name='streamid' value='$StreamId'><br>
      <li><LABEL>Dated</LABEL></li>
      <input type='text' name='dated' value='$Dated'><br>
       <input type='hidden' name='id' value='$Id'><br>
   		<input type='Submit' name='Submit' value='Update'/>
   		<ul>
   	</form>
    ";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    

 
	}
	
   }
  
 }
 else
 {
 	$link=mysqli_connect("localhost","root","","vikasproject");
   $id=$_REQUEST['id'];
  $studentid=$_REQUEST['studentid'];
  $streamid=$_REQUEST['streamid'];
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