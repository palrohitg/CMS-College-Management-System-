<!DOCTYPE html>
<html>
<head>

	 <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
   <script type="text/javascript">
     function Printfunction()
     {

       window.print();

     }
   </script>
	<title>Attendance</title>
</head>
<body>
</body>
</html>
<?php session_start(); ?>
 <?php 
       if(!isset($_REQUEST['Submit']))
       {
      	?>
    
            <form class='form-group' action='Attendances.php' method='Post'>
	          <div class="table-responsive">
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
                     </select >&nbsp;&nbsp;
                     <label>Month</label>&nbsp;
                     <select name="month">
                      <option value='jan'>jan</option>
                       <option value="feb">feb</option>
                       <option value="mar">mar</option>
                       <option value="april">april</option>
                       <option value="may">may</option>
                       <option value="jun">jun</option>
                       <option value="jul">jul</option>
                       <option value="aug">aug</option>
                       <option value="sep">sep</option>
                       <option value="oct">oct</option>
                       <option value="nov">nov</option>
                       <option value="dec">dec</option>
                     </select>

                     <br><br>
  </div>
        <tr>    

        	<th>Sr.No</th>
            <th>Name</th>
            <?php 
            for ($a=1; $a <=30 ; $a++) { 
              echo "<th>".$a."</th>";
            }
            ?>
                   </tr>
        <?php
              $link=mysqli_connect("localhost","root" ,"","vikasproject");
               $Batch= $_SESSION['Batch'];
               $Branch= $_SESSION['Branch'];
               $Semester= $_SESSION['Semester'];
               $Subject= $_SESSION['Subject'];
               $FacultyId= $_SESSION['FacultyId'];
              $query=mysqli_query($link,"SELECT * From Attendances where Branch='$Branch' AND Batch='$Batch' AND FacultyId ='$FacultyId' AND Semester='$Semester'AND Subject='$Subject'");


              if($query)
              {
                 $i=0;
              	while ($row=mysqli_fetch_array($query)) 
                {

                  $Sr=$row['SrNo'];
              		$StudentId=$row['StudentId'];
              		$Name=$row['Name'];
              		$First=$row['1'];
              		$Second=$row['2'];
              		$Third=$row['3'];
              		$Fourth=$row['4'];
              		$Five=$row['5'];
              		$Six=$row['6'];
             	  	$Seven=$row['7'];
                 $Eight=$row['8'];
                 $Nine=$row['9'];
                 $Ten=$row['10'];
                 $Eleven=$row['11'];
                 $Twelve=$row['12'];
                 $Thirteen=$row['13'];
                 $Fourteen=$row['14'];              
                 $Fifteen=$row['15'];
                 $Sixteen=$row['16'];
                 $Seventeen=$row['17'];
                 $Eighteen=$row['18'];
                 $Nineteen=$row['19'];
                 $Twenty=$row['20'];
                 $Twentyone=$row['21'];
                 $Twentytwo=$row['22'];
                 $Twentythree=$row['23'];
                 $Twentyfour=$row['24'];
                 $Twentyfive=$row['25'];
                 $Twentysix=$row['26'];
                 $Twentyseven=$row['27'];
                 $Twentyeight=$row['28'];
                 $Twentynine=$row['29'];
                 $Thirty=$row['30'];
             ?>		

                 
                   <tr> 
                         <td> <?php echo "$Sr";?></td> 
                         <td> <?php echo"$Name";?></td> 
                          <td><input type='checkbox'  name='1a[<?php  echo $i; ?>]'   value='1' <?php if($First=='1') echo "checked='checked'";?>></td> 
                          <td> <input type='checkbox' name='2a[<?php  echo $i; ?>]'   value='1' <?php if($Second=='1') echo "checked='checked'";?>></td> 
                          <td> <input type='checkbox' name='3a[<?php  echo $i; ?>]'   value='1'<?php if($Third=='1') echo "checked='checked'";?>></td> 
                          <td> <input type='checkbox' name='4a[<?php  echo $i; ?>]'   value='1'<?php if($Fourth=='1') echo "checked='checked'";?>></td> 
                          <td><input type='checkbox'  name='5a[<?php  echo $i; ?>]'  value='1' <?php if($Five=='1') echo "checked='checked'";?> ></td> 
                          <td> <input type='checkbox' name='6a[<?php  echo $i; ?>]'  value='1' <?php if($Six=='1') echo "checked='checked'";?> ></td> 
                          <td> <input type='checkbox' name='7a[<?php  echo $i; ?>]'  value='1' <?php if($Seven=='1') echo "checked='checked'";?> ></td> 
                          <td> <input type='checkbox' name='8a[<?php  echo $i; ?>]'  value='1' <?php if($Eight=='1') echo "checked='checked'";?> ></td> 
                          <td> <input type='checkbox' name='9a[<?php  echo $i; ?>]'  value='1' <?php if($Nine=='1') echo "checked='checked'";?> ></td> 
                          <td> <input type='checkbox' name='10a[<?php echo $i; ?>]'  value='1' <?php if($Ten=='1') echo "checked='checked'";?> ></td> 
                          <td> <input type='checkbox' name='11a[<?php echo $i; ?>]'  value='1' <?php if($Eleven=='1') echo "checked='checked'";?> ></td> 
                          <td> <input type='checkbox' name='12a[<?php echo $i; ?>]'  value='1' <?php if($Twelve=='1') echo "checked='checked'";?> ></td> 
                          <td> <input type='checkbox' name='13a[<?php echo $i; ?>]'  value='1' <?php if($Thirteen=='1') echo "checked='checked'";?> ></td> 
                          <td> <input type='checkbox' name='14a[<?php echo $i; ?>]'  value='1' <?php if($Fourteen=='1') echo "checked='checked'";?> ></td> 
                          <td> <input type='checkbox' name='15a[<?php echo $i; ?>]' value='1' <?php if($Fifteen=='1') echo "checked='checked'";?> ></td> 
                          <td> <input type='checkbox' name='16a[<?php echo $i; ?>]' value='1' <?php if($Sixteen=='1') echo "checked='checked'";?> ></td> 
                          <td> <input type='checkbox' name='17a[<?php echo $i; ?>]' value='1' <?php if($Seventeen=='1') echo "checked='checked'";?> ></td> 
                          <td> <input type='checkbox' name='18a[<?php echo $i; ?>]' value='1' <?php if($Eighteen=='1') echo "checked='checked'";?> ></td> 
                          <td> <input type='checkbox' name='19a[<?php echo $i; ?>]' value='1' <?php if($Nineteen=='1') echo "checked='checked'";?> ></td> 
                          <td> <input type='checkbox' name='20a[<?php echo $i; ?>]' value='1' <?php if($Twenty=='1') echo "checked='checked'";?> ></td> 
                          <td> <input type='checkbox' name='21a[<?php echo $i; ?>]' value='1' <?php if($Twentyone=='1') echo "checked='checked'";?> ></td> 
                          <td> <input type='checkbox' name='22a[<?php echo $i; ?>]' value='1' <?php if($Twentytwo=='1') echo "checked='checked'";?> ></td> 
                          <td> <input type='checkbox' name='23a[<?php echo $i; ?>]' value='1' <?php if($Twentythree=='1') echo "checked='checked'";?> ></td> 
                          <td> <input type='checkbox' name='24a[<?php echo $i; ?>]' value='1' <?php if($Twentyfour=='1') echo "checked='checked'";?> ></td> 
                          <td> <input type='checkbox' name='25a[<?php echo $i; ?>]'  value='1' <?php if($Twentyfive=='1') echo "checked='checked'";?> ></td> 
                          <td> <input type='checkbox' name='26a[<?php echo $i; ?>]' value='1' <?php if($Twentysix=='1') echo "checked='checked'";?> ></td> 
                          <td> <input type='checkbox' name='27a[<?php echo $i; ?>]' value='1' <?php if($Twentyseven=='1') echo "checked='checked'";?> ></td> 
                          <td> <input type='checkbox' name='28a[<?php echo $i; ?>]' value='1' <?php if($Twentyeight=='1') echo "checked='checked'";?> ></td> 
                          <td> <input type='checkbox' name='29a[<?php echo $i; ?>]' value='1' <?php if($Twentynine=='1') echo "checked='checked'";?> ></td> 
                          <td> <input type='checkbox' name='30a[<?php echo $i; ?>]' value='1' <?php if($Thirty=='1') echo "checked='checked'";?> ></td> 
                          <input type='hidden' value="<?php echo $StudentId;?>" name= 'StudentId[]'> 
 

                    </tr>
                  <?php  
                   $i++;
              	}

              }
         
         ?> 
          </table>
              </div>
          <div align="center">
          <input type='submit' name='Submit' value='Submit' class='btn btn-primary btn-lg' >
          <button onclick="Printfunction()">Print this page</button>
      </div>
        </form>
  <?php
 }
 else
 {

$link=mysqli_connect("localhost","root" ,"","vikasproject");
                for($i = 0; $i < count($_REQUEST['StudentId']); $i++)
                {
                    $StudentId=$_REQUEST['StudentId'][$i];
                    $First=(!empty($_REQUEST['1a'][$i]))? $_REQUEST['1a'][$i]:0;
                    $Second=(!empty($_REQUEST['2a'][$i]))? $_REQUEST['2a'][$i]:0;
                  	$Third=(!empty($_REQUEST['3a'][$i]))? $_REQUEST['3a'][$i]:0;
              		  $Fourth=(!empty($_REQUEST['4a'][$i]))? $_REQUEST['4a'][$i]:0;
              	    $Five=(!empty($_REQUEST['5a'][$i]))? $_REQUEST['5a'][$i]:0;
              		  $Six=(!empty($_REQUEST['6a'][$i]))? $_REQUEST['6a'][$i]:0;
                   $Seven=(!empty($_REQUEST['7a'][$i]))? $_REQUEST['7a'][$i]:0;
              		 $Eight=(!empty($_REQUEST['8a'][$i]))? $_REQUEST['8a'][$i]:0;
                  $Nine=(!empty($_REQUEST['9a'][$i]))? $_REQUEST['9a'][$i]:0;
                  $Ten=(!empty($_REQUEST['10a'][$i]))? $_REQUEST['10a'][$i]:0;
                  $Eleven=(!empty($_REQUEST['11a'][$i]))? $_REQUEST['11a'][$i]:0;
                  $Twelve=(!empty($_REQUEST['12a'][$i]))? $_REQUEST['12a'][$i]:0;
                  $Thirteen=(!empty($_REQUEST['13a'][$i]))? $_REQUEST['13a'][$i]:0;
                  $Fourteen=(!empty($_REQUEST['14a'][$i]))? $_REQUEST['14'][$i]:0;
                  $Fifteen=(!empty($_REQUEST['15a'][$i]))? $_REQUEST['15a'][$i]:0;
                  $Sixteen=(!empty($_REQUEST['16a'][$i]))? $_REQUEST['16a'][$i]:0;
                  $Seventeen=(!empty($_REQUEST['17a'][$i]))? $_REQUEST['17a'][$i]:0;
                  $Eighteen=(!empty($_REQUEST['18a'][$i])) ?$_REQUEST['18a'][$i] :0;
                  $Nineteen=(!empty($_REQUEST['19a'][$i])) ?$_REQUEST['19a'][$i] :0;
                  $Twenty=(!empty($_REQUEST['20a'][$i])) ?$_REQUEST['20a'][$i] :0;
                  $Twentyone=(!empty($_REQUEST['21a'][$i])) ?$_REQUEST['21a'][$i] :0;
                  $Twentytwo=(!empty($_REQUEST['22a'][$i])) ?$_REQUEST['22a'][$i] :0;
                  $Twentythree=(!empty($_REQUEST['23a'][$i])) ?$_REQUEST['23a'][$i] :0;
                  $Twentyfour=(!empty($_REQUEST['24a'][$i])) ?$_REQUEST['24a'][$i] :0;
                  $Twentyfive=(!empty($_REQUEST['25a'][$i])) ?$_REQUEST['25a'][$i] :0;
                  $Twentysix=(!empty($_REQUEST['26a'][$i])) ?$s_REQUEST['26a'][$i] :0;
                  $Twentyseven=(!empty($_REQUEST['27a'][$i])) ?$_REQUEST['27a'][$i] :0;
                  $Twentyeight=(!empty($_REQUEST['28a'][$i])) ?$_REQUEST['28a'][$i] :0;
                  $Twentynine=(!empty($_REQUEST['29a'][$i])) ?$_REQUEST['29a'][$i] :0;
                  $Thirty=(!empty($_REQUEST['30a'][$i])) ?$_REQUEST['30'][$i] :0;
                  $Date=$_REQUEST['dated'];
                  $WorkingDay=$_REQUEST['WorkingDay'];
                 	$Month=$_REQUEST['month'];
                  $FacultyId= $_SESSION['FacultyId'];
                  $Subject= $_SESSION['Subject'];

         $query=mysqli_query($link,"UPDATE `attendances` SET `1`='$First',`2`='$Second',`3`='$Third',`4`='$Fourth',`5`='$Five',`6`='$Six',`7`='$Seven',`8`='$Eight',`9`='$Nine',`10`='$Ten',`11`='$Eleven',`12`='$Twelve',`13`='$Thirteen',`14`='$Fourteen',`15`='$Fifteen',`16`='$Sixteen',`17`='$Seventeen',`18`='$Eighteen',`19`='$Nineteen',`20`='$Twenty',`21`='$Twentyone',`22`='$Twentytwo',`23`='$Twentythree',`24`='$Twentyfour',`25`='$Twentyfive',`26`='$Twentysix',`27`='$Twentyseven',`28`='$Twentyeight',`29`='$Twentynine',`30`='$Thirty',`Dated`='$Date',`WorkingDay`='$WorkingDay',`Month`='$Month' WHERE  StudentId='$StudentId' AND FacultyId='$FacultyId'AND Subject='$Subject' ");
       }
          if(!$query)
          {
            die("query failed".mysqli_error());
          }
         if($query)
         {
         	 header("location:FacultyDashboard.html");
         }
         
    }
 ?>
</body>
</html>








