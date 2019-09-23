<!DOCTYPE html>
<html>
<head>
	<title>Subjects pages tables</title>
</head>
<body>
<div align="center">
	<a href="StreamAdd.php">Add</a>
	<br>
	<br>
</div>
	<?php
         $link=mysqli_connect("localhost","root","","vikasproject");
         $result=mysqli_query($link,"SELECT *FROM streams");
         echo "<div align='center'>";
		 
         echo"<table border='1' >
	                      <tr>
		                       <th>ID</th>
		                       <th>Title</th>
		                       <th>ClassId</th>
		                       <th>Delete</th>
                             <th>View</th>
		                       <th>Edit</th>
	</tr>";
	echo "</div>";
         if($result)
         {
         	while($row=mysqli_fetch_assoc($result))
         	{
         		$ID=$row['StreamId'];
               $TITLE=$row['Title'];
         	   $CLASSID=$row['ClassId'];
         	     echo"
                  <tr>
                     <td>$ID</td>
                     <td>$TITLE</td>
                     <td>$CLASSID</td>
                     <td><a href='StreamEdit.php?Stream=$ID'>Edit</a></td>
                     <td><a href='StreamDelete.php?Stream=$ID'>Delete</a></td>
                  </tr>";
         		
         	}
         	echo "</table>";
         }

	?>
    
</body>
</html>