<?php


	if(isset ($_POST["submit"]))

{



	   echo "<h1><i>welcome".$_POST["fn"]</h1>";
          echo "<h3>first name:".$_POST["fn"]<br>";
          echo "<h3>middle name:".$_POST["mn"]<br>";
          echo "<h3>last name:".$_POST["ln"]</h3><br>";
          echo "<h3>course :".$_POST["c"]</h3><br>";
          echo "<h3>gender:".$_POST["g"]"</h3><br>";
          echo "<h3>contact no:".$_POST["phone"]</h3><br>";
          echo "<h3>address:".$_POST["a"]"</h3><br>";
          echo "<h3>e-mail:".$_POST["eml"]</h3><br>";
          echo "<h3>roll-no:".$_POST["rno"]</h3><br>";
          echo "<h3>pass-word:".$_POST["pss"]"</h3><br>";
          
	
?>