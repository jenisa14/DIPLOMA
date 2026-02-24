<?php

session_start();

If(isset ($_POST["uname ”]) and isset($_POST["uname"]))

{

	echo “<h1>Welcome “.$_POST["uname"];
}
?>