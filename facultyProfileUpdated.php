<?php 
   $link=mysqli_connect("localhost","root","","vikasproject");
   $id=$_POST['facultyid'];
   $name=$_POST['name'];
   $age=$_POST['age'];
   $gender=$_POST['gender'];
   $city=$_POST['city'];
   $state=$_POST['state'];
   $dob=$_POST['dob'];
   $email=$_POST['email'];
   $mobileno=$_POST['mobileno'];
   $address=$_POST['address'];
   $result=mysqli_query($link,"UPDATE faculty SET Name='$name',Age='$age',Gender='$gender',Dob='$dob',City='$city',State='$state',Email='$email',MobileNo='$mobileno',Address='$address' WHERE FacultyId='$id'");

 ?>