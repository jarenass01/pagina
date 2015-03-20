<?php

require_once'conexion.php'

//Vamos a llamr el script con la funcion de conectar

$conexion= crearConexion();

  /*	isset($_POST["apellidos"]) && !empty($_POST["apellidos"]) && 
	isset($_POST["apellidos"]) && !empty($_POST["fecha_nacimiento"]) && 
	isset($_POST["ciudad"]) && !empty($_POST["ciudad"]) && 
	isset($_POST["email"]) && !empty($_POST["email"]) && 
	

	isset($_POST["usuario"]) && !empty($_POST["usuario"]) && 
	isset($_POST["contrasena"]) && !empty($_POST["contrasena"])&& 
	isset($_POST["repetircontresana"]) && !empty($_POST["repetircontresana"]))*/





{

$nombres = $_POST["nombres"];
$apellidos = $_POST["apellidos"];
$fecha_nacimiento = $_POST["fecha_nacimiento"];
$ciudad = $_POST["ciudad"];
$email = $_POST["email"];

$usuario = $_POST["usuario"];
$contrasena = $_POST["contrasena"];


if($nombres=="") 
{ 

echo "El campo nombres no puede estar en blanco"; 
exit(); 

}


if($apellidos=="") 
{ 

echo "El campo apellidos no puede estar en blanco"; 
exit(); 

}

if($fecha_nacimiento=="") 
{ 

echo "El campo fecha_nacimiento no puede estar en blanco"; 
exit(); 

}
if($ciudad=="") 
{ 

echo "El campo ciudad no puede estar en blanco"; 
exit(); 

}
if($email=="") 
{ 

echo "El campo email no puede estar en blanco"; 
exit(); 

}
if($usuario=="") 
{ 

echo "El campo usuario no puede estar en blanco"; 
exit(); 

}
if($contrasena=="") 
{ 

echo "El campo contrasena no puede estar en blanco"; 
exit(); 

}



//$con = @mysql_connect($host,$user,$pw) or die ("Pro_server");

//@mysql_select_db($db,$con) or die ("pro_select_db");

//$query= @mysql_query("SELECT * FROM Usuarios WHERE Usuario= '$usuario'");
$resultado= $conexion->query("SELECT * FROM Usuarios WHERE Usuario= '$usuario'");

if ($existe = $resultado->fetch_object())
{
	echo "$usuario  Felicidades te encuentras registrado. ";
	//header ("Inicio.html");
	//aqui va link para ir a inicio
}
else
{

	//@mysql_query("INSERT INTO Usuarios (Nombres,Apellidos,Fecha_Nacimiento,Ciudad,email,Usuario,Pass,Fecha) values ('$nombres','$apellidos','$fecha_nacimiento','$ciudad','$email','$usuario','$contrasena',CURDATE())", $con) or die ("pro_insert_db");
	$conexion->query("INSERT INTO Usuarios (Nombres,Apellidos,Fecha_Nacimiento,Ciudad,email,Usuario,Pass,Fecha) values ('$nombres','$apellidos','$fecha_nacimiento','$ciudad','$email','$usuario','$contrasena',CURDATE())");
	if($conexion->insert_id >0){
		echo "Te has registrado con éxito";
	}else{
		echo "Algo no va bien, por favor valida que todos los campos requeridos estén diligenciados";
	}

   		//echo 'Quedaste registrado con exito ';


mail('ingenisof@gmail.com', 'Usuario creado', 'Quedaste '.$usuario.' registrad@ con exito');
   
echo 'Por favor Verifica el correo';		

}


}

?>