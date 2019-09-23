<style>
	.table-responsive {
    display: inline-table;
}
</style>
<?php
  session_start();
  $_SESSION["Batch"]=$_POST["Batch"];
  $_SESSION["Semester"]=$_POST["Semester"];
  $_SESSION["Branch"]=$_POST["Branch"];
  $_SESSION["Subject"]=$_POST["Subject"];

 
?>
<script>
	function insert(){
	$("#fileUpload").on("submit",function(event){
      event.preventDefault();
      var filename=document.getElementById("uploadfilename").value;
      alert(filename);

     var form =$("#fileUpload")[0];
      $.ajax({
            type:"post",
            url:"AttendanceFileRecordInserted.php",
            data:new FormData(form),
            contentType:false,
            processData:false,
            cache:false,
            success:function(data){
                alert("data is  inserted");
                $("#responseData").html(data);
                }
            
        });
        
});      
}
</script>
<form  enctype="multipart/form-data" method="Post" id="fileUpload">
	   <div align="center">
	       <label >Attendance</label><br>
	   </div>
	         <input type="file" name="uploadfilename"  id="uploadfilename"> 
	  &nbsp;
	 <input class="btn btn-primary" type="submit" onclick="insert();"  value='Upload'>	
</form>
<br>	
<br>	
<div id="responseData">
  <h5 style="text-align: center;">Attendances Record</h5><br>	
  <div class="table-responsive">
<table class="table  table-striped table-hover table-center" align="center">
	<thead>
		<tr>
		  <th>SrNo</th>
		  <th width="80%">Name</th>
	    </tr>
	</thead>
	 <?php
	  $conn=mysqli_connect("localhost","root","","vikasproject");
	   $Batch=$_SESSION["Batch"];
      $Semester=$_SESSION["Semester"];
       $Branch=$_SESSION["Branch"];
       $Subject=$_SESSION["Subject"];

	  $query=mysqli_query($conn,"Select  * From Attendances where Branch='$Branch' &&   Semester='$Semester' &&  Batch='$Batch' &&  Subject='$Subject' ");
	  $SrNo=0;
	   if($row=mysqli_fetch_assoc($query)) {
	  	$SrNo++
	 ?>
   
	 <tbody>
	 	<tr>
	 		 <td><?php echo $SrNo; ?></td>
	 		 <td><?php echo $row["FileName"]; ?></td>
	    </tr>

	 		 </tbody>
<?php 
	  }
	 ?>
	 
</table>
</div>
</div>
