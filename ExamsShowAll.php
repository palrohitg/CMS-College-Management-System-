<!DOCTYPE html>
<html>
<head>
	<title>exams pages</title>
</head>
<body>
<div align="center">
	<a href="ExamsAdd.php">Add</a>
	<br>
	<br>
</div>
	<?php
         include'blank.html';
         $link=mysqli_connect("localhost","root","","vikasproject");
         $result=mysqli_query($link,"SELECT *FROM Exams ");
       
		 
   echo "<div class='content-wrapper'>";
   echo "<div class='container-fluid'>";
   echo "<div class='row'>";
//echo"<div class='col sm-2' background-color:'white'>";
//echo "</div>";
   echo"<div class='card-body'>";
   echo "<div class='table-responsive'>";
   echo"<table class='table table-striped table-hover table-sm' border='1' width='100%' cellspacing='0'>";
       echo"<h1 align='center'>Exam  Details </h1><br>";   
         echo"
	                      <tr>
		                       <th>ID</th>
                           <th>TITLE</th>
		                       <th>DATED</th>
		                       <th>Edit</th>
                               <th>View</th>
		                       <th>Delete</th>
	</tr>";
	
         if($result)
         {
         	while($row=mysqli_fetch_assoc($result))
         	{
         		$ID=$row['ExamId'];
         		$TITLE=$row['Title'];
               $DATED=$row['Dated'];
         	     echo"
                  <tr>
                     <td>$ID</td>
                     <td>$TITLE</td>
                     <td>$DATED</td>
                     <td><a href='ExamsEdit.php?Exams=$ID'>Edit</a></td>
                     <td><a href='ExamsView.php?Exams=$ID'>View</a></td>
                     <td><a href='ExamsDelete.php?Exams=$ID'>Delete</a></td>
                     
                  </tr>";
         		
         	}
         	echo "</table>";

   

   echo "</div>";
   echo "</div>";
   
   echo "</div>";
   
   echo "</div>";
   echo "</div>";
         }

	?>
    
</body>
</html>