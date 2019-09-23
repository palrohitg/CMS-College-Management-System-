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
                     url:"FacultyShowAll.php",
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
<body>
  
        <div class="container">
        <div class="row justify-content-center">
        <div  class="col-xl-10" align="center" >
        <div align="center">
        <h3> Faculty Form</h3>

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
            </select>&nbsp;&nbsp;
            <label>Faculty ID</label>
            <input type="text" name="FacultyID" id="FacultyID">&nbsp;
        <input type="button" class="btn btn-primary btn-lg" class="active"  name="submit" id="Submit" value="Submit"><br><br>
            </form>
  </div>
  </div>
  </div>
  </div>      
  <div id="result">
    
  </div>
</body>