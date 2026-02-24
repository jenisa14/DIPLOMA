<html> 

 <style> 

	body { 
		background-color:#B0C4DE;
	
		}
</style>
<body>

<fieldset>
 <legend align="center"><h1>SEARCH STUDENT</h1></legend>

<form method ="POST" align = "center" style="background-color:#F5FFFA;"> 
  

          <h3>Enter Student Name:<input type="text" name="name"></h4>

<input type="submit" name="search" value="search" style="font-size:20px; height:40px; width:80px"><br>
</form>
</fieldset>
</body>
<?php

        if(isset($_POST["search"]))
        {
            $name= $_POST["name"];

            $cn=mysqli_connect("localhost","root","") or die("you could not connect with server!!");

    	    $db=mysqli_select_db($cn,"hostel") or die("you could not connect with database!!");

		    $q=mysqli_query($cn,"select * from student where name='".$name."'");

            if($q)
	{
		while($row=mysqli_fetch_array($q))
		{
			echo"Details of ".$name."</br>";
			echo"room no :- ".$row[0]."</br>";
			echo"name :- ".$row[1]."</br>";
			echo"birth-date :- ".$row[2]."</br>";
			echo"department :- ".$row[3]."</br>";
            echo"phone-no :- ".$row[4]."</br>";
			echo"</br>";
		}		
	}
        }
		?>