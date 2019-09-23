	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->

<html>
<head>
   <script type="text/javascript" language="javascript">
    function validation()
	{
	  var title=document.myform.Name.value;
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
	echo"
	<div class='container'>
     	<form  class='form-group' action='facultySubjectAdd.php' name='myform' method='Post' onSubmit='return validation();'>
     		<table>
     			<ul>
	     <li><label>Id</label></li>
	    <input type='text' name='Id'><br>

	     <li><label>FacultyId</label></li>
	    <input type='text' name='FacultyId'><br>

	      <li><label>ClassId</label></li>
	    <input type='text' name='ClassId'><br>

	      <li><label>StudentId</label></li>
	    <input type='text' name='StudentId'><br>

	      <li><label>Subject</label></li>
	    <input type='text' name='Subject'><br>

           
         
</ul>
	     <input type='submit' name='Submit' Value='Add'>
	</table>
		</form>
	</div>
		";
}
else
{
	$link=mysqli_connect("localhost" ,"root" ,"","vikasproject");
      if(!$link)
   {
   	echo"database not connected".mysqli_connect_error();
   }
   	$Id=$_REQUEST['Id'];
	$FacultyId=$_REQUEST['FacultyId'];
	$ClassId=$_REQUEST['ClassId'];
	$StudentId=$_REQUEST['StudentId'];
	$Subject=$_REQUEST['Subject'];
	
	$result=mysqli_query($link,"INSERT INTO facultysubjects(FacultySubjectId,FacultyId,ClassId,StudentId,Subject) VALUES ('$Id','$FacultyId','$ClassId','$StudentId','$Subject')");
	if($result)
	{
		header("location:facultySubjectShowAll.php");
	}
	
	
	
}

?>
</body>
</html>