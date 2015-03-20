<html>
<head>
<title>Buscar</title>
</head>
<body>




<form action="buscar.php" method="POST">

	

<input type="submit" name="mostrar"  value="mostrar">



</form>




</body>

</html>

<?php  
//tomamos los datos del archivo conexion.php  
include("conexion.php");  


$con = @mysql_connect($host,$user,$pw) or die ("Pro_server");

@mysql_select_db($db,$con) or die ("pro_select_db");


if (isset($_REQUEST['mostrar'])) {

$query = @mysql_query("SELECT * FROM Usuarios", $con);  
$resultad= @mysql_fetch_row($query);

while ($dato = @mysql_fetch_array($resultad)){

	echo "<tr>";
	echo "<td>".$dato['Nombres']."</td>";
	echo "<td>".$dato['Apellidos']."</td>";
	echo "<td>".$dato['Fecha']."</td>";
	echo "</tr>";

}
}	

echo "</table>"; 

?>