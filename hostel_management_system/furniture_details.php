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
<body  style = "background-color: black;">
<br/>
</br>

<table style="width:60%; height:80%;" cellspacing="2" cellpadding="5" border="2" align="center">
<tr>
	<th>Room No</th>
	<th>Total Bed</th>
	<th>Total Desk</th>
	<th>Total Chair</th>
    <th>Total Light</th>
    <th>Total Fan</th>
</tr>
<?php
	$cn=mysqli_connect("localhost","root","") or die('couldnt connect');
	$db=mysqli_select_db($cn,"hostel") or die('DB not found!');
	$q=mysqli_query($cn,"select * from furniture");
	if($q)
	{
		while($row=mysqli_fetch_array($q))
		{
			echo"<tr>";
			echo"<td style = 'color:black; font-size:18px' >".$row[0]."</td>";
			echo"<td style = 'color:black; font-size:18px' >".$row[1]."</td>";
			echo"<td style = 'color:black; font-size:18px' >".$row[2]."</td>";
			echo"<td style = 'color:black; font-size:18px' >".$row[3]."</td>";
            echo"<td style = 'color:black; font-size:18px' >".$row[4]."</td>";
            echo"<td style = 'color:black; font-size:18px' >".$row[5]."</td>";
			echo"</tr>";
		}		
	}

?>
</table>
</body>
</html>