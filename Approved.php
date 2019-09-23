
<?php
  
         $link=mysqli_connect("localhost","root","","vikasproject");
         $ID=$_REQUEST['Student'];
         $result=mysqli_query($link," UPDATE Students SET Status='1' WHERE StudentId='$ID' ");
         if($result)
         {  
         	         	
                        header("location:StudentShowAll.php");
         }
         else
         {
           echo "did not Approved";	
         }
      

?>
