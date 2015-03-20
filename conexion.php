<?php

$host ="mysql.hostinger.co";
$user ="u815095155_cyber";
$pw = "ingeniero2015";
$db = "u815095155_cyber";

function crearConexion(){       
    
    $conexion = new mysqli($host,$user,$pw,$db);
    if($conexion->connect_error){
        die("Error en la conexion : ".$conexion->connect_errno."-".$conexion->connect_error);
    }
    $conexion->query("SET NAMES 'utf8'");
    return $conexion;
}



?>