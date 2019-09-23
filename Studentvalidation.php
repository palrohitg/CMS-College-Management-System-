
<?php

session_start();
if(isset($_POST['submit'])){
$conn=mysqli_connect('localhost','root','','vikasproject'); 
 $email=$_POST['email']; //get the email and password from the studentlogin.php where the form is created
 $password=$_POST['password'];
 $query=mysqli_query($conn,"select * from students where Email='$email' AND Password ='$password' AND Status='1'");
 $num=mysqli_num_rows($query);

 if($num==1) //if the email and password is found in any one row in the database
 {  
 	while ($row=mysqli_fetch_assoc($query)) {
    $_SESSION['StudentId']=$row['StudentId']; //for save the studentID which is required  
    //to show that  only Student  details
    $_SESSION['streamid']=$row['StreamId'];
    $_SESSION['email']=$row['Email'];
 	$_SESSION['password']=$row['Password'];
 	header("location:Studentdashboard.php");
 }
}

 else{
 	

     $_SESSION['errormsg']="Invalid username/Password";
     header("location:studentlogin.php");
 }
}
?>