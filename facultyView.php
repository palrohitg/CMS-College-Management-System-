<?php
$link=mysqli_connect("localhost" ,"root" ,"","vikasproject");
$ID=$_POST['Search'];
$result=mysqli_query($link,"Select *from faculty where FacultyId='$ID'");
if($result)
{
	while($row=mysqli_fetch_assoc($result))
	{
		  $id=$row['FacultyId'];
      $name=$row['Name'];
      $age=$row['Age'];
      $gender=$row['Gender'];
      $city=$row['City'];
      $state=$row['State'];
      $email=$row['Email'];
      $mobileno=$row['MobileNo'];
      $address=$row['Address'];
      $dob=$row['Dob'];
     echo "<div class='table-responsive'>";
     echo"<table class='table table-striped table-hover table-sm' border='1' width='100%' cellspacing='0'>";
     echo "<h1>Faculty Information</h1>";
     echo"<br><br>"; 
     echo "<tr><td>Name</td><td>$name</td></tr>";
     echo "<tr><td>Age</td><td>$age</td></tr>";
     echo "<tr><td>Gender</td><td>$gender</td></tr>";
     echo "<tr><td>City</td><td>$city</td></tr>";
     echo "<tr><td>State</td><td>$state</td></tr>";
     echo "<tr><td>DOB</td><td>$dob</td></tr>";
     echo "<tr><td>Email</td><td>$email</td></tr>";
     echo "<tr><td>MobileNo</td><td>$mobileno</td></tr>";
     echo "<tr><td>Address</td><td>$address</td></tr>";
     echo"</table>";
     echo "</div>";
}	
}
?>
