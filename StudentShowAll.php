<!DOCTYPE html>
<html>
<head>
     <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
 	<title>Show all about Classes</title>
</head>
<body>



<?php include 'AdminStudentdashboard.php';?>
  
	<?php
       
       echo"<div align='center'>
       <a href='AdminStudentAdd.php'><input type='Submit' class='btn btn-primary btn-lg' value='Add Student'></a></div>";
         $link=mysqli_connect("localhost","root","","vikasproject");
         $result=mysqli_query($link,"SELECT *FROM Students ");
         $ID=0;
         echo "<div class='content-wrapper'>";
         echo "<div class='container-fluid'>";
         echo "<div class='row'>";
        //echo"<div class='col sm-2' background-color:'white'>";
        //echo "</div>";
         echo"<div class='card-body'>";
         echo "<div class='table-responsive'>";
        
        

         
		    
         echo"<table class='table table-striped table-hover table-sm' border='1' width='100%' cellspacing='0'>
	                      <tr>
		                       <th>ID</th>
		                       <th>NAME</th>
                             <th>AGE</th>
                             <th>GENDER</th>
		                       <th>Edit</th>
		                       <th>Delete</th>
		                       <th>View</th>
	</tr>";
	echo "</div>";
         if($result)
         {
         	while($row=mysqli_fetch_assoc($result))
         	{
         		$Id=$row['StudentId'];
         		$NAME=$row['Name'];
               $AGE=$row['Age'];
               $GENDER=$row['Gender'];
               $ID++;


         	     echo"
                  <tr class='danger'>
                     <td>$ID</td>
                     <td>$NAME</td>
                     <td>$AGE</td>
                     <td>$GENDER</td>
                     <td><a href='StudentEdit.php?Students=$Id'><span class='btn btn-theme btn-danger'>Edit</span></a></td>
                     <td><a href='StudentDelete.php?Students=$Id'><span class='btn btn-warning'>Delete</span></a></td>
                     <td><a href='StudentView.php?Students=$Id'><span class='btn btn-success'>View</span></a></td>   
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