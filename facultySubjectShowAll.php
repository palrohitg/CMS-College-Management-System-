<!DOCTYPE html>
<html>
<head>
	<title>Show all about Classes</title>
</head>
<body>
<div align="center">
	<a href="facultySubjectAdd.php">Add</a>
	<br>
	<br>
</div>
	<?php
         $link=mysqli_connect("localhost","root","","vikasproject");
         $result=mysqli_query($link,"SELECT *FROM facultysubjects ");
         echo "<div align='center'>";
		 
         echo"<table border='1' >
	                      <tr>
		                       <th>ID</th>
		                       <th>FacultyId</th>
                             <th>ClassId</th>
                             <th>StudentId</th>
		                       <th>Edit</th>
		                       <th>Delete</th>
		                       <th>View</th>
	</tr>";
	echo "</div>";
         if($result)
         {
         	while($row=mysqli_fetch_assoc($result))
         	{
         		$ID=$row['FacultySubjectId'];
         		$FACULTYID=$row['FacultyId'];
               $CLASSID=$row['ClassId'];
               $STUDENTID=$row['StudentId'];

         	     echo"
                  <tr>
                     <td>$ID</td>
                     <td>$FACULTYID</td>
                     <td>$CLASSID</td>
                     <td>$STUDENTID</td>
                     <td><a href='facultySubjectEdit.php?Faculty=$ID'>Edit</a></td>
                     <td><a href='facultySubjectDelete.php?Faculty=$ID'>Delete</a></td>
                     <td><a href='facultySubjectView.php?Faculty=$ID'>View</a></td>   
                  </tr>";
         		
         	}
         	echo "</table>";
         }

	?>
    
</body>
</html>