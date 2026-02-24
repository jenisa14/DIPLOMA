<?php
require_once 'dompdf/autoload.inc.php';
use Dompdf\Dompdf;
?>
<html>
<body>
<form method="POST">
<h2>Select Eid:
<select name="eid">
<?php
	$cn=mysqli_connect("localhost","root","","employee");
	$q=mysqli_query($cn,"select * from salary");
	if($q)
	{
		while($row=mysqli_fetch_array($q))
		{	
			echo"<option>".$row[0]."</option>";
		}	
	}

?>
</select>
<input type="submit" name="submit" value="Generate Salary Slip">
<input type="submit" name="pdf" value="Generate PDF">

<br/>
</form>
<br/>

<?php

if(isset($_POST["submit"]))
{
	$id=$_POST["eid"];
	$q=mysqli_query($cn,"select * from salary where eid='".$id."'");
	if($q)
	{
	$row=mysqli_fetch_array($q);
	$nm=$row[1];
	$bs=$row[2];
	$da=$row[3];
	$hra=$row[4];
	$ma=$row[5];
	$gross=$row[6];

	$ins=$row[7];
	$pf=$row[8];
	$ded=$row[9];
	
	$net=$row[10];
	}
	echo"<table border=1 cellpadding=15>";
	echo"<tr>";
	echo"<td colspan=2 align=center>Name::".$nm."</td>";
	echo"</tr>";
	
	echo"<tr>";
	echo"<td><b>Increament</td>";
	echo"<td><b>Deduction</b></td>";
	echo"</tr>";


	echo"<tr>";
	echo"<td>Basic Salary::".$bs."</td>";
	echo"<td>Insurance::".$ins."</td>";
	echo"</tr>";


	echo"<tr>";
	echo"<td>DA::".$da."</td>";
	echo"<td>PF::".$pf."</td>";
	echo"</tr>";


	echo"<tr>";
	echo"<td>HRA::".$hra."</td>";
	echo"<td></td>";
	echo"</tr>";

	echo"<tr>";
	echo"<td>MA::".$ma."</td>";
	echo"<td></td>";
	echo"</tr>";

	echo"<tr>";
	echo"<td>GROSS::".$gross."</td>";
	echo"<td>TOTAL DEDUCTION::".$ded."</td>";
	echo"</tr>";

	echo"<tr>";
	echo"<td colspan=2 align=center>NET SALARY::".$net."</td>";
	echo"</tr>";

	echo "</table> </body> </html>";

	$cn=mysqli_connect("localhost","root","","employee");
	$q=mysqli_query($cn,"insert into salary values('".$nm."',
	".$bs.",".$da.",".$hra.",".$ma.",".$gross.",".$ins.",".$pf.",".$ded.",".$net.")");
	if($q)
	{
		echo"<script>alert('Inserted!')</script>";
	}
}
if(isset($_POST['pdf']))
{
	$id=$_POST["eid"];
	$q=mysqli_query($cn,"select * from salary where eid='".$id."'");
	if($q)
	{
	$row=mysqli_fetch_array($q);
	$nm=$row[1];
	$bs=$row[2];
	$da=$row[3];
	$hra=$row[4];
	$ma=$row[5];
	$gross=$row[6];

	$ins=$row[7];
	$pf=$row[8];
	$ded=$row[9];
	
	$net=$row[10];
	}
$sal =
  '<table border=1 cellspacing=2 cellpadding=15><tr>
   <td colspan=2 align=center>Name::'.$nm.'</td></tr>
   <tr><td><b>Increament</td><td><b>Deduction</b></td></tr>
   <tr><td>Basic Salary::'.$bs.'</td><td>Insurance::'.$ins.'</td></tr>;
   <tr><td>DA::'.$da.'</td><td>PF::'.$pf.'</td></tr>
   <tr><td>HRA::'.$hra.'</td><td></td></tr>
   <tr><td>MA::'.$ma.'</td><td></td></tr>
   <tr><td>GROSS::'.$gross.'</td><td>TOTAL DEDUCTION::'.$ded.'</td></tr>
   <tr><td colspan=2 align=center>NET SALARY::'.$net.'</td></tr>
   </table>';
	
$dompdf = new Dompdf(); 
$dompdf->loadHtml($sal);
$dompdf->setPaper('A4','landscape');
$dompdf->render();
ob_end_clean();
$dompdf->stream("test");

}

?>
