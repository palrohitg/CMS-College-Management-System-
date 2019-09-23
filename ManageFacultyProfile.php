<?php session_start();?>
<script type="text/javascript">
  function facultyProfileUpdated(){
       var Name=document.f1.name.value;
       var Age=document.f1.age.value;
       var Gender=document.f1.gender.value;
       var City=document.f1.city.value;
       var State=document.f1.state.value;
       var DOB=document.f1.dob.value;
       var Email=document.f1.email.value;
       var Address=document.f1.address.value;
       var MobileNo=document.f1.mobileno.value;
       var FacultyId=document.f1.id.value;
       if(Name=="" || Age=="" || Gender=="Gender" || City=="" || State=="" || Email=="" || Address==""  || MobileNo=="")
       {
         alert("Filed must be filled");
       }
       else{
       $.ajax({
         url:"facultyProfileUpdated.php",
         type:"Post",
         data:{name:Name,age:Age,gender:Gender,city:City,state:State,dob:DOB,email:Email,address:Address,facultyid:FacultyId,mobileno:MobileNo},
         success:function(){
            alert("Record is Updated successfully");
         }
       });
    }

      
  }
</script>

<?php
    
   $link=mysqli_connect("localhost","root","","vikasproject");
   $FacultyId=$_SESSION['FacultyId'];
   $result=mysqli_query($link,"SELECT *FROM faculty WHERE FacultyId='$FacultyId'");
   if($result)
   {
    	while($row=mysqli_fetch_assoc($result))
   	{
        $id=$row['FacultyId'];
        $name=$row['Name'];
        $age=$row['Age'];
        $gender=$row['Gender'];
        $city=$row['City'];
        $dob=$row['Dob'];
        $state=$row['State'];
        $email=$row['Email'];
        $mobileno=$row['MobileNo'];
        $address=$row['Address'];

   	?>
   	<h1 align="center" style="color:red">Manage Profile Here</h1><br>
    
      <div class='col-xl-10'align='center'>
         <div align="center">
      <form class='form-group' name='f1'  method='Post'>
   		<LABEL>Name</LABEL>
      <input type='text' name='name' value='<?php echo $name;?>'  class='form-control'/><br>
      <LABEL>Age</LABEL>
      <input type='text' name='age' value='<?php echo $age;?>' class='form-control'><br>
      <LABEL>Gender</LABEL>
      <select name='gender'class='form-control'>
          <option   <?php  if($gender=='M'){ echo"selected";}?> class='form-control'>Male</option>
          <option   <?php if($gender=='F') {echo"selected";}?> class='form-control'>Female</option><br>
      </select> <br>
      <LABEL>City</LABEL>
      <input type='text' name='city' value='<?php echo $city;?>' class='form-control'><br>
      <LABEL>State</LABEL>
      <input type='text' name='state' value='<?php echo $state;?>' class='form-control'><br>
      <LABEL>DOB</LABEL>
      <input type='date' name='dob' value='<?php echo $dob;?>' class='form-control'><br>
      <LABEL>Email</LABEL>
      <input type='email' name='email' value='<?php echo $email;?>' class='form-control'><br>
      <LABEL>MobileNo</LABEL>
      <input type='text' name='mobileno' value='<?php echo$mobileno ;?>' class='form-control'><br>
      <LABEL>Address</LABEL>
   		<input type='text' name='address' value='<?php echo $address;?>' class='form-control'><br>
   		<input type='hidden' name='id' value='<?php echo $id;?>'>
   		<input type='button' name='Submit' value='Update'  onclick="facultyProfileUpdated();"class="btn btn-success btn-lg" />
   	</form>
    </div>
  </div>
   <?php
      }
	 }
 
 ?>
    