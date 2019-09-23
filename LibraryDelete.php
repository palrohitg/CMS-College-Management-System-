 <script>
  function myfunctionDelete(RollNo,Code){
    var Search=RollNo;
    var BookCode=Code;
    $.ajax({
      url:"LibraryDeleted.php",
      type:"GET",
      data:{Search:Search,BookCode:BookCode},
      success:function(){
        alert("Record Deleted successfully");
        $("#DeleteModal").modal("hide");
      }
    })
  } 
 </script>
  
<?php   
$link=mysqli_connect("localhost","root","","vikasproject");
$ID=$_GET['Search'];
$BookCode=$_GET['BookCode'];
$result=mysqli_query($link,"SELECT *FROM Library WHERE RollNO='$ID'AND Code='$BookCode'");
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
   echo"<h1>Student Book Delete</h1>";
   echo "<br>";
    echo "<tr><td>RollNo</td><td>$RollNo</td></tr>";
    echo "<tr><td>Name</td><td>$Name</td></tr>";
    echo "<tr><td>Author</td><td>$Author</td></tr>";
    echo "<tr><td>BookCode</td><td>$Code</td></tr>";

    echo "<tr><td>IssuedDate</td><td>$IssuedDate</td></tr>";
    echo "<tr><td>ReturnDate</td><td>$ReturnDate</td></tr>";

   
   echo "</table>";
   echo "<form action ='libraryDelete.php' method='Post'>";
   echo"<input type='hidden' name='id' value='$RollNo'>";
   echo"<input type='button'onclick='myfunctionDelete($RollNo,$Code);' name='Submit' class='btn btn-success btn-lg' value='Delete'/>";
   echo"</form>";
   echo "</div>";
   
 }
}
?>

