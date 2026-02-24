
<html>
<head><title>TABLE</title></head>
<body>
<form method ="POST" > 
   
 <h4>enter no:<input type="number" name="no"></h4>

 <input type="submit" name="submit">  
	

</form> 

</body>
  
<?php  
$i = 0;  
$n1 = 0;  
$n2 = 1;  
if(isset($_POST["submit"]))

 {

   $n=$_POST["no"];

  echo "<h3>Fibonacci series of first $n numbers: </h3>";  
  echo $n1.' '.$n2.' '; 
  
 while ($i <= $n)  
 {  
     $n3 = $n2 + $n1;  
     echo $n3.' ';  
     $n1 = $n2;  
     $n2 = $n3;  
     $i = $i + 1;  
 }
}
?>

</html>  