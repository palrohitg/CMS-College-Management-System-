
<head>
		    <script>
   	$(document).ready(function(){
   		$("#Submit").on("click",function(){
   		  var Branch=document.getElementById("Branch").value;
        var Batch=document.getElementById("Batch").value;
        var Semester=document.getElementById("Semester").value;
        var Searchtype=document.getElementById("Searchtype").value;
         if(Branch=="Branch" && Batch=="Batch" && Semester=="Semester"){
                   alert("please fill the form");	
                   return;
        }
        else
        {
           $.ajax({
         	           url:"StudentDetail.php",
                     type:"GET",
         	          data:{Branch:Branch,Batch:Batch,Semester:Semester,Searchtype:Searchtype},
         	           success:function(data){
         		          $("#result").html(data);
                    }
                 })
        }
   		});
   		$("#Submit2").on("click",function(){
   		var RollNo=document.getElementById("RollNo").value;
   		var Searchtype1=document.getElementById("Searchtype1").value;
   		if(RollNo ==''){
   			alert("please enter RollNo");
   		return;
   		}
   		else{
            $.ajax({
           	url:"StudentDetail.php",
         	  type:"GET",
         	  data:{RollNo:RollNo,Searchtype:Searchtype1},
         	  success:function(data){
         		$("#result").html(data);
            }
         })
          }
   });
   	});
   </script>
</head>
<body> 
        <div class="container">
        <div class="row justify-content-center">
        <div  class="col-xl-10" align="center" >
        <div align="center">
        <h3> Student Form</h3>
        <form  method="GET">
            <label>Branch</label>
            <select id="Branch" >
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
            <select  id="Batch" >
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
        <input type="hidden" value="All" id="Searchtype">
      <input  type="button" value="Submit" name="Submit" id="Submit" class="btn btn-primary"> </form> 
  </div>
   <br>
   <div align="center">
    <form action="" method="GET">
      <input type="text" id="RollNo" >            &nbsp;
                    <input type="hidden" value="RollNo" id="Searchtype1">

            <input  type="button" value="Submit" name="Submit" id="Submit2" class="btn btn-primary">   

    </form>
   </div>
  <br>
  <br>
   <div id="result">
   </div>
   </div>
  </div>
</div>
</body>