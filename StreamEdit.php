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
   $ID=$_REQUEST['Stream'];
   $result=mysqli_query($link,"SELECT *FROM streams WHERE StreamId='$ID'");
   if($result)
   {
   	while($row=mysqli_fetch_assoc($result))
   	{
        $ID=$row['StreamId'];
   		$TITLE=$row['Title'];
   		$CLASSID=$row['ClassId'];

   	
   	
   	echo"
	<form  name='myform' 'action='StreamEdit.php' method='Post' onSubmit='return validation();'>
   		<LABEL>TITLE</LABEL>
      <input type='text' name='title' value='$TITLE'><br>
   		  <LABEL>CLASSID</LABEL>
      <input type='text' name='classid' value='$CLASSID'><br>
    
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
     $STREAMID=$_REQUEST['classid'];
     $ID=$_REQUEST['id'];
     $result=mysqli_query($link,"UPDATE streams SET Title='$TITLE',ClassId='$CLASSID' WHERE StreamId='$ID'");
     if($result)
     {
     	header("location:StreamShowAll.php");
     }
 }

 ?>
 </body>
 </html>