<html>
<head><title>reference_variable</title></head>
<body>
<?php

 $ary=array(1,2,3,4,5,6,7,8,9);
 
 foreach($ary as $val)
	{

		$val=$val*2;

	}

   unset($val);

?>
</body>
</html>