<?php
 	$link=mysqli_connect("localhost","root","","vikasproject");
  $id=$_GET['Search'];
  $name=$_GET['Name'];
  $age=$_GET['Age'];
  $gender=$_GET['Gender'];
  $city=$_GET['City'];
  $state=$_GET['State'];
  $dob=$_GET['DOB'];
  $email=$_GET['Email'];
  $mobileno=$_GET['MobileNo'];
  $address=$_GET['Address'];
  $status=$_GET['Status'];
  
     $result=mysqli_query($link,"UPDATE faculty SET Name='$name',Age='$age',Gender='$gender',Dob='$dob',City='$city',State='$state',Email='$email',MobileNo='$mobileno',Address='$address' WHERE FacultyId='$id'");
?>