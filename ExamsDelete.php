<?php 
 if(!isset($_REQUEST['Submit']))
 {  include'blank.html';
   $link=mysqli_connect("localhost","root","","vikasproject");
   $ID=$_REQUEST['Exams'];
   $result=mysqli_query($link,"SELECT *FROM exams WHERE ExamId='$ID'");
   if($result)
   {
   	  while($row=mysqli_fetch_assoc($result))
   	{
         $ID=$row['ExamId'];
   		$TITLE=$row['Title'];
        $DATED=$row['Dated'];
        $MAXMARKS=$row['MaxMarks'];
                 echo "<div class='content-wrapper'>";
         echo "<div class='container-fluid'>";
         echo "<div class='row'>";
        //echo"<div class='col sm-2' background-color:'white'>";
        //echo "</div>";
         echo"<div class='card-body'>";
         echo "<div class='table-responsive'>";
         
         

         
         
         echo"<table class='table table-striped table-hover table-sm' border='1' width='100%' cellspacing='0'>";
         
         echo"<h1>Exam Delete</h1>";
         echo "<br>";



   		
        
         echo "<tr><td>ID</td><td>$ID</td></tr>";
         echo "<tr><td>TITLE</td><td>$TITLE</td></tr>";
         echo "<tr><td>DATED</td><td>$DATED</td></tr>";
         echo "<tr><td>MAXMARKS</td><td>$MAXMARKS</td></tr>";
         echo "<form action ='ExamsDelete.php' method='Post'>
         <input type='hidden' name='id' value='$ID'>
         <input type='submit' name='Submit' value='Delete'>
          </form>";
		  echo "</table>";
       echo "</div>";
      echo "</div>";
      echo "</div>";
      echo "</div>";
   

	}
}
}
else
{
	$link=mysqli_connect("localhost","root","","vikasproject");
	$id=$_REQUEST['id'];
	$result=mysqli_query($link,"DELETE FROM exams Where ExamId='$id'");
	if($result)
	{
		header("location:ExamsShowAll.php");
	}
	
	
}
?>
 	
