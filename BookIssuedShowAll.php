<!DOCTYPE html>
<html>
<head>
	<title>book issued page</title>
</head>
<body>
<div align="center">
	<a href="BookIssuedAdd.php">Add</a>
	<br>
	<br>
</div>
	<?php
         $link=mysqli_connect("localhost","root","","vikasproject");
         $result=mysqli_query($link,"SELECT *FROM bookissued");
         echo "<div align='center'>";
		 
         echo"<table border='1' >
	                      <tr>
		                       <th>ID</th>
		                       <th>BOOKID</th>
		                       <th>ISSUEDATE</th>
		                       <th>Edit</th>
                             <th>Delete</th>
                             <th>View</th>
	</tr>";
	echo "</div>";
         if($result)
         {
         	while($row=mysqli_fetch_assoc($result))
         	{
         		$ID=$row['Issueid'];
               $BOOKID=$row['BookId'];
         	   $ISSUEDATE=$row['IssueDate'];
         	     echo"
                  <tr>
                     <td>$ID</td>
                     <td>$BOOKID</td>
                     <td>$ISSUEDATE</td>
               <td><a href='BookIssuedEdit.php?BookIssued=$ID'>Edit</a></td>
               <td><a href='BookIssuedDelete.php?BookIssued=$ID'>Delete</a></td>
                  <td><a href='BookIssuedView.php?BookIssued=$ID'>View</a></td>
                  </tr>";
         		
         	}
         	echo "</table>";
         }

	?>
    
</body>
</html>