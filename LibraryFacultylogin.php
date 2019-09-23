 <script>
      $(document).ready(function(){
            $("#Submit").on("click",function(){
       var Branch=document.getElementById("Branch").value;       
        var FacultyID=document.getElementById("FacultyID").value;
         if(Branch=="Branch"  && FacultyID==''){
                   alert("please fill the form");     
                   return;
        }
        else
        {
           $.ajax({
                     url:"BooksShowAllForFaculty.php",
                     type:"GET",
                      data:{Branch:Branch,FacultyID:FacultyID},
                       success:function(data){
                            $("#result").html(data);
                    }
                 });
        }
   });
});
</script>
<div class="container">
 	  <div class="row justify-content-center">
 	  	<div class="col-xl-10 col-md-offset-3" align="center">
 	  		<h2>Library Faculty Login</h2>
 	  		 <img src="images/library-icon.png" height="200" width="200">
 	  		<form method="GET" >
 	  			 <label>Branch</label>
            <select name="Branch" id="Branch" >
             <option selected="">Branch</option>
             <option value="CSE">CSE</option>
             <option value="IC">IC</option>
             <option value="ECE">ECE</option>
             <option value="Civil">Civil</option>
             <option value="Mechanical">Mechanical</option>
             <option value="IT">IT</option>
            </select>
 	  	&nbsp;
 	  		       &nbsp;
            <label>Faculty ID</label>
            <input type="text" name="FacultyID" id="FacultyID">&nbsp;
 	  		<input type="button" class="btn btn-primary btn-lg" class="active"  name="submit" id="Submit" value="Submit">
            </form>
 </div>
</div>
</div>
  <div id="result">
    
  </div>