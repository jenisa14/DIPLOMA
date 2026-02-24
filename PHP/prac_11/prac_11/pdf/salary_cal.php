<html>
<body>
<form method="POST">
<h2>Enter EID:
<input type="text" name="eid">
<br>
<h2>Enter Name:
<input type="text" name="nm">
<br>
<h2>Enter Basic Salary:
<input type="text" name="bs">
<br>
<input type="submit" name="submit" value="Calculate Salary">

<br/>
</form>
<br/>

<?php

if(isset($_POST["submit"]))
{
	$id=$_POST["eid"];
	$nm=$_POST["nm"];
	$bs=$_POST["bs"];
	$da=($bs*0.50);
	$hra=($bs*0.10);
	$ma=($bs*0.04);
	$gross=$bs+$da+$hra+$ma;

	$ins=($gross*0.07);
	$pf=($gross*0.05);
	$ded=$ins+$pf;
	
	$net=$gross-$ded;
	
	$cn=mysqli_connect("localhost","root","","employee");
	$q=mysqli_query($cn,"insert into salary values('".$id."',
	'".$nm."',".$bs.",".$da.",".$hra.",".$ma.",".$gross.",".$ins.",".$pf.",".$ded.",".$net.")");
	if($q)
	{
		echo"<script>alert('Inserted!')</script>";
	}
}


?>
