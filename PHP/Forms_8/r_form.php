<h2
tml>  
<head>   
	<title>  
		Registration form 
	</title>
</head>

 <style> 

	body { 
			background-color:gray;
	
		}
</style>
<body>

<fieldset>
 <legend align="center"><h1>REGISTRATION FORM</h1></legend>

<form method ="POST" action ="welcome.php"> 
  

           <h4>enter your first name:<input type="text" name="fn"></h4>
		 <h4>enter your middle name:<input type="text" name="mn"></h4>
		 <h4>enter your last name:<input type="text" name="ln"></h4>


<h4>Course :  </h4>

		<h4><input type="radio" name="c" value="ce"> CE</h4> 
		<h4><input type="radio" name="c" value="ic"> IC </h4> 
		<h4><input type="radio" name="c" value="ec"> EC</h4> 
		<h4><input type="radio" name="c" value="cacddm"> CACDDM</h4> 
<br>
 
<h4>Gender : </h4>
 
		<input type="radio" name="g" value="m"> Male   
		<input type="radio" name="g" value="f"> Female  
		<input type="radio" name="g" value="o"> Other <br> 
	


<h4>Phone :  </h4>

		<h4><input type="text" name="country_code"  value="+91" size="2"/>  
		<input type="text" name="phone" size="10"/></h4>
	

<h4>Address : </h4>
      	<h4><input type="text" name="a" ></h4> 
  
<h4>E-mail: </h4>

		 <h4><input type="E-mail"  name="eml"></h4>
	

 
<h4>Enrollment-No: </h4>


		<h4><input type="Roll-No" id="roll-no" name="rno"> </h4>

<h4>Password:</h4>

	
		<h4><input type="Password" id="pass" name="pss"> </h4>


 <h2><input type="submit" name="submit"></h2>  

</form> 
</fieldset> 
</body> 

<?php


	if(isset ($_POST['submit']))
    {

     $f=$_POST["fn"];
	
	echo "<h1><i>welcome ".$f."</i></h1>"; 
    }
?>

</html>  