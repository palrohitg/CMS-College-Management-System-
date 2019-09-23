
	<?php
           $link=mysqli_connect("localhost","root","","vikasproject");
         if($_GET["Branch"] && $_GET["FacultyID"]){

          $Branch=$_GET['Branch'];
          $FacultyId=$_GET['FacultyID'];  
         $result=mysqli_query($link,"SELECT *FROM Faculty where Branch='$Branch' AND FacultyId='$FacultyId'");
         }
         else{
          $Branch=$_GET['Branch'];
          $result=mysqli_query($link,"SELECT *FROM Faculty where Branch='$Branch'");

         }


         echo "<div class='table-responsive'>";
         echo"<table class='table table-striped table-hover table-sm' border='1' width='100%' cellspacing='0'>
              <tr>
		          <th>ID</th>
		          <th>NAME</th>
                  <th>AGE</th>
                  <th>GENDER</th>
		          <th>Edit</th>
		          <th>Delete</th>
		          <th>View</th>
	         </tr>";
         if($result)
         {
            while($row=mysqli_fetch_assoc($result))
            {
                $ID=$row['FacultyId'];
                $NAME=$row['Name'];
                $AGE=$row['Age'];
                $GENDER=$row['Gender'];
                echo"
                  <tr>
                     <td>$ID</td>
                     <td>$NAME</td>
                     <td>$AGE</td>
                     <td>$GENDER</td>
                     <td><a  onclick='CallAjaxEditFaculty($ID);' id='Update'><span class='btn btn-theme btn-danger'>Edit</span></a></td>
                     <td><a  onclick='CallAjaxDeleteFaculty($ID);'><span class='btn btn-warning'>Delete</span></a></td>
                     <td><a  onclick='CallAjaxViewFaculty($ID);'><span class='btn btn-success'>View</span></a></td>      
                  </tr>";
                
            }
            echo "</table>";
            echo "</div>";
         }

    ?>
    
    	