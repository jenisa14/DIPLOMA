

<html>
<head><title>PAYMENT SCHEMA.</title></head>
<body>
<form method ="POST" action=""> 

<h2>INCOME:</h1>
   
 <h4>enter BASIC PAY:<input type="number" name="bp"></h4>
   
 <input type="submit" value="calculate" name="calculate">  
	

</form> 

</body>  
 


</html>
<?php
 
 if(isset($_POST["calculate"]))

 {
	$da=0;$hra=0;$medical=0;$gross=0;$ins=0;$pf=0;$de=0;$ns=0;
   	$b=$_POST["bp"];
   

  $da = $b * (50 /100);
  echo " dearness allowance=$da"."<br>";
  
  $hra= $b * (10/100);
  echo "house rent allowance=$hra"."<br>";

  $medical= $b * (4/100);
  echo "madical=$medical"."<br>";

  $gross = $b + $da + $hra + $medical;
  echo "gross salary=$gross"."<br>"; 

  $ins = $b * (7/100);
  echo "insurance=$ins"."<br>";

 $pf = $b *(5/100);
 echo "provident fund=$pf"."<br>";

 $de=$ins + $pf;
 echo "deduction=$de"."<br>";

 $ns=$gross - $de;
 echo "net salary=$ns";
   
 

 }


?>

