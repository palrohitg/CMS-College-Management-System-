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
	echo"
     	<form  action='BookIssuedAdd.php' name='myform' method='Post' onSubmit='return validation();'>
	     <label>BOOKID</label>
	    <input type='text' name='bookid'><br>
	     <label>ISSUEDATE</label>
	    <input type='text' name='issuedate'><br>
	     <label>RETURNDATE</label>
	    <input type='text' name='returndate'><br>
	     <label>FINE</label>
	    <input type='text' name='fine'><br>
	    
	    <input type='submit' name='Submit' Value='Add'>
		</form>
		";
}
else
{
	$link=mysqli_connect("localhost" ,"root" ,"","vikasproject");
	$BOOKID=$_REQUEST['bookid'];
	$ISSUEDATE=$_REQUEST['issuedate'];
	$RETURNDATE=$_REQUEST['returndate'];
	$FINE=$_REQUEST['fine'];
	$result=mysqli_query($link,"INSERT INTO bookissued(BookId,IssueDate,ReturnDate,fine) VALUES ('$BOOKID','$ISSUEDATE','$RETURNDATE','$FINE')");
	if($result)
	{
		header("location:BookIssuedShowAll.php");
	}
	
	
	
}

?>
</body>
</html>