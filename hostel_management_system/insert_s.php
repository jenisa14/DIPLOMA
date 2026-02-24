<html>
<body>
<form method="POST">
<h1>Enter room-no:
<input type="text" name="rn"/>
<br>
<h1>Enter Name:
<input type="text" name="nm"/>
<br>
<h1>Enter DOB:
<input type="text" name="dob"/>
<br>
<h1>Enter Department:
<input type="text" name="dep"/>
<h1>Enter Phone-no:
<input type="text" name="pn"/>
<h1>Enter Password:
<input type="password" name="pass"/>

<br><br>
<input type="submit" name="insert" value="INSERT"/>
</form>
</body>
</html>
<?php
$cn=mysqli_connect("localhost","root","") or die('cant connect');
$db=mysqli_select_db($cn,"hostel") or die('cant connect');
if(isset($_POST["insert"]))
{
	$no=$_POST["rn"];
	$n=$_POST["nm"];
	$dob=$_POST["dob"];
    $dep = $_POST["dep"];
	$pn = $_POST["pn"];
	$pass=$_POST["pass"];

	$q=mysqli_query($cn,"insert into student values('".$no."','".$n."','".$dob."','".$dep."','".$pn."','".$pass."')");
	if($q)
	{
		echo"<h2>Record Inserted!!";
	}
	else
	{
		echo"<h2>Record not inserted!";
	}       
	mysqli_close($cn);
}

?>

