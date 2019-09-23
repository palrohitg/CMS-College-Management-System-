<?php 
 if(!isset($_REQUEST['Submit']))
 {
   $link=mysqli_connect("localhost","root","","vikasproject");
   $ID=$_REQUEST['classes'];
   $result=mysqli_query($link,"SELECT *FROM classes WHERE classId='$ID'");
   if($result)
   {
   	  while($row=mysqli_fetch_assoc($result))
   	{
         $ID=$row['ClassId'];
   		$TITLE=$row['Title'];
   		
         echo "<table border='1'>";
         echo "<tr><td>ID</td><td>$ID</td></tr>";
         echo "<tr><td>TITLE</td><td>$TITLE</td></tr>";
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
	$result=mysqli_query($link,"DELETE FROM classes Where ClassId='$id'");
	if($result)
	{
		header("location:ShowAll.php");
	}
	
	
}
?>
 	
