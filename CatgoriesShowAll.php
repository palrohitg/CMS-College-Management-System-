<!DOCTYPE html>
<html>
<head>
	<title>books categories</title>
</head>
<body>
<div align="center">
	<a href="CategoriesAdd.php">Add</a>
	<br>
	<br>
</div>
	<?php
         $link=mysqli_connect("localhost","root","","vikasproject");
         $result=mysqli_query($link,"SELECT *FROM categories ");
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
         		$ID=$row['CategorieId'];
         		$TITLE=$row['Title'];
         	     echo"
                  <tr>
                     <td>$ID</td>
                     <td>$TITLE</td>
                     <td><a href='CategoriesEdit.php?Categories=$ID'>Edit</a></td>
                     <td><a href='CategoriesDelete.php?Categories=$ID'>Delete</a></td>
                     <td><a href='CategoriesView.php?Categories=$ID'>View</a></td>   
                  </tr>";
         		
         	}
         	echo "</table>";
         }

	?>
    
</body>
</html>