 <script>
      $(document).ready(function(){
            $("#Submit").on("click",function(){
       var Branch=document.getElementById("Branch").value;       
        var Batch=document.getElementById("Batch").value;
        var Semester=document.getElementById("Semester").value;
        var RollNo=document.getElementById("RollNo").value;
         if(Branch=="Branch" && Batch=="Batch" && Semester=="Semester" && RollNo==''){
                   alert("please fill the form");     
                   return;
        }
        else
        {
           $.ajax({
                       url:"booksShowAll.php",
                     type:"GET",
                      data:{Branch:Branch,Batch:Batch,Semester:Semester,RollNo:RollNo},
                       success:function(data){
                            $("#result").html(data);
                    }
                 })
        }
            });
      });
</script>
<div class="container">
 	  <div class="row justify-content-center">
 	  	<div class="col-xl-10 col-md-offset-3" align="center">
 	  		<h2>Library Student Login</h2>
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
 	  		<label>Batch</label>
            <select  name="Batch"  id="Batch">
             <option selected="">Batch</option>
             <option value="2015-16">2015-16</option>
             <option value="2016-17">2016-17</option>
             <option value="2017-18">2017-18</option>
            </select>
 	  	&nbsp;
           <label>Semester</label>
            <select  id="Semester">
             <option selected="">Semester</option>
             <option value="1Sem">1st Semester</option>
             <option value="2Sem">2nd Semester</option>
             <option value="3Sem">3rd Semester</option>
             <option value="4Sem">4th Semester</option>
             <option value="5Sem">5th Semester</option>
             <option value="6Sem">6th Semester</option>
              </select>
               &nbsp;
            <label>Roll No</label>
            <input type="text" name="RollNo" id="RollNo">&nbsp;
 	  		<input type="button" class="btn btn-primary btn-lg" class="active"  name="submit" id="Submit" value="Submit">
            </form>
 </div>
</div>
</div>
  <div id="result"></div>