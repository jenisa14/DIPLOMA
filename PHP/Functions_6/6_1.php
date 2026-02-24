<?php

$s="		hello world		";
$s1="avpti";
$s2="RAJKOT";
 
 echo str_replace("world","php",$s,$i)."<br>";

 echo strrev($s1)."<br>";

 echo trim($s);

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
