<html>
<body>
<form method="POST">
<h1>Enter Name:
<input type="text" name="nm"/>

<h1>Enter Room-no:
<input type="number" name="rn"/>

<h1>Enter DOB:
<input type="text" name="dob"/>

<h1>Enter Department:
<input type="text" name="dep"/>

<h1>Enter Phone-no:
<input type="number" name="pn"/>
<br>
<h1>Enter Password:
<input type="password" name="pass"/>

<br><br>
<input type="submit" name="update" value="Update"/>
</form>
</body>
</html>
<?php
$cn=mysqli_connect("localhost","root","") or die('cant connect');
$db=mysqli_select_db($cn,"hostel") or die('cant connect');
if(isset($_POST["update"]))
{
	$name=$_POST["nm"];
	$rn=$_POST["rn"];
	$dob=$_POST["dob"];
    $dep = $_POST["dep"];
    $pn = $_POST["pn"];
	$pass=$_POST["pass"];

	$q=mysqli_query($cn,"update student set room_no='".$rn."', `dob`='".$dob."',`department`='".$dep."',`phone_no`=".$pn.",`password`='".$pass."' where name='".$name."'");
	if($q)
	{
		echo"<h2>Record Updated!!";
	}
	else
	{
		echo"<h2>Record not Updated!";
	}       
	mysqli_close($cn);
}

?>

