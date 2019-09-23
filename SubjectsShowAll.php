<!DOCTYPE html>
<html>
<head>
	<title>Subjects pages tables</title>
</head>
<body>
<div align="center">
	<a href="SubjectsAdd.php">Add</a>
	<br>
	<br>
</div>
	<?php
         $link=mysqli_connect("localhost","root","","vikasproject");
         $result=mysqli_query($link,"SELECT *FROM subjects ");
         echo "<div align='center'>";
		 
         echo"<table border='1' >
	                      <tr>
		                       <th>ID</th>
		                       <th>Title</th>
		                       <th>StreamId</th>
		                       <th>Delete</th>
                             <th>View</th>
		                       <th>Edit</th>
	</tr>";
	echo "</div>";
         if($result)
         {
         	while($row=mysqli_fetch_assoc($result))
         	{
         		$ID=$row['SubjectId'];
               $TITLE=$row['Title'];
         		$STREAMID=$row['StreamId'];
         	     echo"
                  <tr>
                     <td>$ID</td>
                     <td>$TITLE</td>
                     <td>$STREAMID</td>
                     <td><a href='SubjectEdit.php?Subjects=$ID'>Edit</a></td>
                     <td><a href='SubjectDelete.php?Subjects=$ID'>Delete</a></td>
                  </tr>";
         		
         	}
         	echo "</table>";
         }

	?>
    
</body>
</html>