<?php




$cn= mysqli_connect("localhost","root","");

if($cn)
{
	echo "you are connected with database...";
}
else
{


	echo "database not found!!";
}

?>