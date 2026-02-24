<?php

 $result=array("drashti"=>array("CN"=>20,"ISE"=>21,"IWD"=>19),"yatri"=>array("CN"=>21,"ISE"=>23,"IWD"=>25),"jenisa"=>array("CN"=>22,"ISE"=>18,"IWD"=>23));


 foreach($result as $s=>$m)
{
 echo "result of ".$s."\n"."is:" ."<br/>";

 foreach($m as $s1=>$m1)
{

 echo "$s1=".$m1."<br/>";


}



}




?>