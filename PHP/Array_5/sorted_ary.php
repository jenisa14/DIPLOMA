<Html>  
<head>   
	<title>  
		sorted array
	</title>
</head>

 <style> 

	body { 
			background-color:gray;
	
		}
</style>
<body>

<fieldset>


<form method ="POST" action =""> 
  

           <h4>enter 1st element:<input type="text" name="e1"></h4>  
		   <h4>enter 2nd element:<input type="text" name="e2"></h4>
		   <h4>enter 3rd element:<input type="text" name="e3"></h4>
		   <h4>enter 4th element:<input type="text" name="e4"></h4>
		   <h4>enter 5th element:<input type="text" name="e5"></h4>
		  <input type="submit" name="submit"> 
		 

</form> 
</fieldset> 
</body> 
<?php
   

	if(isset ($_POST['submit']))
    {

     	$s1=$_POST["e1"];
		$s2=$_POST["e2"];
		$s3=$_POST["e3"];
		$s4=$_POST["e4"];
		$s5=$_POST["e5"];


	$myary=array($s1,$s2,$s3,$s4,$s5);

	echo "array before sorting:";
	print_r($myary);


	for($i = 0; $i < count($myary); $i++ )
 	{
 		for($j = 0; $j < count($myary)-1; $j++)
	 	{
 			if($myary[$j+1] < $myary[$j])
			{
 				$temp = $myary[$j+1];
		   		$myary[$j+1] = $myary[$j];
 				$myary[$j] = $temp;
 			}
 		}
	}
	echo "<br>";
	echo "array after sorting:";

	print_r($myary);
}
?>
</html>
