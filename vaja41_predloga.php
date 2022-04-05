<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<style>
table, th, td{
	border-collapse: collapse;
	border: 1px solid black;
	width: 40%;
	text-align: right;
}

th{
	height: 40px;
	background-color: blue;
	color: white;
	text-align: center;
}
tr:nth-child(even){
	background-color: lightgray;
}
</style>
</head>

<body>
<h2>Vaja 4.1</h2>
<?php 
$cena = 5; 
echo "<table>"; 
echo "<tr><th>Količina</th>"; 
echo "<th>Vrednost</th></tr>"; 
for ( $stevec = 10; $stevec <= 100; $stevec += 10) { 
   echo "<tr><td>".$stevec."</td>"; 
   echo "<td>".$cena * $stevec."</td></tr>";
} 
echo "</table>"; 
?>
</body>
</html>