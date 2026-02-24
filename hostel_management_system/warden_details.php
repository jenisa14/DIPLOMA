<?php
session_start();
?>


<html>
	<style>
		th {
font-size:20px;
  background-color: #B0C4DE;
  color: black;
}
td {
  background-color: #B0C4DE;
  color: white;
  
}
		</style>
<body style = "background-color: black;">
</br>
</br>

<table style="width:60%; height:80%;" cellspacing="2" cellpadding="5" border="2" align="center">
<tr>

	<th>Name</th>
	<th>Birth-date</th>
    <th>Phone-no</th>
    <th>img</th>
</tr>
<?php

    if(isset($_SESSION["uname"]) or isset($_SESSION["wname"]) )
    {
	$cn=mysqli_connect("localhost","root","") or die('couldnt connect');
	$db=mysqli_select_db($cn,"hostel") or die('DB not found!');
	$q=mysqli_query($cn,"select * from warden");
	if($q)
	{
		while($row=mysqli_fetch_array($q))
		{
			echo"<tr>";
			echo"<td style = 'color:black; font-size:18px' >".$row[0]."</td>";
			echo"<td style = 'color:black; font-size:18px'>".$row[1]."</td>";
			echo"<td style = 'color:black; font-size:18px'>".$row[2]."</td>";
		    echo '<td><img src="data:image;base64,'.base64_encode($row['img']).'"style="width:300px; height:300px;">'; 
			echo"</tr>";
		}		
	}
    }
    ?>
</table>
</body>
</html>