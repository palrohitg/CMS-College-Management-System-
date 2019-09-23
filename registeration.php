<?php
 header("location:login.php");

$conn=mysqli_connect('localhost','root','','vikasproject');
if($conn)
{
	echo "connection successfully";
}
else
{
	echo "not connected";
}
 
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$conpassword=$_POST['conpassword'];
 
 $query=mysqli_query($conn,"select * from register where email='$email' && password ='$password' ");
 $num=mysqli_num_rows($query);
 if($num==1)
 {
 	echo"duplicate inputs";
 }
 else
 {
 	$query=mysqli_query($conn,"insert into register(name,email,password,conpassword) values('$name','$email','$password','$conpassword')");
 }


?>