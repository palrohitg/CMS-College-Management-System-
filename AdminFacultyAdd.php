	<!-- Latest compiled and minified CSS -->
     <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->

<html>



<body>
	<?php
if(!isset($_REQUEST['Submit']))
{
	
	echo"
      <div class='container' style='margin-top:100px;'>
 	   <div class='row justify-content-center'>
 	    	<div class='col-md-6 col-md-offset-3'align='center'>
 	  		<form  class='form-group' action='AdminFacultyAdd.php' name='myform' method='Post' onSubmit='return validation();'>
 	  		                 <h1>Register here! </h1>
 	  		 	  		 <img src='images/teacher.jpg'><br>
 	  	<label>Name</label>
	    <input type='text' name='Name' placeholder='Name....' required='' class='form-control'><br>
        <label>Age</label>
	    <input type='text' name='Age' placeholder='Age....' required='' class='form-control'><br>
        <label>Gender</label><br>
        <select name='Gender'class='form-control'>
        <option   value='M' class='form-control' >Male</option>
        <option  value='F' class='form-control'>Female</option><br>
        <select><br>
	    <label>City</label>
	    <input type='text' name='City' placeholder='City....' required='' class='form-control'><br>
       <label>DOB</label>
	    <input type='date' name='Dob' placeholder='Date Of Birth....' required='' class='form-control'><br>
       <label>State</label>
	    <input type='text' name='State' placeholder='State....' required='' class='form-control'><br>
	    <label>Email</label>
	    <input type='email' name='Email' placeholder='Email....' required='' class='form-control'><br>
	    <label>Password</label>
	    <input type='text' name='Password' placeholder='Passwor....' required='' class='form-control'><br>
         <label>MobileNo</label>
	    <input type='text' name='MobileNo' placeholder='MobileNo....' required='' class='form-control'><br>
	      <label>Address</label>
	    <input type='text' name='Address' placeholder='Address....' required='' class='form-control'><br>
	  <input  class='btn btn-primary btn-lg' type='submit' name='Submit' value='Register'>
			</form>
			</div>
 	        </div>
 	        </div>
     	  ";

}
else
{
	$link=mysqli_connect("localhost" ,"root" ,"","vikasproject");
   	$name=$_REQUEST['Name'];
	$age=$_REQUEST['Age'];
	$gender=$_REQUEST['Gender'];
	$dob=$_REQUEST['Dob'];
	$city=$_REQUEST['City'];
	$state=$_REQUEST['State'];
	$email=$_REQUEST['Email'];
	$password=$_REQUEST['Password'];
	$mobileno=$_REQUEST['MobileNo'];
	$address=$_REQUEST['Address'];
    $result=mysqli_query($link,"INSERT INTO faculty(Name,Age,Gender,Dob,City,State,Email,Password,MobileNo,Address) VALUES ('$name','$age' ,'$gender','$dob','$city','$state','$email','$password','$mobileno','$address')");
	if($result)
	{
		header("location:facultyShowAll.php");
	}
	
	
	
}

?>
</body>
</html>