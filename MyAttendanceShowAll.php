<?php session_start();?>
	<?php
           
         $link=mysqli_connect("localhost","root","","vikasproject");
         $id=$_SESSION['StudentId'];
         $result=mysqli_query($link," SELECT  * FROM attendance Where StudentId='$id'");
         echo "<div class='table-responsive'>";
         echo"<table class='table table-striped table-hover table-sm' border='1' width='100%' cellspacing='0'>";
         echo"<h1 align='center'> My Attendance Details <h1><br>";
         echo"
	            <tr>
		              <th>ID</th>
		              <th>StudentId</th>
                  <th>StreamId</th>
                  <th>DATE</th>                            
	            </tr>";
         if($result)
         {
         	while($row=mysqli_fetch_assoc($result))
         	{
         		$ID=$row['AttendanceId'];
         		$STUDENTID=$row['StudentId'];
            $STREAMID=$row['StreamId'];
            $DATED=$row['Dated'];
          	echo"
                <tr>
                     <td>$ID</td>
                     <td>$STUDENTID</td>
                     <td>$STREAMID</td>
                     <td>$DATED</td>
                </tr>";
         		
         	}
          	echo "</table>";
            echo "</div>";
         }

	?>