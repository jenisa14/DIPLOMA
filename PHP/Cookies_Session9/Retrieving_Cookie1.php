<html>
	<head>
		<title>Accessing Cookies with PHP</title>
	</head>
	<body>
<?php

if(isset($_COOKIE["name"]))
{
    echo "$_COOKIE["name"].<br>";

}
if(isset($_COOKIE["age"]))
{
   echo "$_COOKIE["age"].<br>";

}

echo "retrieving cookies...";
?>
</body>
</html>