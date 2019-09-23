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
   $ID=$_REQUEST['Categories'];
   $result=mysqli_query($link,"SELECT *FROM categories WHERE CategorieId='$ID'");
   if($result)
   {
   	while($row=mysqli_fetch_assoc($result))
   	{
   		$TITLE=$row['Title'];
   		$ID=$row['CategorieId'];

   	
   	
   	echo"
	<form  name='myform' 'action='CategoriesEdit.php' method='Post' onSubmit='return validation();'>
   		<LABEL>TITLE</LABEL>
   		<input type='text' name='title' value='$TITLE'>
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
     $ID=$_REQUEST['id'];
     $result=mysqli_query($link,"UPDATE categories SET Title='$TITLE' WHERE CategorieId='$ID'");
     if($result)
     {
     	header("location:CategoriesShowAll.php");
     }
 }

 ?>
 </body>
 </html>