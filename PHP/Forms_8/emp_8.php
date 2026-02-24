 <html>
<head><title>employee information</title></head>


<style> 

	body { 
			background-color:gray;
	
		}
</style>
<body>

<form method="POST" >
<fieldset>
<legend align="center"><h1>employee information</h1></legend>

	Enter employee name:<input type="text" name="nm"><br>

	Enter employee id:<input type="number" name="id"><br>

	Enetr employee contact-no:<input type="number" name="co"  value="cn"><br><br>  
	

	Enter employee e-mail:<input type="E-mail" name="e"><br>

	Enter gender:
	
	      <input type="radio" name="g" value="male"> Male   
		<input type="radio" name="g" value="female"> Female  
		<input type="radio" name="g" value="other"> Other <br> <br>
	

	
	 <div>
        <label><h2>Department:</h2></label>
        <select name="d" value="d">
            
            <option value="CE">CE</option>
            <option value="IC">IC</option>
			<option value="EC">EC</option>
            <option value="CACDDM">CADDM</option>
        </select>
    </div>

	Enter employee address:<input type="Textarea" name="ad"><br><br>
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
   echo "name:".$_POST["nm"];
   echo "id:".$_POST["id"];
   echo "contact_no:".$_POST["cn"];
   echo "e-mail:".$_POST["e"];
   echo "gender:".$_POST["g"];
   echo "department:".$_POST["d"];
   echo "address:".$_POST["ad"];


 }

?>
