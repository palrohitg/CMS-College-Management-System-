<script>
  function MyfunctionStudentEdit(RollNo,Code){
    var ID=RollNo;
    var Code=Code;
    //alert(ID);
   var BookName= document.f1.BookName.value;
   var BookCode= document.f1.BookCode.value;
   var IssuedDate= document.f1.IssuedDate.value;
   var ReturnDate= document.f1.ReturnDate.value;
    var Author= document.f1.Author.value;

      $.ajax({
      url:"LibraryStudentEdited.php",
      type:"GET",
      data:{Search:ID,BookName:BookName,Author:Author,IssuedDate:IssuedDate,ReturnDate:ReturnDate,BookCode:BookCode,Code:Code},
      success:function(){
         alert("Record Updated Successfully");
         $("#exampleModal").modal("hide");     
      }
    });


  }
</script>
        <h3 style="color: red;" align="center">Update Student Book Details </h3>

         <?php
        $link=mysqli_connect("localhost","root","","vikasproject");
         $ID=$_GET['Search'];
         $BookCode=$_GET['BookCode'];
         $result=mysqli_query($link,"SELECT *FROM library WHERE RollNO='$ID' And Code='$BookCode'");
         if($result)
          {
        
          while($row=mysqli_fetch_assoc($result))
          {
    $RollNo=$row['RollNo'];
    $Name=$row['Name'];
    $Author=$row['Author'];
    $Code=$row['Code'];
    $IssuedDate=$row['IssuedDate'];
    $ReturnDate=$row['ReturnDate'];
    $Branch=$row['Branch'];
    $Batch=$row['Batch'];
    $Returnedcheckbox=$row['Returnedcheckbox'];
   
           ?>
                <form  class='form-group' name='f1'>
                 <LABEL>Roll NO</LABEL>
                 <input type='text' name='RollNo'class='form-control'value="<?php echo $RollNo;?>"><br>
                 <LABEL>BookName</LABEL>
                 <input type='text' name='BookName' id="BookName" class='form-control' value="<?php echo $Name;?>"><br>
                 <LABEL>Author</LABEL>
                 <input type='text'  id="Author" name='Author' class='form-control' value="<?php echo $Author;?>"><br>
                 <LABEL>BookCode</LABEL>
                 <input type='text'  id="BookCode" name='BookCode' class='form-control' value="<?php echo $Code;?>"><br>
                 <LABEL>Issue Date</LABEL>
                 <input type='text'  id="IssuedDate" name='IssuedDate' class='form-control' value="<?php echo $IssuedDate;?>"><br>
                 <LABEL>Return Date</LABEL>
                 <input type='Date'  id="ReturnDate" name='ReturnDate' class='form-control' value="<?php echo $ReturnDate;?>"><br>
                 <LABEL>Branch</LABEL>
                 <select name='Branch'class='form-control'>
                  <option   <?php  if($Branch=='CSE'){ echo"selected";}?> class='form-control'>CSE</option>
                  <option   <?php if($Branch=='IT') {echo"selected";}?> class='form-control'>IT</option>
                   <option   <?php if($Branch=='ECE') {echo"selected";}?> class='form-control'>ECE</option>
                  </select><br>

                 <LABEL>Batch</LABEL>
                 <select name='Batch'class='form-control'>
                  <option   <?php  if($Batch=='2015-16'){ echo"selected";}?> class='form-control'>2015-16</option>
                  <option   <?php if($Batch=='2016-17') {echo"selected";}?> class='form-control'>2016-17</option>
                   <option   <?php if($Batch=='2017-18') {echo"selected";}?> class='form-control'>2017-18</option>
                  </select><br>
                  <label>Returned checkbox</label>
                  <input type="checkbox" name="Returnedcheckbox" value="1"> <?php if($Returnedcheckbox=='1') echo "checked='checked'"; ?>
                    <input type='hidden' name='id' value='<?php echo $RollNo;?>'><br>
                    <input type='button' onclick="MyfunctionStudentEdit(<?php echo "$RollNo".","."$Code";?>);" class='btn btn-success btn-lg' value='Update'/>
                 </form>
               
         <?php         

         }
}
      ?> 

</body>
</html>
