<?php
$link=mysqli_connect("localhost" ,"root" ,"","vikasproject");
$ID=$_REQUEST['Exams'];
$result=mysqli_query($link,"Select *from exams where ExamId='$ID'");
if($result)
{   include'blank.html';
	while($row=mysqli_fetch_assoc($result))
	{   
		 echo "<div class='content-wrapper'>";
         echo "<div class='container-fluid'>";
         echo "<div class='row'>";
        //echo"<div class='col sm-2' background-color:'white'>";
        //echo "</div>";
         echo"<div class='card-body'>";
         echo "<div class='table-responsive'>";
         echo"<table class='table table-striped table-hover table-sm' border='1' width='100%' cellspacing='0'>";
         echo"<h1>Exam View</h1>";
         echo "<br>"; 
        $ID=$row['ExamId'];
		$TITLE=$row['Title'];
		$DATED=$row['Dated'];
   		$MAXMARKS=$row['MaxMarks'];
   		
	 	echo"
		<tr><td>ID</td><td>$ID</td></tr>
		  <tr><td>TITLE</td><td>$TITLE</td></tr>
		  <tr><td>DATED</td><td>$DATED</td></tr>
		  <tr><td>MAXMARKS</td><td>$MAXMARKS</td></tr>
		   </table>";
		    echo "</div>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
   
	}
	
	
}
?>



