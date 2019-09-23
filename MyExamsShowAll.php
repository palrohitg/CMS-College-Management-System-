   <?php  session_start();?>
   	<?php
            $link=mysqli_connect("localhost","root","","vikasproject");
            $id=$_SESSION['StudentId'];
            $result=mysqli_query($link,"SELECT *FROM Exams ");
            echo "<div class='table-responsive'>";
            echo"<table class='table table-striped table-hover table-sm' border='1' width='100%' cellspacing='0'>";
            echo"<h1 align='center'>My Exam Details </h1><br>";   
            echo"
   	           <tr>
   		            <th>ID</th>
                     <th>TITLE</th>
   		            <th>DATED</th>
   		        </tr>";
            $id=0;
            if($result)
            {
            	while($row=mysqli_fetch_assoc($result))
            	{
            		$ID=$row['ExamId'];
            		$TITLE=$row['Title'];
                  $DATED=$row['Dated'];
                  $id++;
            	     echo"
                        <tr>
                            <td>$id</td>
                            <td>$TITLE</td>
                            <td>$DATED</td>
                        </tr>";
            		
            	}
             echo "</table>";
             echo "</div>";
          }
      ?>