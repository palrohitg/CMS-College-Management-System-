

<?php
session_start();
$conn=mysqli_connect('localhost','root','','vikasproject');
 $Branch=$_POST['Branch']; //get the email and password from the studentlogin.php where the form is created
 $Batch=$_POST['Batch'];
 $RollNo=$_POST['RollNo'];
 $query=mysqli_query($conn,"select * from library where Branch='$Branch' AND Batch ='$Batch' AND RollNo='$RollNo' ");
 if($query) //if the email and password is found in any one row in the database
 {  
 	if($row=mysqli_fetch_assoc($query)) {
    $_SESSION['Batch']=$row['Batch']; //for save the studentID which is required  to show that  only Student  details
    $_SESSION['Branch']=$row['Branch'];
    $_SESSION['RollNo']=$row['RollNo'];
   // header("location:BooksShowAll.php");
 }
}
 else
 {
 	header("location:LibraryStudentlogin.php");
 }


?>

