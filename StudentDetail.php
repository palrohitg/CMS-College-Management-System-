  
<?php 
    
          if($_GET['Searchtype']=="All"){     
           $Branch=$_GET["Branch"];
           $Batch=$_GET["Batch"];
          $Semester=$_GET["Semester"];
          $connection=mysqli_connect("localhost","root","","vikasproject");
          $query="SELECT *FROM Students where Branch='$Branch' AND Batch='$Batch' AND Semester='$Semester'";
         $result=mysqli_query($connection,$query);
         $ID=0;
        if(!$result){
         	  	die("query failed".mysqli_error($connection));
         	}
         	  ?>               
               <table class='table table-striped table-hover table-sm' border='1' width='100%' cellspacing='0'>
                        <tr>
                            <th>ID</th>
                            <th>NAME</th>
                            <th>AGE</th>
                            <th>GENDER</th>
                            <th>Edit</th>
                            <th>Delete</th>
                            <th>View</th>
                        </tr>
             <?php
          if($result){
          while($row=mysqli_fetch_assoc($result))
          {
               $Id=$row['StudentId'];
               $NAME=$row['Name'];
               $AGE=$row['Age'];
               $GENDER=$row['Gender'];
               $ID++;


               echo"
                  <tr class='danger'>
                     <td>$ID</td>
                     <td>$NAME</td>
                     <td>$AGE</td>
                     <td>$GENDER</td>
                     <td><a  onclick='CallAjaxEdit($Id);' id='Update'><span class='btn btn-theme btn-danger'>Edit</span></a></td>
                     <td><a  onclick='CallAjaxDelete($Id);'><span class='btn btn-warning'>Delete</span></a></td>
                     <td><a  onclick='CallAjaxView($Id);'><span class='btn btn-success'>View</span></a></td>   
                  </tr>";
            
          }
          echo "</table>";
          
            }
   }
   else{

         if($_GET['Searchtype']=="RollNo"){
            $RollNo=$_GET['RollNo'];
            $connection=mysqli_connect("localhost","root","","vikasproject");
            $query="SELECT *FROM Students where RollNo='$RollNo'";
            $result=mysqli_query($connection,$query);
            $ID=0;
            if(!$result){
                die("query failed".mysqli_error($connection));
            }
              ?>
                 <table class='table table-striped table-hover table-sm' border='1' width='100%' cellspacing='0'>
                          <tr>
                               <th>ID</th>
                               <th>NAME</th>
                             <th>AGE</th>
                             <th>GENDER</th>
                               <th>Edit</th>
                               <th>Delete</th>
                               <th>View</th>
                 </tr>
               <?php
            if($result){
            while($row=mysqli_fetch_assoc($result))
            {
                $Id=$row['StudentId'];
                $NAME=$row['Name'];
               $AGE=$row['Age'];
               $GENDER=$row['Gender'];
               $ID++;


                 echo"
                  <tr class='danger'>
                     <td>$ID</td>
                     <td>$NAME</td>
                     <td>$AGE</td>
                     <td>$GENDER</td>
                       <td><a  onclick='CallAjaxEdit($Id);' id='Update'><span class='btn btn-theme btn-danger'>Edit</span></a></td>
                     <td><a  onclick='CallAjaxDelete($Id);'><span class='btn btn-warning'>Delete</span></a></td>
                     <td><a  onclick='CallAjaxView($Id);'><span class='btn btn-success'>View</span></a></td>   
                  </tr>";
                
            }
            echo "</table>";
            }
         }
   }
  ?>