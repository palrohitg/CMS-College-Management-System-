<?php session_start();?>
<?php 
        echo"<div align='center'>
        <a  onclick='CallAjaxAddBook();'><span class='btn btn-primary btn-lg'>Add Book</span></a></div><BR>";
         $link=mysqli_connect("localhost","root","","vikasproject");
         $Branch= $_GET['Branch']; 
         $FacultyID= $_GET['FacultyID'];
         $result=mysqli_query($link,"SELECT * FROM libraryFaculty WHERE FacultyID='$FacultyID' AND Branch='$Branch'  ");
        echo "<div class='table-responsive'>";
        echo"<table class='table table-striped table-hover table-sm' border='1' width='100%' cellspacing='0'>
                         <tr>
                           
                             <th>Sr.No</th>
                             <th>FacultyID</th>
                             <th>BookName</th>
                             <th>Author</th>
                             <th>Edit</th>
                             <th>Delete</th>
                             <th>View</th>
                          </tr>";
   
         if($result)
         {  
              $SrNo=0;
            while($row=mysqli_fetch_assoc($result))
            {
               $FacultyID=$row['FacultyID'];
               $NAME=$row['Name'];
               $Code=$row['Code'];
               $Author=$row['Author'];
               $SrNo++;

                 echo"
                     <tr class='danger'>
                        
                         <td>$SrNo</td>
                         <td>$FacultyID</td>
                         <td>$NAME</td>
                         <td>$Author</td>
                         <td><a  onclick='CallAjaxEditFaculty($FacultyID,$Code);'><span class='btn btn-theme btn-danger'>Edit</span></a></td>
                         <td><a  onclick='CallAjaxDeleteFaculty($FacultyID,$Code);'><span class='btn btn-warning'>Delete</span></a></td>
                         <td><a  onclick='CallAjaxViewFaculty($FacultyID,$Code);'><span class='btn btn-success'>View</span></a></td>   
                     </tr>";
               
            }
          }
            echo "</table>";
           echo "</div>";
           echo "</div>";
         
    ?>
