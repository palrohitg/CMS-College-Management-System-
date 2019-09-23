 <?php
        $link=mysqli_connect("localhost","root","","vikasproject");
        $id=$_GET['ID'];
        $result=mysqli_query($link,"DELETE FROM students Where StudentId='$id'");
?>