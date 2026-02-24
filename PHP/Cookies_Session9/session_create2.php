
<?php

session_start();

?>

<html>
<body>
	<h1> Login Form</h1>
	
	<form method=“POST”>

	<h2> Enter User Name:
	<input type=“text” name=“unm"> <br>

	<h2> Enter password:
	<input type=“password” name=“ps"><br>

	<input type=“submit” name=“login” value=“Login”>
</form>


<?php

	If(isset ($_POST[“submit"]))
	{

       $_SESSION[“unm”] = $_ POST["unm"];
	  $_SESSION[“pass"] = $_POST[“pass”];

	  echo "Session variables are set.";
?>
</body>
</html>
	