<script>
  
    function MyfunctionAddbook(){
    var ID= document.getElementById("ID").value;
    var BookName= document.getElementById("BookName").value;
    var IssuedDate= document.getElementById("IssuedDate").value;
    var ReturnDate= document.getElementById("ReturnDate").value;
    var BookCode= document.getElementById("BookCode").value;
    var Author= document.getElementById("Author").value;
    var Title= document.getElementById("Title").value;
    var Branch= document.getElementById("Branch").value;
   
      $.ajax({
      url:"LibraryFacultyBookAdded.php",
      type:"GET",
      data:{Search:ID,BookName:BookName,Author:Author,Title:Title,IssuedDate:IssuedDate,ReturnDate:ReturnDate,BookCode:BookCode,Branch:Branch},
      success:function(){
         alert("Record Added Successfully");
         $("#AddFaculty").modal("hide");     
      }
    });
 }
</script>

         
 	    <form  class='form-group'  name='f1'>
 	  		       <h1 align="center">Book Issued Form </h1>   
 	     <label>ID</label>
	    <input type='text' id='ID' placeholder='ID....'  class='form-control'><br>
         <label>Book Name</label>
	    <input type='text' id='BookName' placeholder='BookName....'  class='form-control'><br>
        <label>Author</label>
	    <input type='text' id='Author' placeholder='Author....'  class='form-control'><br>
	    <label>Title</label>
	    <input type='text' id='Title' placeholder='Title....'  class='form-control'><br>
	    <label>BookCode</label>
	    <input type='text' id='BookCode' placeholder='BookCode....'  class='form-control'><br>
        <label>Issue Date</label>
	    <input type='date' id='IssuedDate' placeholder='Date....'  class='form-control'><br>
        <label>Return Date</label>
	    <input type='Date' id='ReturnDate' placeholder='Date....'  class='form-control'><br>
         <label>Branch</label>
            <select id='Branch' class='form-control'>
             <option selected>Branch</option>
             <option value='CSE'>CSE</option>
             <option value='IC'>IC</option>
             <option value='ECE'>ECE</option>
             <option value='Civil'>Civil</option>
             <option value='Mechanical'>Mechanical</option>
             <option value='IT'>IT</option>
            </select>
 	  		<br>	
         <input  class='btn btn-primary btn-lg' type='button' onclick="MyfunctionAddbook();" name='Submit' value='ADD'>
			</form>
			</div>
 	 