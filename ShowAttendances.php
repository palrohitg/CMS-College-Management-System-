<!DOCTYPE html>
<html>
<head>

	 <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<title>Attendance</title>
</head>
<body>
</body>
</html>
<?php session_start(); ?>
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
            <th>1</th>
            <th>2</th>
            <th>3</th>
            <th>4</th>
            <th>5</th>
            <th>6</th>
            <th>7</th>
            <th>8</th>
            <th>9</th>
            <th>10</th>
            <th>11</th>
            <th>12</th>
            <th>13</th>
            <th>14</th>
            <th>15</th>
            <th>16</th>
            <th>17</th>
            <th>18</th>
            <th>19</th>
            <th>20</th>
            <th>21</th> 
            <th>22</th>
            <th>23</th>
            <th>24</th>
            <th>25</th>
            <th>27</th>
            <th>28</th>
            <th>29</th>
            <th>30</th>
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
              	while ($row=mysqli_fetch_assoc($query)) {

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
                  $Nine=$row['9'];
                  $Ten=$row['10'];
                  $Eleven=$row['11'];
                  $Twelve=$row['12'];
                  $Thirteen=$row['13'];
                  $Fourteen=$row['14'];
                  $Fifteen=$row['15'];
                  $sixteen=$row['16'];
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
                  $thirty=$row['30'];
              ?>		

                   
                    <tr> 
                         <td> <?php echo " $Sr";?></td> 
                         <td> <?php echo"$Name";?></td> 
                          <td><input type='checkbox' name='1a' value='1'></td> 
                          <td> <input type='checkbox' name='2a'value='1'></td> 
                          <td> <input type='checkbox' name='3a'value='1'></td> 
                          <td> <input type='checkbox' name='4a'value='1'></td> 
                          <td><input type='checkbox' name='5a' value='1'></td> 
                          <td> <input type='checkbox' name='6a'value='1'></td> 
                          <td> <input type='checkbox' name='7a'value='1'></td> 
                          <td> <input type='checkbox' name='9a'value='1'></td> 
                          <td> <input type='checkbox' name='10a'value='1'></td> 
                          <td> <input type='checkbox' name='11a'value='1'></td> 
                          <td> <input type='checkbox' name='12a'value='1'></td> 
                          <td> <input type='checkbox' name='13a'value='1'></td> 
                          <td> <input type='checkbox' name='14a'value='1'></td> 
                          <td> <input type='checkbox' name='15a'value='1'></td> 
                          <td> <input type='checkbox' name='16a'value='1'></td> 
                          <td> <input type='checkbox' name='17a'value='1'></td> 
                          <td> <input type='checkbox' name='18a'value='1'></td> 
                          <td> <input type='checkbox' name='19a'value='1'></td> 
                          <td> <input type='checkbox' name='20a'value='1'></td> 
                          <td> <input type='checkbox' name='21a'value='1'></td> 
                          <td> <input type='checkbox' name='22a'value='1'></td> 
                          <td> <input type='checkbox' name='23a'value='1'></td> 
                          <td> <input type='checkbox' name='24a'value='1'></td> 
                          <td> <input type='checkbox' name='25a'value='1'></td> 
                          <td> <input type='checkbox' name='26a'value='1'></td> 
                          <td> <input type='checkbox' name='27a'value='1'></td> 
                          <td> <input type='checkbox' name='28a'value='1'></td> 
                          <td> <input type='checkbox' name='29a'value='1'></td> 
                          <td> <input type='checkbox' name='30a'value='1'></td> 
                          <input type='hidden' value='$Sr' name='srno'>


                    </tr>
                  <?php  

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
                    $SrNo=$_REQUEST['srno'];
                    $First=$_REQUEST['1a'];
              		 $Second=$_REQUEST['2a'];
              		 $Third=$_REQUEST['3a'];
              		 $Fourth=$_REQUEST['4a'];
              		 $Five=$_REQUEST['5a'];
              		 $Six=$_REQUEST['6a'];
              		$Seven=$_REQUEST['7a'];
                  $Eight=$_REQUEST['8a'];
                  $Nine=$_REQUEST['9a'];
                  $Ten=$_REQUEST['10a'];
                  $Eleven=$_REQUEST['11a'];
                  $Twelve=$_REQUEST['12a'];
                  $Thirteen=$_REQUEST['13a'];
                  $Fourteen=$_REQUEST['14a'];
                  $Fifteen=$_REQUEST['15a'];
                  $sixteen=$_REQUEST['16a'];
                  $Seventeen=$_REQUEST['17a'];
                  $Eighteen=$_REQUEST['18a'];
                  $Nineteen=$_REQUEST['19a'];
                  $Twenty=$_REQUEST['20a'];
                  $Twentyone=$_REQUEST['21a'];
                  $Twentytwo=$_REQUEST['22a'];
                  $Twentythree=$_REQUEST['23a'];
                  $Twentyfour=$_REQUEST['24a'];
                  $Twentyfive=$_REQUEST['25a'];
                  $Twentysix=$_REQUEST['26a'];
                  $Twentyseven=$_REQUEST['27a'];
                  $Twentyeight=$_REQUEST['28a'];
                  $Twentynine=$_REQUEST['29a'];
                  $thirty=$_REQUEST['30a'];
                  

                  $Date=$_REQUEST['dated'];
                  $WorkingDay=$_REQUEST['WorkingDay'];
              		$Month=$_REQUEST['month'];
                 $FacultyId= $_SESSION['FacultyId'];
        $query=mysqli_query($link,"UPDATE `attendances` SET `1`='$First',`2`='$Second',`3`='$Third',`4`='$Fourth',`5`='$Five',`6`='$Six',`7`='$Seven',`8`='$Eight',`9`='$Nine',`10`='$Ten',`11`='$Eleven',`12`='$Twelve',`13`='$Thirteen',`14`='$Fourteen',`15`='$Fifteen',`16`='$sixteen',`17`='$Seventeen',`18`='$Eighteen',`19`='$Nineteen',`20`='$Twenty',`21`='$Twentyone',`22`='$Twentytwo',`23`='$Twentythree',`24`='$Twentyfour',`25`='$Twentyfive',`26`='$Twentysix',`27`='$Twentyseven',`28`='Twentyeight',`29`='$Twentynine',`30`='$thirty',`Dated`='$Date',`WorkingDay`='$WorkingDay',`Month`='$Month' where FacultyId='$FacultyId' ");
         if($query)
         {
         	 header("location:FacultyDashboard.html");
         	
         }
    }
 ?>
</body>
</html>








