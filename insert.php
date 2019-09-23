<!DOCTYPE html>
<html>
<head>
	 <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<title>Attendance</title>
</head>
<body>
 <?php 
       if(!isset($_POST['Submit'])){
      	?>
 
	  <div class="table-responsive">
           <form class='form-group' action='Attendances.php' method='Post'>
           <table class="table table-striped table-hover table-border">
         <h2 align="center"> Attendances Management</h2><br>
                <div align="center">
                    <label>Date</label>&nbsp; 
                   <input type='date' name="dated">&nbsp;&nbsp;
                    <label>Working Day</label> &nbsp;

                   <select name="WorkingDay">
                   	<option value="1">1</option>
                   	<option value="2">2</option>
                   	<option value="3">3</option>
                   	<option value="4">4</option>
                   	<option value="5">5</option>
                   </select ><br><br>
  </div>
        <tr>    

        	<th>Sr.No</th>
            <th>Name</th>
            <th>1</th>
            <th>2</th>
            <th>3</th>
            <th>4</th>
            <th>5</th>
            <th>6</th>
            <th>7</th>
            <th>8</th>
        </tr>
         <?php
              $link=mysqli_connect("localhost","root" ,"","vikasproject");
              $query=mysqli_query($link,"SELECT * From Attendances ");


              if($query)
              {
              	while ($row=mysqli_fetch_assoc($query)) {

              		
              		$Name=$row['Name'];
              		$First=$row['1'];
              		$Second=$row['2'];
              		$Third=$row['3'];
              		$Fourth=$row['4'];
              		$Five=$row['5'];
              		$Six=$row['6'];
              		$Seven=$row['7'];
              		$Eight=$row['8'];

              echo"     
                    <tr> 
                         <td>  $Sr</td> 
                         <td> $Name</td> 
                          <td><input type='checkbox' name='1' value='A'></td> 
                          <td> <input type='checkbox' name='2'value='A'></td> 
                          <td> <input type='checkbox' name='3'value='A'></td> 
                          <td> <input type='checkbox' name='4'value='A'></td> 
                          <td><input type='checkbox' name='5' value='A'></td> 
                          <td> <input type='checkbox' name='6'value='A'></td> 
                          <td> <input type='checkbox' name='7'value='A'></td> 
                          <td> <input type='checkbox' name='8'value='A'></td> 
                          <input type='hidden' value='$Sr' name='srno'>


                    </tr>";

              	}

              }
         
         ?> 
          </table>
          <div align="center">
          <input type='submit' name='Submit' value='Submit' class='btn btn-primary btn-lg' >
      </div>
      	</form>
  </div>
  <?php
 }
 else{

$link=mysqli_connect("localhost","root" ,"","vikasproject");
                    $id=$_REQUEST['srno'];
                    $First=$_REQUEST['1'];
              		 $Second=$_REQUEST['2'];
              		 $Third=$_REQUEST['3'];
              		 $Fourth=$_REQUEST['4'];
               		 $Five=$_REQUEST['5'];
              		 $Six=$_REQUEST['6'];
              		 $Seven=$_REQUEST['7'];
              		 $Eight=$_REQUEST['8'];
              		 $Date=$_REQUEST['dated'];
              		 $WorkingDay=$_REQUEST['WorkingDay'];
        $query=mysqli_query($link,"INSERT INTO `attendances`(`1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `Dated`, `WorkingDay`) VALUES ('$First','$Second','Third','$Fourth','$Five','$Six','$Seven','$Eight','$Date','$WorkingDay')");
         if($query)
         {
         	 header("location:FacultyDashboard.html");
         	
         }
    }
 ?>
</body>
</html>








