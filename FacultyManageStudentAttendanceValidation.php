<?php
session_start();
$conn=mysqli_connect('localhost','root','','vikasproject');
 $FacultyId=$_SESSION['FacultyId'];// faculty login validation main session created hai
 $Branch=$_POST['Branch']; //get the email and password from the studentlogin.php where the form is created
 $Batch=$_POST['Batch'];
 $Semester=$_POST['Semester'];
 $Subject=$_POST['Subject'];
 $query=mysqli_query($conn,"SELECT * FROM `attendances` WHERE Branch='$Branch' AND Batch='$Batch' AND FacultyId='$FacultyId'AND Semester='$Semester'AND Subject='$Subject'");
 	if($row=mysqli_fetch_assoc($query))
  {  
    $_SESSION['Branch']=$row['Branch']; 
    $_SESSION['Batch']=$row['Batch']; 
    $_SESSION['Semester']=$row['Semester']; 
    $_SESSION['Subject']=$row['Subject'];
    header("location:Attendances.php");
 
}
 else
 {
  
  $sql=mysqli_query($conn,"INSERT INTO Attendances(StudentId,FacultyId,Name,Branch,Batch,Semseter,Subject) Select $StudentId," .$_SESSION['facultyId'] .",$name,'$Branch','$Batch','$Semester','$Subject' from students ");
   header("location:Attendances.php");
 }


?>

