  <script type="text/javascript">
   function myfunctionEdit(id){
    var ID=id;
    var name=document.f1.name.value;
    var age=document.f1.age.value;
    var gender=document.f1.gender.value;
    var dob =document.f1.dob.value;
    var city=document.f1.city.value;
    var state=document.f1.state.value;
    var email=document.f1.email.value;
    var mobileno=document.f1.mobileno.value;
    var address=document.f1.address.value;
    var status=document.f1.status.value;
    $.ajax({
      url:"FacultyEdited.php",
      type:"GET",
      data:{Search:ID,Name:name,Age:age,Gender:gender,DOB:dob,City:city,State:state,Email:email,MobileNo:mobileno,Address:address},
      success:function(){
        alert("Record Updated Successfully");
         $("#exampleModalfaculty").modal("hide");     
      }
    })

   }
  </script>
<?php
   $link=mysqli_connect("localhost","root","","vikasproject");
   $ID=$_POST['Search'];
   $result=mysqli_query($link,"SELECT *FROM faculty WHERE FacultyID='$ID'");
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
   	
   
    	<form class='form-group' name='f1' 'action='facultyEdit.php' method='Post'>
      <LABEL>Name</LABEL>
      <input type='text' name='name' value='<?php echo $name;?>'  class='form-control'><br>
      <LABEL>Age</LABEL>
      <input type='text' name='age' value='<?php echo $age;?>' class='form-control'><br>
      <LABEL>Gender</LABEL>
      <select name='gender'class='form-control'>
                  <option   <?php  if($gender=='M'){ echo"selected";}?> class='form-control'>Male</option>
                  <option   <?php if($gender=='F') {echo"selected";}?> class='form-control'>Female</option><br>
                 </select>
      <br>
      <LABEL>City</LABEL>
      <input type='text' name='city' value='<?php echo $city;?>' class='form-control'><br>
      <LABEL>State</LABEL>
      <input type='text' name='state' value='<?php echo $state;?>' class='form-control'><br>
      <LABEL>DOb</LABEL>
      <input type='date' name='dob' value='<?php echo $dob;?>' class='form-control'><br>
      <LABEL>Email</LABEL>
      <input type='email' name='email' value='<?php echo $email;?>' class='form-control'><br>
      <LABEL>MobileNo</LABEL>
      <input type='text' name='mobileno' value='<?php echo$mobileno ;?>' class='form-control'><br>
      <LABEL>Adress</LABEL>
   		<input type='text' name='address' value='<?php echo $address;?>' class='form-control'><br>
      <label>Status</label><br>
      <input type="checkbox" name="status" value="1" >&nbsp;Approved&nbsp;
                     <br><br>
   		<input type='hidden' name='id' value='<?php echo $id;?>'><br>
   		<input type='button'id="Submit" onclick="myfunctionEdit(<?php echo $id;?>);" value='Update' class="btn btn-success btn-lg" />
   		
   	</form>
    <?php
 
	}
	
   }
?>

 