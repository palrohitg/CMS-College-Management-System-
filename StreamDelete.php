<?php 
 if(!isset($_REQUEST['Submit']))
 {
   $link=mysqli_connect("localhost","root","","vikasproject");
   $ID=$_REQUEST['Stream'];
   $result=mysqli_query($link,"SELECT *FROM streams WHERE StreamId='$ID'");
   if($result)
   {
   	  while($row=mysqli_fetch_assoc($result))
   	{
         $ID=$row['StreamId'];

         $TITLE=$row['Title'];
   		$CLASSID=$row['ClassId'];
   		
         echo "<table border='1'>";
         echo "<tr><td>ID</td><td>$ID</td></tr>";
         echo "<tr><td>TITLE</td><td>$TITLE</td></tr>";
         echo "<tr><td>CLASSID</td><td>$CLASSID</td></tr>";
         echo "<form action ='StreamDelete.php' method='Post'>
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
	$result=mysqli_query($link,"DELETE FROM streams Where StreamId='$id'");
	if($result)
	{
		header("location:StreamShowAll.php");
	}
	
	
}
?>
 	
