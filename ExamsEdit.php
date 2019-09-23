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
   $ID=$_REQUEST['Exams'];
   $result=mysqli_query($link,"SELECT *FROM exams WHERE ExamId='$ID'");
   if($result)
   {
   	while($row=mysqli_fetch_assoc($result))
   	{
      $TITLE=$row['Title'];
      $DATED=$row['Dated'];
   		$MAXMARKS=$row['MaxMarks'];
   		$ID=$row['ExamId'];
       echo "<div class='content-wrapper'>";
      echo "<div class='container-fluid'>";
      echo "<div class='row'>";
        //echo"<div class='col sm-2' background-color:'white'>";
        //echo "</div>";
      echo"<div class='card-body'>";
      
   	
   	
   	echo"
	<form  name='myform' 'action='ExamsEdit.php' method='Post' onSubmit='return validation();'>
  <table>
      <ul> 
      <h1>Edit Marks Details</h1><br>
      
   		<li><LABEL>TITLE</LABEL></li>
      <input type='text' name='title' value='$TITLE'><br>
      <li><LABEL>DATED</LABEL></li>
      <input type='text' name='dated' value='$DATED'><br>
      <li><LABEL>MAXMARKS</LABEL></li>
   		<input type='text' name='maxmarks' value='$MAXMARKS'><br>
   		<input type='hidden' name='id' value='$ID'><br>
   		<input type='Submit' name='Submit' value='Update'/>
   		<table>
      <ul>
   	</form>";
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
     $TITLE=$_REQUEST['title'];
     $DATED=$_REQUEST['dated'];
     $MAXMARKS=$_REQUEST['maxmarks'];
     $ID=$_REQUEST['id'];
     $result=mysqli_query($link,"UPDATE exams SET Title='$TITLE', Dated='$DATED',MaxMarks='$maxmarks'  WHERE ExamId='$ID'");
     if($result)
     {
     	header("location:ExamsShowAll.php");
     }
 }

 ?>
 </body>
 </html>