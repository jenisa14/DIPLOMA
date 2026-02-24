<?php
$arr=array("jay"=>45.66,"Ajay"=>34.66,"Asha"=>88.89);
$js=json_encode($arr);
echo"<h3>Names in JSON:<br>".$js;
echo"<br><br>Names in PHP Array Format:<br/>";
$js_arr=json_decode($js,true);
print_r($js_arr);
?>