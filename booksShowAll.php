<?php session_start();?>
<?php 
       echo"<div align='center'>
       <a  onclick='CallAjaxAdd();'><span class='btn btn-primary btn-lg'>Add Student</span></a></div><BR>";
         $link=mysqli_connect("localhost","root","","vikasproject");
         $Batch= $_GET['Batch'];
         $Branch= $_GET['Branch'];
         $Semester= $_GET['Semester'];
         $RollNo= $_GET['RollNo'];
         $result=mysqli_query($link,"SELECT * FROM library WHERE Branch='$Branch' AND Batch='$Batch' AND Semester='$Semester' AND RollNo='$RollNo' ");
         $ID=0;
         echo "<div class='table-responsive'>";
        echo"<table class='table table-striped table-hover table-sm' border='1' width='100%' cellspacing='0'>
                         <tr>
                             <th>Sr.NO</th>
                             <th>Roll NO</th>
                             <th>BookName</th>
                             <th>Author</th>
                             <th>Edit</th>
                             <th>Delete</th>
                             <th>View</th>
   </tr>";
   
         if($result)
         {
            while($row=mysqli_fetch_assoc($result))
            {
               $Id=$row['SrNo'];
               $RollNo=$row['RollNo'];
               $BookCode=$row['Code'];
               $NAME=$row['Name'];
               $Author=$row['Author'];
               $ID++;


                 echo"
                     <tr class='danger'>
                         <td>$ID</td>
                         <td>$RollNo</td>
                         <td>$NAME</td>
                         <td>$Author</td>
                         <td><a  onclick='CallAjaxEdit($RollNo,$BookCode);'><span class='btn btn-theme btn-danger'>Edit</span></a></td>
                         <td><a  onclick='CallAjaxDelete($RollNo,$BookCode);'><span class='btn btn-warning'>Delete</span></a></td>
                         <td><a  onclick='CallAjaxView($RollNo,$BookCode);'><span class='btn btn-success'>View</span></a></td>   
                     </tr>";
               
            }
          }
            echo "</table>";
           echo "</div>";
           echo "</div>";
         
    ?>
