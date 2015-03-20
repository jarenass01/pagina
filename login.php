<?php

include ("conexion.php");

if (isset($_POST["username"]) && !empty($_POST["username"]) && 
	isset($_POST["password"]) && !empty($_POST["password"]))

{

$usuario = $_POST["username"];
$contrasena = $_POST["password"];

$con = @mysql_connect($host,$user,$pw) or die ("Pro_server");

@mysql_select_db($db,$con) or die ("pro_select_db");


$query2 = @mysql_query("SELECT * FROM Usuarios WHERE Usuario= '$usuario' and Pass= '$contrasena'");

if ($existe = @mysql_fetch_object($query2))
{
echo "Bienvenido '.$usuario.'";	
 include ("Inicio.html");
}
else{

	$query= @mysql_query("SELECT * FROM Usuarios WHERE Usuario = '$usuario' ");

if ($existe = @mysql_fetch_object($query))
{
	echo "<br>el usuario '.$usuario.' ya existe, el password esta errado<br>";
	exit();
     
}else{

echo "<br>Usuario no existe debe registrarse<br>";
header('Location: es/Registrese');
	
}




}




}
?>