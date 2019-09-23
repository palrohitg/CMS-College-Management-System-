  <!DOCTYPE html>
  <html>
  <head>
  	<title>Marks pages</title>
  </head>
  <body>
    <div align="center">
     <a href="MarksAdd.php">Add</a>
     <br>
     <br>
   </div>
   <?php
   include'blank.html';
   $link=mysqli_connect("localhost","root","","vikasproject");
   $result=mysqli_query($link,"SELECT *FROM Marks ");
   echo "<div align='center'>";
   echo "<div class='content-wrapper'>";
   echo "<div class='container-fluid'>";
   echo "<div class='row'>";
//echo"<div class='col sm-2' background-color:'white'>";
//echo "</div>";
   echo"<div class='card-body'>";
   echo "<div class='table-responsive'>";
   echo"<table class='table table-striped table-hover table-sm' border='1' width='100%' cellspacing='0'>";
   echo"<tr>
   <th>ID</th>
   <th>EXAMID</th>
   <th>STUDENTID</th>
   <th>Edit</th>
   <th>View</th>
   <th>Delete</th>
   </tr>";
   echo "</div>";
   if($result)
   {
    while($row=mysqli_fetch_assoc($result))
    {
     $ID=$row['MarksId'];
     $EXAMID=$row['ExamId'];
     $STUDENTID=$row['StudentId'];
     $STREAMID=$row['StreamId'];
     $MARKSOBTAIN=$row['MarksObtain'];
     echo"
     <tr>
     <td>$ID</td>
     <td>$EXAMID</td>
     <td>$STUDENTID</td>
     <td><a href='MarksEdit.php?Marks=$ID'>Edit</a></td>
     <td><a href='MarksEdit.php?Marks=$ID'>View</a></td>
     <td><a href='MarksDelete.php?Marks=$ID'>Delete</a></td>
     
     </tr>";
     
   }
   echo "</table>";
   
   echo "</table>";

   echo "</div>";
   echo "</div>";
   
   echo "</div>";
   
   echo "</div>";
 }

 ?>

</body>
</html>