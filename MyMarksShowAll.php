  <?php session_start(); ?>
   <?php
    $link=mysqli_connect("localhost","root","","vikasproject");
    $id=$_SESSION['StudentId'];
    $result=mysqli_query($link,"SELECT *FROM Marks where StudentId='$id' ");
    echo "<div class='table-responsive'>";
    echo"<table class='table table-striped table-hover table-sm' border='1' width='100%' cellspacing='0'>";
    echo"   <h1 align='center'> My Marks Details <h1><br>";
    echo"
        <tr>
            <th>ID</th>
            <th>EXAMID</th>
            <th>STUDENTID</th>
            <th>STREAMID</th>
            <th>MARKSOBTAIN</th>
        </tr>";
   $id=0;
   echo "</div>";
   if($result)
   {
      while($row=mysqli_fetch_assoc($result)){
     $ID=$row['MarksId'];
     $EXAMID=$row['ExamId'];
     $STUDENTID=$row['StudentId'];
     $STREAMID=$row['StreamId'];
     $MARKSOBTAIN=$row['MarksObtain'];
     $id++;
     echo"
     <tr>
     <td>$id</td>
     <td>$EXAMID</td>
     <td>$STUDENTID</td>
     <td>$STREAMID</td>
     <td>$MARKSOBTAIN</td>
     </tr>";
   }
   echo "</table>";
   echo "</div>";
 }
  
 ?>
