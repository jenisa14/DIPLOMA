<html>

<head>
	<title>globle variable</title>
</head>
	<body>
	<?php
		$y=10;
		function incr()
		{
			global $y;
			$x=1;
			$x++;
			echo $x;
			echo $y;
			
		}


		incr();
		incr();
		incr();
	?>
	</body>
</html>