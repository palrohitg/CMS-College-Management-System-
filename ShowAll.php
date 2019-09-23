<!DOCTYPE html>
<html>
<head>
	<title>Show all about Classes</title>
</head>
<body>
<div align="center">
	<a href="Add.php">Add</a>
	<br>
	<br>
</div>
	<?php
         $link=mysqli_connect("localhost","root","","vikasproject");
         $result=mysqli_query($link,"SELECT *FROM classes ");
         echo "<div align='center'>";
		 
         echo"<table border='1' >
	                      <tr>
		                       <th>ID</th>
		                       <th>Title</th>
		                       <th>Edit</th>
		                       <th>Delete</th>
		                       <th>View</th>
	</tr>";
	echo "</div>";
         if($result)
         {
         	while($row=mysqli_fetch_assoc($result))
         	{
         		$ID=$row['ClassId'];
         		$TITLE=$row['Title'];
         	     echo"
                  <tr>
                     <td>$ID</td>
                     <td>$TITLE</td>
                     <td><a href='Edit.php?classes=$ID'>Edit</a></td>
                     <td><a href='Delete.php?classes=$ID'>Delete</a></td>
                     <td><a href='View.php?classes=$ID'>View</a></td>   
                  </tr>";
         		
         	}
         	echo "</table>";
         }

	?>
    
</body>
</html>