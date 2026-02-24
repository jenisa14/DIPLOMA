<html>
<head></head>

<style> 

	body { 
			background-color:gray;
	
		}
</style>
<body>

<legend align="center"><h1>employee information</h1></legend>
<form method="POST">
<fieldset>


	<h3>Enter employee name:</h3><input type="text" name="nm"><br>

	<h3>Enter employee id:</h3><input type="number" name="id"><br>

	<h3>Enter employee contact-no:</h3>
	<h4><input type="text" name="country_code"  value="+91" size="2"/>  
	<input type="number" name="phone" size="10"/></h4>

	<h3>Enter employee e-mail:</h3><input type="E-mail" name="e"><br>

	<h3>Enter gender:</h3>
	
	      <input type="radio" name="g" value="Male"> Male   
		<input type="radio" name="g" value="Female"> Female  
		<input type="radio" name="g" value="Other"> Other <br> <br>
	


	 <div>
        <label>Department:</label>
        <select name="d" value="d">
            
            <option value="CE">CE</option>
            <option value="IC">IC</option>
		<option value="EC">EC</option>
            <option value="CACDDM">CADDM</option>
        </select>
    </div>

	<h3>Enter employee address:</h3><input type="Textarea" name="ad"><br><br>
	<input type="submit" value="submit" name="submit">

</legend>
<fieldset>
</form>
</body>
</html>

<?php

 if(isset($_POST["submit"]))
 {
   echo "employee's details:-";
		echo "<br>";
   echo "name:".$_POST["nm"];
		echo "<br>";
   echo "id:".$_POST["id"];
		echo "<br>";
   echo "contact_no:".$_POST["cn"];
		echo "<br>";
   echo "e-mail:".$_POST["e"];
		echo "<br>";
   echo "gender:".$_POST["g"];
		echo "<br>";
   echo "department:".$_POST["d"];
		echo "<br>";
   echo "address:".$_POST["ad"];


 }

?>