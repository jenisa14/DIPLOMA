<html>
<head><title>GOTO_FW</title></head>
<body>

<?php

	$n=10;

	//$n=(int)readline("enter a number");

		for($i=1;$i<=$n;$i++)
		{
			if($i%2==0)

			   goto label;

		    print "odd:".$i;
		    echo "<br/>";
				
			
			label:
			
			print "even:".$i;
			echo "<br/>";	
	   }
?>

</body>
</html>
