
<script type="text/javascript" language="javascript">
   function facultyAddbyAdmin(){
       var Name=document.f1.name.value;
       var Age=document.f1.age.value;
       var Gender=document.f1.gender.value;
       var Branch=document.f1.branch.value;
       var City=document.f1.city.value;
       var State=document.f1.state.value;
       var DOB=document.f1.dob.value;
       var Email=document.f1.email.value;
       var Address=document.f1.address.value;
       var FacultyID=document.f1.facultyid.value;
       var MobileNo=document.f1.mobileno.value;
       
       if(Name=="" || Age=="" || Gender=="Gender" || City=="" || State=="" || Email=="" || Address=="" || FacultyID=="" || Branch=="" || MobileNo=="")
       {
         alert("Filed must be filled");
       }
       else{
       $.ajax({
         url:"ajaxAddFacultyByAdmin.php",
         method:"POST",
         data: {
            "name":Name,
            "age":Age,
            "gender":Gender,
            "branch":Branch,
            "city":City,
            "state":State,
            "dob":DOB,
            "email":Email,
            "address":Address,
            "facultyid":FacultyID,
            "mobileno":MobileNo
         },
         success:function(result){
            var object=JSON.parse(result);
            alert(object.message);
      }
       });
    }
      }
</script>
 <div class="col-lg-6 offset-lg-3">
    
  <div align="center">
     <h3>Fill the Faculty Details</h3><br>
      <form class='form-group' name='f1' action='AddFacultbyAdmin.php' method='Post'>
       <LABEL>FacultyID</LABEL>
         <input type='text' name='facultyid' class='form-control'/><br>
       <LABEL>Name</LABEL>
         <input type='text' name='name' id="testname"  class='form-control'/><br>
      <LABEL>Age</LABEL>
       <input type='text' name='age'  class='form-control'><br>
      <LABEL>Gender</LABEL>
      <select name='gender'class='form-control'>
          <option   class='form-control' value="Gender" selected="">Gender</option>
          <option   class='form-control' value="Male">Male</option>
          <option   class='form-control' value="Female">Female</option><br>
      </select> <br>
      <LABEL>Branch</LABEL>
      <input type='text' name='branch'   class='form-control'><br>
      <LABEL>City</LABEL>
      <input type='text' name='city'   class='form-control'><br>
      <LABEL>State</LABEL>
      <input type='text' name='state'  class='form-control'><br>
      <LABEL>DOB</LABEL>
      <input type='date' name='dob'  class='form-control'><br>
      <LABEL>Email</LABEL>
      <input type='email' name='email'  class='form-control'><br>
      <LABEL>MobileNo</LABEL>
      <input type='text' name='mobileno'   class='form-control'><br>
      <LABEL>Address</LABEL>
      <input type='text' name='address'  class='form-control'><br>
      <input type='hidden' name='id'>     
      <input type='button' name='Submit' value='Add' onclick="facultyAddbyAdmin();" class="btn btn-success btn-block" />
      </form>
      </div>
 </div>