<?php

echo "today's date in various formats:"."<br>";

echo date("D/M/Y")."<br>";
echo date("D-M-Y")."<br>";
echo date("D.M.Y")."<br>";
echo date("D.M.Y/D");

$timestamp=time();
echo ($timestamp)."<br>";

echo (date("F d,Y h:i:s A",$timestamp));

?>