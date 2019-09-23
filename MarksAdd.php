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
		{  include'blank.html';
	echo"<div class='container'>
	<div class='card card-register mx-auto mt-5'>
	<div class='card-header'>Register an Account</div>
	<div class='card-body'>
	
	
	<form  class='form-group' action='StudentAdd.php' name='myform' method='Post' onSubmit='return validation();'>
	<table>
	<ul>
	<form  action='MarksAdd.php' name='myform' method='Post' onSubmit='return validation();'>
	<li><label>EXAMID</label></li>
	<input type='text' name='examid'><br>
	<li><label>STUDENTID</label></li>
	<input type='text' name='studentid'><br>
	<li><label>STREAMID</label></li>
	<input type='text' name='streamid'><br>
	<li><label>MARKSOBTAIN</label></li>
	<input type='text' name='marksobtain'><br>
	<button class='btn btn-primary'> <input type='submit' name='Submit' Value='Add'></button>
	
	
	
	<ul>
	<table>
	</form>
	</div>
	</div></div></div>
	
	";
}
else
{
	$link=mysqli_connect("localhost" ,"root" ,"","vikasproject");
	$EXAMID=$_REQUEST['examid'];
	$STUDENTID=$_REQUEST['studentid'];
	$STREAMID=$_REQUEST['streamid'];
	$MARKSOBTAIN=$_REQUEST['marksobtain'];
	$result=mysqli_query($link,"INSERT INTO marks(ExamId,StudentId,StreamId,MarksObtain) VALUES ('$EXAMID','$STUDENTID','$STREAMID','$MARKSOBTAIN')");
	if($result)
	{
		header("location:MarksShowAll.php");
	}
	
	
	
}

?>
</body>
</html>