<html>  
<head>   
	<title>  
		Login form 
	</title>
</head>

 <style> 

	body { 
			background-color:gray;
	
		}
</style>
<body>

<fieldset>
 <legend align="center"><h1>LOGIN FORM</h1></legend>

<form method ="POST" action ="wel.php"> 
  

          <h4>enter username:<input type="text" name="un"></h4>
		  <h4>enter password:<input type="password" name="ps"></h4>
		 

<input type="submit" name="login" value="login"><br>
</form>
</fieldset>
</body>

<?php 
if(isset($_POST["login"]))
{
	$u=$_POST["un"];
	$p=$_POST["ps"];

$cn= mysqli_connect("localhost","root","");
$db= mysqli_select_db($cn,"employee");
$q= mysqli_query($cn,"select * from logintable");

if($q)
{
	$n=mysqli_num_rows($q);
	if($n>0)
	{
		echo "<script> alert('login successfully!') </script>";
		header("location:welcome.php?un=$u");
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