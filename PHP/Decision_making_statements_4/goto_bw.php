<html>
<head><title>GOTO_BW</title></head>
<body>

<?php

	$i=1;
	$n=10;

	label:

	echo $i;
	echo "<br/>";
	$i++;	

			if($i<=$n)
			

				goto label;
			return 0;

?>

</body>
</html>
