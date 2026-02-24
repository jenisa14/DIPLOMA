<html>
<body>
<form method="POST">
<h1>Enter student name:
<input type="text" name="nm"/>
<br>
<br>
<input type="submit" name="delete" value="Delete"/>
</form>
</body>
</html>
<?php
$cn=mysqli_connect("localhost","root","") or die('cant connect');
$db=mysqli_select_db($cn,"hostel") or die('cant connect');
if(isset($_POST["delete"]))
{
	$name=$_POST["nm"];
	

	$q=mysqli_query($cn,"delete from student where name='".$name."'");
	if($q)
	{
		echo"<h2>Record Deleted!!";
	}
	else
	{
		echo"<h2>Record not Deleted!!";
	}       
	mysqli_close($cn);
}

?>

