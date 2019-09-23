<?php 
if(!isset($_REQUEST['Submit']))
{ 
   include'blank.html';
   $link=mysqli_connect("localhost","root","","vikasproject");
   $ID=$_REQUEST['Marks'];
   $result=mysqli_query($link,"SELECT *FROM marks WHERE MarksId='$ID'");
   if($result)
   {
      while($row=mysqli_fetch_assoc($result))
      {
         $ID=$row['MarksId'];
         $MARKSOBTAIN=$row['MarksObtain'];
         $STUDENTID=$row['StudentId'];
         $STREAMID=$row['StreamId'];
         $EXAMID=$row['ExamId'];
         
         echo "<div class='content-wrapper'>";
         echo "<div class='container-fluid'>";
         echo "<div class='row'>"; echo "<div class='row'>"; echo "<div class='row'>"; echo "<div class='row'>"; echo "<div class='row'>"; echo "<div class='row'>"; echo "<div class='row'>"; echo "<div class='row'>"; echo "<div class='row'>"; echo "<div class='row'>"; echo "<div class='row'>"; echo "<div class='row'>"; echo "<div class='row'>"; echo "<div class='row'>"; echo "<div class='row'>"; echo "<div class='row'>";
        //echo"<div class='col sm-2' background-color:'white'>";
        //echo "</div>";
         echo"<div class='card-body'>";
         echo "<div class='table-responsive'>";
         
         

         
         
         echo"<table class='table table-striped table-hover table-sm' border='1' width='100%' cellspacing='0'>";
         
         echo"<h1>Student Delete</h1>";
         echo "<br>";


         echo "<tr><td>ID</td><td>$ID</td></tr>";
         echo "<tr><td>EXAMID</td><td>$EXAMID</td></tr>";
         echo "<tr><td>STUDENTID</td><td>$STUDENTID</td></tr>";
         echo "<tr><td>STREAMID</td><td>$STREAMID</td></tr>";
         echo "<tr><td>MARKSOBTAIN</td><td>$MARKSOBTAIN</td></tr>";
         echo "<form action ='MarksDelete.php' method='Post'>
         <input type='hidden' name='id' value='$ID'>
         <input type='submit' name='Submit' value='Delete'>
         </form>";
         echo "</table>";
         echo "</div>";
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
	$result=mysqli_query($link,"DELETE FROM marks Where MarksId='$id'");
	if($result)
	{
		header("location:MarksShowAll.php");
	}
	
	
}
?>

