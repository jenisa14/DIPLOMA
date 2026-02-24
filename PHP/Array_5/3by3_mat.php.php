<?php

$ary=array(array(1,1,1),array(1,1,1),array(1,1,1));

 
 for($i=0;$i< 3;$i++)
 {

  for($j=0;$j< 3;$j++)
  {

    $mul[$i][$j]=0;

   for($k=0;$k< 3;$k++)
   {

    $mul[$i][$j]=$mul[$i][$j]+$ary[$i][$k]*$ary[$k][$j];
   }

  }

 }
echo "multiplied matrix.<br>";

for($i=0;$i<3;$i++)
{
	for($j=0;$j<3;$j++)
	{
       echo $mul[$i][$j]; 
     
	}

echo "<br>";


}
 
 

?>