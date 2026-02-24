<?php


$s1="	computer department	";
$s2="RAJKOT";
 
 echo str_replace("computer","ic",$s1,$i)."<br>";

 echo strrev($s1)."<br>";

 echo trim($s1)."<br>";

 if (ctype_lower($s2))
   {
        echo "Yes";
    }
 else
  {
        echo "No"."<br>";
    }

echo "string after convertion:";

echo strtolower($s2);

?>
