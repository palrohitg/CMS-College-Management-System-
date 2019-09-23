<?php
$link=mysqli_connect("localhost" ,"root" ,"","vikasproject");
$ID=$_REQUEST['classes'];
$result=mysqli_query($link,"Select *from classes where ClassId='$ID'");
if($result)
{
	while($row=mysqli_fetch_assoc($result))
	{
		$ID=$row['ClassId'];
		$TITLE=$row['Title'];
		echo"<table border='1'>
		<tr><td>ID</td><td>$ID</td></tr>
		  <tr><td>TITLE</td><td>$TITLE</td></tr>
		   </table>";
	}
	
	
}




?>