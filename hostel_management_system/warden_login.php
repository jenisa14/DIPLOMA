<?php

session_start();
?>

<html>  
<head>

</head>
 <style> 

	body { 
			background-color:#B0C4DE;
	
		}
	
</style>
<body>

<fieldset>
 <legend align="center"><h1>WARDEN LOGIN FORM</h1></legend>

<form method ="POST" align = "center" style="background-color:#F5FFFA;"> 
  

          <h3 style="font-size:20px;">Enter Username:<input type="text" name="wn"></h4>
		  <h3 style="font-size:20px;">Enter Password:<input type="password" name="pass"></h4>
		 

<input type="submit" name="login" value="login"  style="font-size:20px; height:50px; width:100px" ><br>

    </form>
</fieldset>
</body>
</html>
<?php


	if(isset ($_POST['login']))
    {
     	$_SESSION['wname']=$_POST["wn"];
     	$_SESSION['pas']=$_POST["pass"];
	
		$cn=mysqli_connect("localhost","root","") or die("you could not connect with server!!");

    	$db=mysqli_select_db($cn,"hostel") or die("you could not connect with database!!");

		$q=mysqli_query($cn,"select * from warden where name='".$_SESSION['wname']."' and password ='".$_SESSION['pas']."' ");

		if($q)
		{
			$nr = mysqli_num_rows($q);
			if($nr==1)
			{
				header("Location: home-page.php");
				exit;
			}

            else
		{
            echo "<script> alert('not able to login!!') </script>";
		}
			}
		

		}
		
	
	
	?>
