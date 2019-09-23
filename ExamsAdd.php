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
			include'blank.html';
	echo"<div class='container'>
	<div class='card card-register mx-auto mt-5'>
	<div class='card-header'>Register an Account</div>
	<div class='card-body'>
	";
	

	echo"
	<form  action='ExamsAdd.php' name='myform' method='Post' onSubmit='return validation();'>
	<ul>
	<li><label>TITLE</label></li>
	<input type='text' name='title'><br>
	<li><label>DATED</label></li>
	<input type='text' name='dated'><br>

	<li><label>MAXMARKS</label></li>
	<input type='text' name='maxmarks'><br><br>

	<input type='submit' name='Submit' Value='Add'>
    </ul>
    </form>
	</div>
	</div></div></div>
	
	";

}
else
{
	$link=mysqli_connect("localhost" ,"root" ,"","vikasproject");
	$TITLE=$_REQUEST['title'];
	$DATED=$_REQUEST['dated'];
	$MAXMARKS=$_REQUEST['maxmarks'];
	$result=mysqli_query($link,"INSERT INTO exams(Title,Dated,MaxMarks) VALUES ('$TITLE','$DATED','$MAXMARKS')");
	if($result)
	{
		header("location:ExamsShowAll.php");
	}
	
	
	
}

?>
</body>
</html>