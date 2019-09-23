 <?php
  
 $link=mysqli_connect("localhost" ,"root" ,"","vikasproject");
 $ID=$_REQUEST['Search'];
 $result=mysqli_query($link,"SELECT *FROM library where RollNo='$ID' ");
 if($result)
 {
   while($row=mysqli_fetch_assoc($result))
   {
    $RollNo=$row['RollNo'];
    $Name=$row['Name'];
    $Author=$row['Author'];
    $Code=$row['Code'];
    $IssuedDate=$row['IssuedDate'];
    $ReturnDate=$row['ReturnDate'];
    echo "<div class='table-responsive'>";
    echo"<table class='table table-striped table-hover table-sm' border='1' width='100%' cellspacing='0'>";
    echo "<h1>Student  Book Information</h1>";

    echo"<br>
    <br>";      
    echo "<tr><td>RollNo</td><td>$RollNo</td></tr>";
    echo "<tr><td>Name</td><td>$Name</td></tr>";
    echo "<tr><td>Author</td><td>$Author</td></tr>";
    echo "<tr><td>BookCode</td><td>$Code</td></tr>";
    echo "<tr><td>IssuedDate</td><td>$IssuedDate</td></tr>";
    echo "<tr><td>ReturnDate</td><td>$ReturnDate</td></tr>";
    echo"</table>";
    echo "</div>";

  }	
}
?>
