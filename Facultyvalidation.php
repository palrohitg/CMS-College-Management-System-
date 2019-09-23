<?php
session_start();
$conn=mysqli_connect('localhost','root','','vikasproject');
 if(!$conn){
 	die("connection Failed".mysqli_error());
 }
  $email=$_POST['email'];
  $password=$_POST['password'];
 $query=mysqli_query($conn,"select * from faculty where Email='$email' AND Password ='$password' AND 
 Status='1' ");
 $num=mysqli_num_rows($query);
 if($num==1)
 {  
 	while ($row=mysqli_fetch_assoc($query)) {
    $_SESSION['FacultyId']=$row['FacultyId']; 
    $_SESSION['email']=$row['Email'];
 	$_SESSION['password']=$row['Password'];
 	header("location:FacultyDashboard.php");
 }
}
 else
 {
 	header("location:Facultylogin.php");
 }


?>