<!DOCTYPE html>
<html>
<head>
	<title>Show all about Classes</title>
</head>
<body>
<div align="center">
  	<a href="AttendancesAdd.php"><span class="btn btn-primary btn-lg">Add Attendance</span></a>
	<br>
	<br>
</div>
	<?php
         include'FacultyDashboard.html';
         $link=mysqli_connect("localhost","root","","vikasproject");
         $result=mysqli_query($link,"SELECT *FROM attendances ");
         echo "<div align='center'>";
   echo "<div class='content-wrapper'>";
   echo "<div class='container-fluid'>";
   echo "<div class='row'>";
//echo"<div class='col sm-2' background-color:'white'>";
//echo "</div>";
   echo"<div class='card-body'>";
   echo "<div class='table-responsive'>";
   echo"<table class='table table-striped table-hover table-sm' border='1' width='100%' cellspacing='0'>";
          echo"   <h1>Attendance Details <h1><br>";
		 
         echo"
	                      <tr>
		                       <th>SrNO</th>
		                       <th>Name</th>
                             <th>Date</th>
                             <th>WorkingDay</th>
                             <th>Edit</th>
                             <th>Delete</th>
                             <th>View</th>
	</tr>";
	echo "</div>";
         if($result)
         {
         	while($row=mysqli_fetch_assoc($result))
         	{
         		 $ID=$row['SrNo'];
         		   $Name=$row['Name'];
               $Dated=$row['Dated'];
               $WorkingDay=$row['WorkingDay'];

         	     echo"
                  <tr>
                     <td>$ID</td>
                     <td>$Name</td>
                     <td>$Dated</td>
                     <td>$WorkingDay</td>
                     <td><a href='attendances.php?Attendance=$ID'><span class='btn btn-success btn-lg' >Edit</span></a></td>
                     <td><a href='attendanceDelete.php?Attendance=$ID'><span class='btn btn-warning btn-lg'>Delete</span></a></td>
                     <td><a href='AttendancesView.php?Attendance=$ID'><span class='btn btn-danger btn-lg'>View</span></a></td>
                        
                  </tr>";
         		
         	}
         	echo "</table>";
            echo "</div>";
   echo "</div>";
   
   echo "</div>";
   
   echo "</div>";

         }

	?>
    
</body>
</html>