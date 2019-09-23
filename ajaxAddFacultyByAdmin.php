 <?php 
 $FacultyExists="";
  $conn=mysqli_connect("localhost","root","","vikasproject");
  $FacultyID=$_POST["facultyid"];
  $query=mysqli_query($conn,"select FacultyId from faculty where FacultyId=\"$FacultyID\"");
  if(mysqli_num_rows($query)) {
  	$facultyarray=array('status'=>"false", 'message'=>"Faculty Id is already Exists");
 	echo json_encode($facultyarray);
  } else {
  	$Branch=$_POST["branch"];
     $Name=$_POST["name"];
     $Age=$_POST["age"];
     $Gender=$_POST["gender"];
     $City=$_POST["city"];
     $State=$_POST["state"];
     $DOB=$_POST["dob"];
     $Email=$_POST["email"];
     $MobileNo=$_POST["mobileno"];
     $Address=$_POST["address"];
     $query=mysqli_query($conn,"insert into faculty(FacultyId,Name,Age,Branch,Gender,City,State,DOB,Email,MobileNo,Address)Values('$FacultyID','$Name','$Age','$Branch','$Gender','$City','$State','$DOB','$Email','$MobileNo','$Address')");
     if($query) {
      	$facultyarray=array('status'=>"true", 'message'=>"Record is inserted");
 	   echo json_encode($facultyarray);
     	
     }
  }
?>