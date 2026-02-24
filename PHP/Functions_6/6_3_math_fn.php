 <html>
<head>
	<title>math function</title>

</head>
 <style> 

	body { 
			background-color:gray;
         
		 }
</style>

<body>

<fieldset>
 
<form method ="POST"  > 
   
 <h4>enter 1st number:<input type="number" name="n1"></h4>
 <h4>enter 2nd number:<input type="number" name="n2"></h4>
<h4>enter angle:<input type="number" name="n3"></h4>
<input type="submit" name="submit">  

</form>
</fieldset> 
</body>
<?php
	
if(isset($_POST["submit"]))

 {

   $m1=$_POST["n1"];
   $m2=$_POST["n2"];
	$m3=$_POST["n3"];

  echo "<h4>range between given number :</h4>";
  echo rand(10,$m1)."<br>";

  echo "<h4>decimal to binary:</h4>";
  echo decbin($m2);

  echo "<h4>decimal to octal:</h4>";
  echo decoct($m2);

  echo "<h4>decimal to hexadecimal:</h4>";
  echo dechex("30");

  echo "<h4>sin,cos and tan value of angle:</h4>";
  
  echo sin($m3)."<br>";
  echo cos($m3)."<br>";
  echo tan($m3);

}


?>
</html>