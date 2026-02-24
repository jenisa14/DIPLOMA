<html>
<head><title>GOTO_FW</title></head>
<body>

<?php

	$i;
	$n=10;

	for($i=1;$i<=$n;$i++)
	{

		if ($i%2==0)

   	    	    goto label;

           echo  "$i is an odd number<br/>";
   
	   

	   	label:
	 	echo  "$i is an even number<br/>";
	 
		
	}
?>
</body>
</html>