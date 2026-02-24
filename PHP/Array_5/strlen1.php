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
    $count= 0;$count_w=0;

		if(isset ($_POST['submit']))
    		{

     		$s=$_POST["str"];

			while(isset($s[$count]) && $s[$count])
		 	{
    				$count++;
			}
			echo "length of string is:"."$count<br>";
    }


       for ($i=0;$s[$i]!=NULL;$i++)
    		{
        		if ($s[$i] == ' ' && $s[$i+1]!= ' ')
			{

            		$count_w++;   
			} 
    		}
    		echo "total number of words :".$count_w+1;

?>



</html>  