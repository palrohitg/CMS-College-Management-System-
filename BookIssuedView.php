<?php
$link=mysqli_connect("localhost" ,"root" ,"","vikasproject");
$ID=$_REQUEST['BookIssued'];
$result=mysqli_query($link,"Select *from bookissued where Issueid='$ID'");
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
         echo "<tr><td>BOOKID</td><td>$BOOKID</td></tr>";
         echo "<tr><td>ISSUEDATE</td><td>$RETURNDATE</td></tr>";
         echo "<tr><td>RETURNDATE</td><td>$ISSUEDATE</td></tr>";
         echo "<tr><td>FINE</td><td>$FINE</td></tr>";
		echo"</table>";

}	
}
?>
