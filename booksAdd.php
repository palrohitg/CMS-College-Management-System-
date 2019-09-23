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
     	<form  class='form-group' action='booksAdd.php' name='myform' method='Post' onSubmit='return validation();'>
     		<table>
     			<ul>

	     <li><label>CategoryId</label></li>
	    <input type='text' name='CategoryId'><br>

	      <li><label>Title</label></li>
	    <input type='text' name='Title'><br>


	      <li><label>Author</label></li>
	    <input type='text' name='Author'><br>
              <li><label>IsIssued</label></li>
	    <input type='text' name='IsIssued'><br>

  <li><label>Bookcode</label></li>
	    <input type='text' name='Bookcode'><br>


           
         
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
   	
	$CategoryId=$_REQUEST['CategoryId'];
	$Title=$_REQUEST['TITLE'];
	$Author=$_REQUEST['Author'];
	$IsIssued=$_REQUEST['IsIssued'];
	$Bookcode=$_REQUEST['Bookcode'];
	
	
	
	$result=mysqli_query($link,"INSERT INTO books(CategoryId,Title,Author,IsIssued,Bookcode) VALUES ('$CategoryId','$Title','$Author','$IsIssued','$Bookcode')");
	if($result)
	{
		header("location:booksShowAll.php");
	}
	
	
	
}

?>
</body>
</html>