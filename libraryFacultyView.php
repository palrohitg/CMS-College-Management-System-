 <?php
  
 $link=mysqli_connect("localhost" ,"root" ,"","vikasproject");
 $ID=$_GET['Search'];
 $Code=$_GET['Code'];
 $result=mysqli_query($link,"SELECT *FROM libraryFaculty where FacultyID='$ID' AND Code='$Code'");
 if($result)
 {
   while($row=mysqli_fetch_assoc($result))
   {
    $ID=$row['FacultyID'];
    $Name=$row['Name'];
    $Author=$row['Author'];
    $Title=$row['Title'];
    $BookCode=$row['Code'];
    $IssuedDate=$row['IssueDate'];
    $ReturnDate=$row['ReturnDate'];
    echo "<div class='table-responsive'>";
    echo"<table class='table table-striped table-hover table-sm' border='1' width='100%' cellspacing='0'>";
    echo "<h1> Book Information</h1>";

    echo"<br>
    <br>";      
    echo "<tr><td>ID</td><td>$ID</td></tr>";
    echo "<tr><td>Name</td><td>$Name</td></tr>";
    echo "<tr><td>Author</td><td>$Author</td></tr>";
    echo "<tr><td>Title</td><td>$Title</td></tr>";
    echo "<tr><td>BookCode</td><td>$BookCode</td></tr>";
    echo "<tr><td>IssuedDate</td><td>$IssuedDate</td></tr>";
    echo "<tr><td>ReturnDate</td><td>$ReturnDate</td></tr>";
    echo"</table>";
    echo "</div>";

  }	
}
?>
