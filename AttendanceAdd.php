	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->

	<html>
	<head>
		<script type="text/javascript" language="javascript">
			function validation()
			{
				var title=document.myform.Name.value;
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
				<div class='card-body'>";
				
				
            echo"<form  class='form-group' action='AttendanceAdd.php' name='myform' method='Post' onSubmit='return validation();'>
			<table>
			<h1>Attendance Add</h1>
			<ul>
			<li><label>StudentId</label></li>
			<input type='text' name='StudentId'><br>
            <li><label>StreamId</label></li>
			<input type='text' name='StreamId'><br>
            <li><label>Dated</label></li>
			<input type='date' name='Dated'><br>
			</ul>
			<input type='submit' name='Submit' Value='Add'>
			</table>
			</form>
			</div>
			</div>
			</div>
			</div>
			</div>
			";

		}
		else
		{
			$link=mysqli_connect("localhost" ,"root" ,"","vikasproject");
			if(!$link)
			{
				echo"database not connected".mysqli_connect_error();
			}

			$StudentId=$_REQUEST['StudentId'];
			$StreamId=$_REQUEST['StreamId'];
			$Dated=$_REQUEST['Dated'];
            $result=mysqli_query($link,"INSERT INTO attendance(StudentId,StreamId,Dated) VALUES ('$StudentId','$StreamId','$Dated')");
			if($result)
			{
				header("location:attendanceShowAll.php");
			}



		}

		?>
	</body>
	</html>