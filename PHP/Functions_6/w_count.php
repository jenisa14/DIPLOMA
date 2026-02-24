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
    $w_count= 0;

	if(isset ($_POST['submit']))
    	{

     	$s=$_POST["str"];


function word_count($s)
 {

 
   for($i=0;$i<strlen($s);$i++)
  {
 
      if($s[$i]!=' ')
	 {
          $w_count++;
 
          while($s[$i]!=' ')
 		 {
              $i++;
          }
  	}
 
  }
 word_count($s);
 
  echo "total number of words is:".$w_count;
}

