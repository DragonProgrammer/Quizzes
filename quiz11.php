<html>
<head>
<title> quiz 11 </title>
<br><br><br>
</head>
<body>
<?php
include "conn.php";
#the include
$sql='select * from passenger';
echo '<form action="quiz11.php" method="post">';  #form creation
	print 'Passengers: ';
echo '<select name="pass" id="pass">'; #dropdown creation
	foreach($conn->query($sql) as $row)  #loop to fill in dropdown
	{
		echo '<option value="';
		echo $row["passnum"];  #submits the code to other query
		echo '">';
		echo $row["fname"]. ' ' .$row["lname"]; #shows publisher
		echo '</option>';
	}
		echo '</select>';# end dropdown
echo '<br><input type="submit" name="submit" value="Show"><br>'; #create buten to show stuff
echo	'</form>';#end form
if ($_SERVER['REQUEST_METHOD']=='POST')# checks for a button press
{
	$code=$_POST['pass'];#sets variable as submited code
	
$sql="Select flightnum from manifest where passnum ='$code'";
#create second statement
echo "<table border=1>"; #create a table
echo "<tr><th> Flights for Passenger </th>";
foreach($conn->query($sql) as $row)#loop throw query output
{
echo "<tr><td>";
echo $row["flightnum"];
echo "</td></tr>";
}
echo "</table>";#end table
}
?>
</body>
<footer>
<p align='center'> Michael Peterson Section 1</p>
<br>
</footer>

</html>
