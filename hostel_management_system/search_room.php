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
  

          <h3>Enter Room No :- <input type="text" name="rn"></h3>

<input type="submit" name="search" value="search" style="font-size:20px; height:40px; width:80px"><br>
</form>
</fieldset>
</body>
<?php

        if(isset($_POST["search"]))
        {
            $rn= $_POST["rn"];

            $cn=mysqli_connect("localhost","root","") or die("you could not connect with server!!");

    	    $db=mysqli_select_db($cn,"hostel") or die("you could not connect with database!!");

		    $q=mysqli_query($cn,"select * from room where room_no='".$rn."'");

            if($q)
	{
		while($row=mysqli_fetch_array($q))
		{
			echo"Details of room no ".$rn."</br>";
			echo"student 1 :- ".$row[1]."</br>";
			echo"student 2 :- ".$row[2]."</br>";
			echo"student 3 :- ".$row[3]."</br>";
			echo"</br>";
		}		
	}
        }