 <?php include 'blank.html'?>

<?php
$link=mysqli_connect("localhost" ,"root" ,"","vikasproject");
$ID=$_REQUEST['Marks'];
$result=mysqli_query($link,"Select *from marks where MarksId='$ID'");
if($result)
{
	while($row=mysqli_fetch_assoc($result))
	{$ID=$row['MarksId'];
               $EXAMID=$row['ExamId'];
               $STUDENTID=$row['StudentId'];
         		$STREAMID=$row['StreamId'];
               $MARKSOBTAIN=$row['MarksObtain'];
   		echo "<div class='content-wrapper'>";
    echo "<div class='container-fluid'>";
    echo "<div class='row'>";
        //echo"<div class='col sm-2' background-color:'white'>";
        //echo "</div>";
    echo"<div class='card-body'>";
    echo "<div class='table-responsive'>";
    

    
    
    echo"<table class='table table-striped table-hover table-sm' border='1' width='100%' cellspacing='0'>";
    echo "<h1>Marks Information</h1>";
    
    echo"<br>
    <br>";      
    
		echo"		
		  <tr><td>ID</td><td>$ID</td></tr>
		  <tr><td>EXAMID</td><td>$EXAMID</td></tr>
		  <tr><td>STUDENTID</td><td>$STUDENTID</td></tr>
		  <tr><td>STREAMID</td><td>$STREAMID</td></tr>
		  <tr><td>MARKSOBTAIN</td><td>$MARKSOBTAIN</td></tr>
		   ";
		    echo"</table>";
    echo "</div>";
    echo "</div>";
    
    echo "</div>";
    
    echo "</div>";
    echo "</div>";

	}
	
	
}




?>