<html>
<head>
<title> Quiz 10 </title>
</head>
<body>
<?php
include "conn.php";
#require ('conn.php');
$sql='SELECT * FROM flight';
$q = $conn->query($sql) or die("ERROR: " . implode(",", $conn->errorInfo()));
echo "<table border=1>";
echo "<tr><td> Flight #    </td><td> Origination </td><td> Destination </td><td> Miles </td><td> Max Cost </td><td> Min Cost</td></tr>";
while($row=$q->fetch(PDO::FETCH_ASSOC))
{
echo "<tr><td>";
echo $row["flightnum"].' </td><td> '.$row["origination"].' </td><td> '. $row["destination"].' </td><td> '.$row["miles"].' </td><td> '.$row["maxcost"].' </td><td> '.$row["mincost"]. "</td></tr>";
}
?>
</table>
</body>
</html>
