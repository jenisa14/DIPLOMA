<Html>  
<head>   
	<title>  
		string function 
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
  

           <h4>enter string:<input type="text" name="str"></h4>
		  <input type="submit" name="submit"> 
		 

</form> 
</fieldset> 
</body> 
<?php
    $count=0;$i;

	if(isset ($_POST['submit']))
    	{

     	$s=$_POST["str"];

   
	    for ($i=0;$s[$i]!=NULL;$i++)
    		{
        		if ($s[$i] == ' ' && $s[$i+1]!= ' ')
			{

            		$count++;   
			} 
    		}
    		echo "total number of words :".$count+1;
	}

?>
</html>
