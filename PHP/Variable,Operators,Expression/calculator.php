<Html>  
<head>   
	<title>  
		 calculator 
	</title>
</head>

 
<body>
  


<form action="welcome.php"  method ="POST"> 
   
 <h4>enter no1:<input type="number" name="no1"></h4>
 <h4>enter no2:<input type="number" name="no2"></h4>

<h3><input type="radio" name="racal" value ="add">add
<input type="radio" name="racal" value ="sub">sub
<input type="radio" name="racal" value ="mul">mul
<input type="radio" name="racal" value ="div">div</h3>



 <input type="submit" name="submit">  
	

</form> 

</body>  
 

<?php


 if(isset($_POST["submit"]))

 {

   $n1=$_POST["no1"];
   $n2=$_POST["no2"];

   $operator=$_POST["racal"];

	if($operator=="add")
		$ans=$n1+$n2;

	else if($operator=="sub")
		$ans=$n1-$n2;

	else if($operator=="mul")
		$ans=$n1*$n2;

	else if($operator=="div")
		$ans=$n1/$n2;

 }
echo "ans: ".$ans;



?>
</html>