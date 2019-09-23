
<!DOCTYPE html>
<html>
<head>
     <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<body>

<?php
if(!isset($_REQUEST['Submit']))
{     
	echo"
      <div class='container' style='margin-top:100px;'>
 	   <div class='row justify-content-center'>
 	    	<div class='col-md-6 col-md-offset-3'align='center'>
 	  		<form  class='form-group' action='StudentAdd.php' name='myform' method='Post' onSubmit='return validation();'>
 	  		                 <h1>Register here! </h1>
 	  		 	  		 <img src='images/student.png'><br>
 	   <label>Name</label>
	    <input type='text' name='Name' placeholder='Name....' required='' class='form-control'><br>
         <label>Father Name</label>
	    <input type='text' name='FatherName' placeholder='FatherName....' required='' class='form-control'><br>
        <label>Age</label>
	    <input type='text' name='Age' placeholder='Age....' required='' class='form-control'><br>
        <label>Gender</label><br>
        <select   name='Gender'class='form-control'>
        <option  Selected value='M' class='form-control' >Male</option>
        <option   value='F' class='form-control'>Female</option><br>
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
	    <label>Branch</label>
           <select name='Branch'class='form-control'>
        <option  value='CSE' class='form-control' >CSE</option>
        <option  value='IT' class='form-control'>IT</option><br>
        <select><br>
	      <label>Semester</label>
           <select name='Semester'class='form-control'>
        <option  value='1Sem' class='form-control'>1Sem</option>
        <option  value='2Sem' class='form-control'>2Sem</option><br>
        <option  value='3Sem' class='form-control'>3Sem</option><br>
        <option  value='4Sem' class='form-control'>4Sem</option><br>
        <option  value='5Sem' class='form-control'>5Sem</option><br>
        <option  value='6Sem' class='form-control'>6Sem</option><br>
        <select><br>
	    <label>ClassId</label>
	    <input type='text' name='ClassId' placeholder='ClassId....' required='' class='form-control'><br>
         <label>StreamId</label>
         <input type='text' name='StreamId' placeholder='StreamId....' required='' class='form-control'><br>
          <label>Address</label>
	    <input type='text' name='Address' placeholder='Address....' required='' class='form-control'><br>
	  <input  class='btn btn-primary btn-lg'type='submit' name='Submit' value='Register'>
			</form>
			</div>
 	        </div>
 	        </div>
     	    </div>

		";
}
else
{
	$link=mysqli_connect("localhost" ,"root" ,"","vikasproject");
      if(!$link)
   {
   	echo"database not connected".mysqli_connect_error();
   }

   	$name=$_REQUEST['Name'];
   	$fathername=$_REQUEST['FatherName'];
	$age=$_REQUEST['Age'];
	$gender=$_REQUEST['Gender'];
	$city=$_REQUEST['City'];
	$state=$_REQUEST['State'];
	$email=$_REQUEST['Email'];
	$password=$_REQUEST['Password'];
	$mobileno=$_REQUEST['MobileNo'];
	$semester=$_REQUEST['Semester'];
	$branch=$_REQUEST['Branch'];
	$dob=$_REQUEST['Dob'];
	$address=$_REQUEST['Address'];
	$classid=$_REQUEST['ClassId'];
	$streamid=$_REQUEST['StreamId'];
    $result=mysqli_query($link,"INSERT INTO students(Name,FatherName,Age,Gender,City,Dob,State,Email,Password,MobileNo,Branch,Semester,Address,ClassId,StreamId) VALUES ('$name','$fathername','$age' ,'$gender','$city','$dob','$state','$email','$password','$mobileno','$branch','$semester','$address','$classid','$streamid' )");
	if($result)
	{
		header("location:login.php");
	}
	
	
	
}

?>
</body>
</html>
