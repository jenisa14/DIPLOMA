<html>  
<head>   
	<title>  
		car with it's company 
	</title>
</head>

 <style> 

	body { 
			background-color:gray;
	
		}
</style>
<body>

<fieldset>

<form method ="POST"> 
  

           <h4>enter car name:<input type="text" name="cn"></h4>
		 
 			<input type="submit" name="submit">  
</form> 
</fieldset> 
</body> 

<?php
   

	if(isset ($_POST["submit"]))
    {

     $c1=$_POST["cn"];

    switch($c1)
	{
  
   		case $c1=="Safari" or $c1=="Nexon" or $c1=="Tigor" or $c1=="Tiago":
		
      		 echo $c1."-Tata";
               break;

		case $c1=="XUV700" or $c1=="XUV300" or $c1=="Bolero" :
		
      		 echo $c1."-Mahindra";
               break;

		case $c1=="i20" or $c1=="Verna" or $c1=="Venue" or $c1=="Creta":
		
      		 echo $c1."-Hyundai";
               break;
		
		case $c1=="Swift" or $c1=="Alto" or $c1=="Baleno" or $c1=="Brezza":
		
      		 echo $c1."-Suzuki";
              

	}		
	
	}
?>
 
</html>