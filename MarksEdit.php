<html>
<head>
  <script type="text/javascript" language="javascript">
    function validation()
    {
     var title=document.myform.title.value;
     if(title=="")
     {
      alert("Title should not be empty");
      return false;
    }
    len=title.length;
    for(i=0;i<len;i++)
    {
      x=title.charAt(i);
      if(!((x>='A'&& x<='Z')||(x>='a'&& x<='z')))
      {
       alert("TITLE must be contain character only!");
       return false;
     }
   }
   
   return true;
 }

</script> 
</head>
<body>
  <?php
  if(!isset($_REQUEST['Submit']))
  {
   include 'blank.html';
   $link=mysqli_connect("localhost","root","","vikasproject");
   $ID=$_REQUEST['Marks'];
   $result=mysqli_query($link,"SELECT *FROM marks WHERE MarksId='$ID'");
   if($result)
   {
   	while($row=mysqli_fetch_assoc($result))
   	{
      $MARKSOBTAIN=$row['MarksObtain'];
      $STUDENTID=$row['StudentId'];
      $STREAMID=$row['StreamId'];
      $EXAMID=$row['ExamId'];
      $ID=$row['MarksId'];

      echo "<div class='content-wrapper'>";
      echo "<div class='container-fluid'>";
      echo "<div class='row'>";
        //echo"<div class='col sm-2' background-color:'white'>";
        //echo "</div>";
      echo"<div class='card-body'>";
      
      
      echo"
      <form class='form-contro;' name='myform' 'action='MarksEdit.php' method='Post' onSubmit='return validation();'>
      <table>
      <ul> 
      <h1>Edit Marks Details</h1><br>
      <li><LABEL>EXAMID</LABEL></li>
      <input type='text' name='examid' value='$EXAMID'><br>
      <li><LABEL>STUDENTID</LABEL></li>
      <input type='text' name='studentid' value='$STUDENTID'><br>
      <li><LABEL>STREAMID</LABEL></li>
      <input type='text' name='streamid' value='$STREAMID'><br>
      <li><LABEL>MARKSOBTAIN</LABEL></li>
      <input type='text' name='maxobtain' value='$MARKSOBTAIN'><br>
      <input type='hidden' name='id' value='$ID'>
      <input type='Submit' name='Submit' value='Update'/>
      <ul>
      <table>
      </form>";
      echo "</div>";
      echo "</div>";
      echo "</div>";
      echo "</div>";
      
      
      

      
    }
    
  }
  
}
else
{
  $link=mysqli_connect("localhost","root","","vikasproject");
  $EXAMID=$_REQUEST['examid'];
  $STUDENTID=$_REQUEST['studentid'];
  $STREAMID=$_REQUEST['streamid'];
  $MARKSOBTAIN=$_REQUEST['marksobtain'];
  $ID=$_REQUEST['id'];
  $result=mysqli_query($link,"UPDATE  marks SET ExamID='$EXAMID', StudentId='$STUDENTID',StreamId='$STREAMID',MarksObtain='$MARKSOBTAIN'  WHERE MarksId='$ID'");
  if($result)
  {
    header("location:MarksShowAll.php");
  }
}

?>
</body>
</html>