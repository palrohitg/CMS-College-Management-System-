<?php
 echo "<br>" ;
 if(!empty($_FILES['uploadfilename']['name'])){
     $output="";
     $allow_ext=array("csv");
     $filedata=fopen($_FILES['uploadfilename']['tmp_name'],"r");
     fgetcsv($filedata);
     echo"
         <table class=\"table table-bordered  table-hover\">
            <thead class=\"table-dark\">
             <tr>
                 <th>SrNo</th>
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
                 <th>Update</th>
             </tr>
             <thead>";
     while($row=fgetcsv($filedata)){
         echo"<tr>";
         echo "<td>". $row[0]."</td>";
         echo  "<td>".$row[1]."</td>";
         echo "<td>". $row[2]."</td>";
         echo "<td>". $row[3]."</td>";
         echo "<td>". $row[4]."</td>";
         echo "<td>". $row[5]."</td>";
         echo "<td>". $row[6]."</td>";
         echo "<td>". $row[7]."</td>";
         echo "<td>". $row[8]."</td>";
         echo "<td>". $row[9]."</td>";
         echo "<td>". $row[10]."</td>";
         //echo "<td>". $row[11]."</td>";
         echo "<td>"."<input type='button' class=\"btn btn-warning\"value='update' onclick=\"updateAttendance();\">"."</td>";
         echo"</tr>";
               }
     
        echo" </table>";
 }

        ?>   
        <div align="center">
            <input type="button"  class="btn btn-success btn-lg" onclick="insert();" value="nowUpload">
        </div>
      <br>
      <br>