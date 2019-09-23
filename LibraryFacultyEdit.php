<script type="text/javascript">
    function myfunctionEdit(ID,BookCode){
    var ID=ID;
    var Code=BookCode;
    var BookName=document.f1.BookName.value;
    var Author=document.f1.Author.value;
    var Title =document.f1.Title.value;
    var IssuedDate =document.f1.IssuedDate.value;
    var ReturnDate=document.f1.ReturnDate.value;
    var BookCode=document.f1.BookCode.value; 
    $.ajax({
      url:"LibraryFacultyEdited.php",
      type:"GET",
      data:{Search:ID,BookName:BookName,Author:Author,Title:Title,IssuedDate:IssuedDate,ReturnDate:ReturnDate,BookCode:BookCode,Code:Code},
      success:function(){
           alert("Record Updated Successfully");
           $("#FacultyModal").modal("hide");     
      }
    });

   }
  </script>

      <h3 style="color: red;" align="center">Update Student Book Details </h3>
         <?php
        $link=mysqli_connect("localhost","root","","vikasproject");
         $ID=$_GET['Search'];
         $Code=$_GET['Code'];
         $result=mysqli_query($link,"SELECT * FROM libraryFaculty WHERE FacultyID='$ID' AND Code='$Code' ");
         if($result)
          {
          while($row=mysqli_fetch_assoc($result))
          {
    $ID=$row['FacultyID'];
    $Name=$row['Name'];
    $Author=$row['Author'];
    $Title=$row['Title'];
    $BookCode=$row['Code'];
    $IssuedDate=$row['IssueDate'];
    $ReturnDate=$row['ReturnDate'];
    $Branch=$row['Branch'];
    
    
   
           ?>
                <form  class='form-group'  name='f1'>
                 <LABEL>ID</LABEL>
                 <input type='text' name='ID'class='form-control'value="<?php echo $ID;?>"><br>
                 <LABEL>Name</LABEL>
                 <input type='text' name='BookName' class='form-control' value="<?php echo $Name;?>"><br>
                 <LABEL>Author</LABEL>
                 <input type='text' name='Author' class='form-control' value="<?php echo $Author;?>"><br>
                 <LABEL>Title</LABEL>
                 <input type='text' name='Title' class='form-control' value="<?php echo $Title;?>"><br>
                 <LABEL>BookCode</LABEL>
                 <input type='text' name='BookCode' class='form-control' value="<?php echo $BookCode;?>"><br>
                 
                 <LABEL>Issue Date</LABEL>
                 <input type='text' id="demo" name='IssuedDate' class='form-control' value="<?php echo $IssuedDate;?>"><br>
                 <LABEL>Return Date</LABEL>
                 <input type='Date' name='ReturnDate' class='form-control' value="<?php echo $ReturnDate;?>"><br>
                 <LABEL>Branch</LABEL>
                 <select name='Branch'class='form-control'>
                  <option   <?php  if($Branch=='CSE'){ echo"selected";}?> class='form-control'>CSE</option>
                  <option   <?php if($Branch=='IT') {echo"selected";}?> class='form-control'>IT</option>
                   <option   <?php if($Branch=='ECE') {echo"selected";}?> class='form-control'>ECE</option>
                  </select><br>
                <!--  <label>Returned checkbox</label>
                <input type="checkbox" name="Returnedcheckbox" value="1" <?php //if($Returnedcheckbox=='1') echo "checked='checked'"; ?>>-->
                    <input type='hidden' name='id' value='<?php echo $ID;?>'><br>
                   <input type='button' onclick="myfunctionEdit(<?php echo "$ID".","."$BookCode";?>)" name='Submit' class='btn btn-success btn-lg' value='Update'/>
                 </form>
               
         <?php         

         }
}

?>
