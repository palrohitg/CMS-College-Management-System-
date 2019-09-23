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
   		
         echo "<table border='1'>";
         echo "<tr><td>ID</td><td>$ID</td></tr>";
         echo "<tr><td>ISSUEDATE</td><td>$ISSUEDATE</td></tr>";
         echo "<tr><td>RETURNDATE</td><td>$RETURNDATE</td></tr>";
         echo "<tr><td>FINE</td><td>$FINE</td></tr>";
         echo "<form action ='BookIssuedDelete.php' method='Post'>
         <input type='hidden' name='id' value='$ID'>
         <input type='submit' name='Submit' value='Delete'>
          </form>";
		  echo "</table";
	}
}
}
else
{
	$link=mysqli_connect("localhost","root","","vikasproject");
	$id=$_REQUEST['id'];
	$result=mysqli_query($link,"DELETE FROM bookissued Where Issueid='$id'");
	if($result)
	{
		header("location:BookIssuedShowAll.php");
	}
	
	
}
?>
 	
