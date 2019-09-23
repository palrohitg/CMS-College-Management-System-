<?php 
 if(!isset($_REQUEST['Submit']))
 {
   $link=mysqli_connect("localhost","root","","vikasproject");
   $ID=$_REQUEST['Subjects'];
   $result=mysqli_query($link,"SELECT *FROM subjects WHERE SubjectId='$ID'");
   if($result)
   {
   	  while($row=mysqli_fetch_assoc($result))
   	{
         $ID=$row['SubjectId'];

         $TITLE=$row['Title'];
   		$STREAMID=$row['StreamId'];
   		
         echo "<table border='1'>";
         echo "<tr><td>ID</td><td>$ID</td></tr>";
         echo "<tr><td>TITLE</td><td>$TITLE</td></tr>";
         echo "<tr><td>STREAMID</td><td>$STREAMID</td></tr>";
         echo "<form action ='Delete.php' method='Post'>
         <input type='hidden' name='id' value='$ID'>
         <input type='submit' name='Submit' value='Delete'>
          </form>";
		  echo "</table";
	}
}
}
else
{
	$link=mysqli_connect("localhost","root","","vikasproject");
	$id=$_REQUEST['id'];
	$result=mysqli_query($link,"DELETE FROM classes Where SubjectId='$id'");
	if($result)
	{
		header("location:SubjectsShowAll.php");
	}
	
	
}
?>
 	
