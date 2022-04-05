<html>
<head>
	<meta charset="utf-8" />
	<title>SQL poizvedba</title>
</head>
<body>
<h2>Vnesite SQL poizvedbo nad tabelo test.države:</h2>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
   <textarea cols="80" rows="10" name="poizvedba" wrap=virtual></textarea>
   <input type="submit" name="submit" value="Vnesi SQL"><br>
</form>
<?php
$result=0;
$sql=0;
include 'C:\xampp\htdocs\NIRSA\phpmojadmin.inc.php';
$con=mysqli_connect($db_server, $db_user, $db_pass, $db_pb);  
unset ($db_server,$db_user,$db_pass,$db_pb);
// $con=mysqli_connect("localhost","root","root","test");
// Dodamo podporo za slovenske znake
mysqli_query($con,"SET NAMES UTF8");

// Preverimo, če povezava deluje
if (mysqli_connect_errno())
  {
  echo "Ne moremo se povezati z MySQL: " . mysqli_connect_error();
  }
// Izpišemo podatke tabele države
if(isset($_POST['submit'])) 
	{ 
    $sql = $_POST['poizvedba'];
	}
else
	{
	$sql="SELECT * FROM države";
	}
$result = mysqli_query($con,$sql);

echo "<table border='1'>
<tr>
<th>Številka</th>
<th>Država</th>
<th>Regija</th>
<th>Površina</th>
<th>Prebivalstvo</th>
<th>Bruto družbeni proizvod</th>
</tr>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['št'] . "</td>";
  echo "<td>" . $row['država'] . "</td>";
  echo "<td>" . $row['regija'] . "</td>";
  echo "<td>" . $row['površina'] . "</td>";
  echo "<td>" . $row['prebivalstvo'] . "</td>";
  echo "<td>" . $row['BDP'] . "</td>";
  echo "</tr>";
  }
echo "</table>";
// Zapremo povezavo na MySQL
 mysqli_close($con);
 ?>
 </body>
 </html>
