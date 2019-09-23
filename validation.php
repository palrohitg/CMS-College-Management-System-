<?php
session_start();
$conn=mysqli_connect('localhost','root','','vikasproject');
if($conn)
{
	echo "connection successfully";
}
else
{
	echo "not connected";
}
 

 $email=$_POST['email'];
 $password=$_POST['password'];
 $status=$_POST[''];
 $query=mysqli_query($conn,"select * from students where email='$email' AND password ='$password' ");
 $num=mysqli_num_rows($query);
 if($num==1)
 {  
 	while ($row=mysqli_fetch_assoc($query)) {
    $_SESSION['studentid']=$row['StudentId'];
    $_SESSION['streamid']=$row['StreamId'];
    $_SESSION['email']=$row['Email'];
 	$_SESSION['password']=$row['Password'];
 	header("location:blank.html");
 }
}
 else
 {
 	header("location:login.php");
 }


?>