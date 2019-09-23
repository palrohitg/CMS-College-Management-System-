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
   $ID=$_REQUEST['Subjects'];
   $result=mysqli_query($link,"SELECT *FROM subjects WHERE SubjectId='$ID'");
   if($result)
   {
   	while($row=mysqli_fetch_assoc($result))
   	{
   		$TITLE=$row['Title'];
   		$STREAMID=$row['StreamId'];

   	
   	
   	echo"
	<form  name='myform' 'action='SubjectsEdit.php' method='Post' onSubmit='return validation();'>
   		<LABEL>TITLE</LABEL>
      <input type='text' name='title' value='$TITLE'>
   		<LABEL>STREAMID</LABEL>
      <input type='text' name='streamid' value='$STREAMID'>
   		<input type='hidden' name='id' value='$ID'>
   		<input type='Submit' name='Submit' value='Update'/>
   		
   	</form>";

 
	}
	
   }
   
 }
 else
 {
 	$link=mysqli_connect("localhost","root","","vikasproject");
     $TITLE=$_REQUEST['title'];
     $STREAMID=$_REQUEST['streamid'];
     $ID=$_REQUEST['id'];
     $result=mysqli_query($link,"UPDATE subjects SET Title='$TITLE',StreamId='$STREAMID' WHERE SubjectId='$ID'");
     if($result)
     {
     	header("location:SubjectsShowAll.php");
     }
 }

 ?>
 </body>
 </html>