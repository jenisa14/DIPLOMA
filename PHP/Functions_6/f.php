<?php

function test()
{
  $args=func_get_args();
 foreach($args as $arg)
{
  echo $arg."";

}

}
test("hello","world");

?>