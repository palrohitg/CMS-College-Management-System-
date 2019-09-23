    <script>
      function myfunctionbookAdd(){
    var RollNo= document.getElementById("RollNo").value;
    var BookName= document.getElementById("BookName").value;
    var IssuedDate= document.getElementById("IssuedDate").value;
    var ReturnDate= document.getElementById("ReturnDate").value;
    var BookCode= document.getElementById("BookCode").value;
    var Author= document.getElementById("Author").value;
    var Branch= document.getElementById("Branch").value;
    var Batch= document.getElementById("Batch").value;
    var Semester= document.getElementById("Semester").value;
    alert(Semester);
      $.ajax({
      url:"LibraryStudentBookAdded.php",
      type:"GET",
      data:{Search:RollNo,BookName:BookName,Author:Author,IssuedDate:IssuedDate,ReturnDate:ReturnDate,BookCode:BookCode,Branch:Branch,Semester:Semester,Batch:Batch},
      success:function(){
         alert("Record Added Successfully");
         $("#Add").modal("hide");     
      }
    });

      }
    </script>

 	  	  <h1>Book Issued Form </h1>   
        <form  class='form-group'>
 	        <label>RollNo</label>
	        <input type='text' id='RollNo' placeholder='RollNo....'  class='form-control'><br>
          <label>Book Name</label>
	        <input type='text' id='BookName' placeholder='BookName....'  class='form-control'><br>
          <label>Author</label>
	        <input type='text' id='Author' placeholder='Author....'  class='form-control'><br>
	       <label>Book Code</label>
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
 	  		<label>Batch</label>
            <select  id='Batch'class='form-control'>
             <option selected>Batch</option>
             <option value='2015-16'>2015-16</option>
             <option value='2016-17'>2016-17</option>
             <option value='2017-18'>2017-18</option>
            </select>
 	  		    <br>
        <label>Semester</label>
           <select id='Semester' class='form-control'>
             <option selected>Semester</option>
             <option value='1Sem'>1Sem</option>
             <option value='2Sem'>2Sem</option>
             <option value='3Sem'>3Sem</option>
             <option value='4Sem'>4Sem</option>
             <option value='5Sem'>5Sem</option>
             <option value='6Sem'>6Sem</option>
            </select>
   <br>
     <input type='button' class='btn btn-danger btn-lg'  onclick='myfunctionbookAdd();'  value='ADD'>
			</form>
		

