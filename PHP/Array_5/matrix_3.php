<?php

	$myary= array(array(1, 0, 1),array(4, 5, 6),array(1, 2, 3));


	$row = count($myary);
   $col = count($myary[0]);

   echo ("The 3*3 Matrix is: <br>");

	for($i = 0; $i < $row; $i++)
	{
		for($j = 0; $j < $col; $j++)
		{
			echo ($myary[$i][$j]."");
		}
		echo ("\t");
      
	}
?>