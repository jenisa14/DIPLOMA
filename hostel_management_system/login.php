<?php

session_start();
?>

<html>  
<head>

</head>
 <style> 

	body { 
			background-color:gray;
	
		}
</style>
<body>

<fieldset>
 <legend align="center"><h1>LOGIN FORM</h1></legend>

<form method ="POST"> 
  

          <h4>enter username:<input type="text" name="un"></h4>
		  <h4>enter password:<input type="password" name="ps"></h4>
		 

<input type="submit" name="login" value="login"><br>


<?php


	if(isset ($_POST['login']))
    {
     	$_SESSION['uname']=$_POST["un"];
     	$_SESSION['pass']=$_POST["ps"];
	
		$cn=mysqli_connect("localhost","root","") or die("you could not connect with server!!");

    	$db=mysqli_select_db($cn,"hostel") or die("you could not connect with database!!");

		$q=mysqli_query($cn,"select * from student where name='".$_SESSION['uname']."' and password ='".$_SESSION['pass']."' ");

		if($q)
		{
			$nr = mysqli_num_rows($q);
			if($nr==1)
			{

				echo "<script> alert('login successfully..')</script>";
				header('Location: home-page.php');
				exit();

			}
			else
		{
			echo "<script> alert('not able to login!!') </script>";
		}
		}
		
		
	}
	?>
</form>
</fieldset>
</body>
</html>