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
   $ID=$_REQUEST['BookIssued'];
   $result=mysqli_query($link,"SELECT *FROM bookissued WHERE Issueid='$ID'");
   if($result)
   {
   	while($row=mysqli_fetch_assoc($result))
   	{
        $ID=$row['Issueid'];
   		$BOOKID=$row['BookId'];
      $ISSUEDATE=$row['IssueDate'];
      $RETURNDATE=$row['ReturnDate'];
   		$FINE=$row['Fine'];

   	
   	
   	echo"
	<form  name='myform' 'action='BookIssuedEdit.php' method='Post' onSubmit='return validation();'>
   		<LABEL>BOOKID</LABEL>
      <input type='text' name='bookid' value='$BOOKID'><br>
   		  <LABEL>ISSUEDATE</LABEL>
      <input type='text' name='issuedate' value='$ISSUEDATE'><br>
    <LABEL>RETURNDATE</LABEL>
      <input type='text' name='returndate' value='$RETURNDATE'><br>
    <LABEL>FINE</LABEL>
      <input type='text' name='fine' value='$FINE'><br>
    
   		<input type='hidden' name='id' value='$ID'>
   		<input type='Submit' name='Submit' value='Update'/>
   		
   	</form>";

 
	}
	
   }
   
 }
 else
 {
 	$link=mysqli_connect("localhost","root","","vikasproject");
     $BOOKID=$_REQUEST['bookid'];
     $ISSUEDATE=$_REQUEST['issuedate'];
     $RETURNDATE=$_REQUEST['returndate'];
     $FINE=$_REQUEST['fine'];
     $ID=$_REQUEST['id'];
     $result=mysqli_query($link,"UPDATE bookissued SET BookId='$BOOKID',IssueDate='$ISSUEDATE',ReturnDate='$RETURNDATE',fine='$FINE' WHERE Issueid='$ID'");
     if($result)
     {
     	header("location:BookIssuedShowAll.php");
     }
 }

 ?>
 </body>
 </html>