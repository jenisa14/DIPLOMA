<html>
<body>
<form method="POST">
<h2>username:</h2>
<input type="text" name="un"><br>
<h2>password:</h2>
<input type="text" name="ps"><br>

<input type="submit" name="login" value="login"><br>
</form>
</body>

<?php 
if(isset($_POST["login"]))
{
	$u=$_POST["un"];
	$p=$_POST["ps"];

$cn= mysqli_connect("localhost","root","");
$db= mysqli_select_db($cn,"employee");
$q= mysqli_query($cn,"select * from info");

if($q)
{
	$n=mysqli_num_rows($q);
	if($n>0)
	{
		echo "<script> alert('login successfully!') </script>";
		header("location:wel.php?username=$u");
	}
	else
	{
		echo "<script> alert('login not successfull!!') </script>";
	}
}
else
{
	echo "record not found!!";
}
}
?>