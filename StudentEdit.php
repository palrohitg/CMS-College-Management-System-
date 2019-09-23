<script>
 
</script>
<?php  
        $link=mysqli_connect("localhost","root","","vikasproject");
         $ID=$_POST['Search'];
         $result=mysqli_query($link,"SELECT *FROM students WHERE StudentId='$ID'");
         if($result)
          {
        
          while($row=mysqli_fetch_assoc($result))
          {

           $id=$row['StudentId'];
           $name=$row['Name'];
           $age=$row['Age'];
           $gender=$row['Gender'];
           $dob=$row['Dob'];
           $city=$row['City'];
           $branch=$row['Branch'];
           $semester=$row['Semester'];
           $state=$row['State'];
           $email=$row['Email'];
           $mobileno=$row['MobileNo'];
           $address=$row['Address'];
           $classid=$row['ClassId'];
           $streamid=$row['StreamId'];
           $stat=$row['Status'];
      ?>
               
                <form   name='f1'class='form-group' action="StudentEdited.php" name='myform' method='Post'>
                 <LABEL>Name</LABEL>
                 <input type='text' name='name'class='form-control'value="<?php echo $name;?>"><br>
                 <LABEL>Age</LABEL>
                 <input type='text' name='age' class='form-control' value="<?php echo $age;?>"><br>
                 <LABEL>Gender</LABEL>
                 <select name='gender'class='form-control'>
                  <option   <?php  if($gender=='M'){ echo"selected";}?> class='form-control'>Male</option>
                  <option   <?php if($gender=='F') {echo"selected";}?> class='form-control'>Female</option><br>
                  </select><br>
                    <LABEL>DOB</LABEL>
                    <input type='text' name='dob'  class='form-control'value="<?php echo $dob; ?>"><br>
                    <LABEL>City</LABEL>
                    <input type='text' name='city' class='form-control' value="<?php echo $city; ?>"><br>
                    <LABEL>State</LABEL>
                    <input type='text' name='state'class='form-control'value="<?php echo $state; ?> "><br>
                    <LABEL>Email</LABEL>
                    <input type='text' name='email' class='form-control' value="<?php echo $email; ?>"><br>
                    <LABEL>Branch</LABEL>
                    <input type='text' name='branch'class='form-control' value="<?php echo $branch;?>"><br>
                    <LABEL>Semester</LABEL>
                    <input type='text' name='semester'class='form-control' value="<?php echo $semester;?>"><br>
                    <LABEL>MobileNo</LABEL>
                    <input type='text' name='mobileno'class='form-control' value="<?php echo $mobileno;?>"><br>
                    <LABEL>ClassId</LABEL>
                    <input type='text' name='classid' class='form-control' value="<?php echo $classid;?>"><br>

                    <LABEL>StreamId</LABEL>
                    <input type='text' name='streamid'class='form-control' value="<?php echo $streamid;?>"><br>

                    <LABEL>Address</LABEL>
                    <input type='text' name='address'class='form-control' value="<?php echo $address;?>"><br>
                     <LABEL>Status</LABEL><br>
                     <input type="checkbox" name="status" value="1" >&nbsp;Approved&nbsp;
                     <br><br>
                    <input type='hidden' name='id' value='<?php echo $id;?>'><br>
                   <input type='Button'name='Submit' onclick="MyfunctionforEdit(<?php echo $id ;?>);"class='btn btn-success btn-lg' value='Update'/>
                 </form>
                  
         <?php         
         }
}
?>
 <div id="result">
   
 </div>

