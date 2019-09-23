<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<title>Attendance view</title>
</head>
<body>
	<?php 
	$link=mysqli_connect("localhost" ,"root" ,"","vikasproject");
	$Id=$_REQUEST["Attendance"];
	$query=mysqli_query($link,"SELECT * FROM Attendances WHERE SrNo= $Id ");
	if($query)
	{
		while($row=mysqli_fetch_assoc($query))
		{
			        $Sr=$row['SrNo'];
              		$Name=$row['Name'];
              		$First=$row['1'];
              		$Second=$row['2'];
              		$Third=$row['3'];
              		$Fourth=$row['4'];
              		$Five=$row['5'];
              		$Six=$row['6'];
              		$Seven=$row['7'];
              		$Eight=$row['8'];
              		$Date=$row['Dated'];
              		$WorkingDay=$row['WorkingDay'];
     ?>         		
              	
    <div class='table-responsive'>




    <table class='table table-striped table-hover table-sm' border='1' width='100%' cellspacing='0'>
      <div align="center">
      <h1>Attendace Information</h1>
</div>
    <br>
    <br>
        
      	  <tr><th>SrNo</th><td><?php echo "$Sr" ;?></td></tr>
      	  <tr><th>Name</th><td><?php echo "$Name" ;?></td></tr>
      	  <tr><th>1</th><td><?php echo "$First" ;?></td></tr>
      	  <tr><th>2</th><td><?php echo "$Second" ;?></td></tr>
      	  <tr><th>3</th><td><?php echo "$Third" ;?></td></tr>
      	  <tr><th>4</th><td><?php echo "$Fourth" ;?></td></tr>
      	  <tr><th>5</th><td><?php echo "$Six" ;?></td></tr>
      	  <tr><th>6</th><td><?php echo "$Seven" ;?></td></tr>
      	  <tr><th>7</th><td><?php echo "$Eight" ;?></td></tr>
      	  <tr><th>8</th><td><?php echo "$Five" ;?></td></tr>
          <tr><th>Date</th><td><?php echo "$Date" ;?></td></tr>
       	  <tr><th>Working Day</th><td><?php echo "$WorkingDay" ;?></td></tr>

		
	</table>
</div>
</body>
<?php
		}
	}

	
?>
</body>
</html>