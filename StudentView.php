 <?php
 
 $link=mysqli_connect("localhost" ,"root" ,"","vikasproject");
 $ID=$_REQUEST['Search'];
 $result=mysqli_query($link,"SELECT *FROM Students where StudentId='$ID' ");
 if($result)
 {
   while($row=mysqli_fetch_assoc($result))
   {
    $id=$row['StudentId'];
    $name=$row['Name'];
    $age=$row['Age'];
    $gender=$row['Gender'];
    $city=$row['City'];
    $dob=$row['Dob'];
    $state=$row['State'];
    $email=$row['Email'];
    $mobileno=$row['MobileNo'];
    $branch=$row['Branch'];
    $semester=$row['Semester'];
    $address=$row['Address'];
    $classid=$row['ClassId'];
    $streamid=$row['StreamId'];

    echo "<div class='table-responsive'>";
    echo"<table class='table table-striped table-hover table-sm' border='1' width='100%' cellspacing='0'>";      
    echo "<tr><td>Name</td><td>$name</td></tr>";
    echo "<tr><td>Age</td><td>$age</td></tr>";
    echo "<tr><td>Gender</td><td>$gender</td></tr>";
    echo "<tr><td>City</td><td>$city</td></tr>";
    echo "<tr><td>DOB</td><td>$dob</td></tr>";
    echo "<tr><td>State</td><td>$state</td></tr>";
    echo "<tr><td>Email</td><td>$email</td></tr>";
    echo "<tr><td>MobileNo</td><td>$mobileno</td></tr>";
    echo "<tr><td>Branch</td><td>$branch</td></tr>";
    echo "<tr><td>Semester</td><td>$semester</td></tr>";
    echo "<tr><td>ClassId</td><td>$classid</td></tr>";
    echo "<tr><td>StreamId</td><td>$streamid</td></tr>";
    echo "<tr><td>Address</td><td>$address</td></tr>";
    echo"</table>";
    echo "</div>";
   


  }	
}
?>
