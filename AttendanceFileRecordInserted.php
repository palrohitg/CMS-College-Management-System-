<?php 
  session_start();
    
    if(!empty($_FILES['uploadfilename']['name'])){
    	$filename=$_FILES['uploadfilename']['name'];
    	$filetmpname=$_FILES['uploadfilename']['tmp_name'];
    	$conn=mysqli_connect("localhost","root","","vikasproject");
       	$allowedExtension=array("csv");
    	$extensions=explode(".",$filename);
    	$extension=end($extensions);
    	    if(in_array($extension,$allowedExtension)){
    		$handle=fopen($filetmpname, "r");
    		if($handle){
              move_uploaded_file($filetmpname,"Record/".$filename);
              while($row=fgetcsv($handle)){
    			$srno=$row[0];
    			$name=$row[1];
    			$one=$row[2];
    			$two=$row[3];
    			$three=$row[4];
    			$four=$row[5];
    			$five=$row[6];
    			$six=$row[7];
    			$seven=$row[8];
    			$eight=$row[9];
    			$nine=$row[10];
    	        $Batch=$_SESSION["Batch"];
                $Semester=$_SESSION["Semester"];
                $Branch=$_SESSION["Branch"];
                $Subject=$_SESSION["Subject"];
                $filenameinserted=$filename;
    		  $query=mysqli_query($conn,"insert into attendances(SrNo,Name,`1`,`2`,`3`,`4`,`5`,`6`,`7`,`8`,`9`,Branch,Batch,Subject,Semester,FileName) values(\"$srno\",\"$name\",\"$one\",\"$two\",\"$three\",\"$four\",\"$five\",\"$six\",\"$seven\",\"$eight\",\"$nine\",\"$Branch\",\"$Batch\",\"$Subject\",\"$Semester\",\"$filename\")");
    			if($query){
    				echo "query executed";

    			}
    			// session_unset($_SESSION["Batch"],$_SESSION["Semester"],$_SESSION["Branch"],$_SESSION["Subject"]);

    		}
    		}
    		else{
    			die("unable to open file");
    		}

    	}
    }

 ?>