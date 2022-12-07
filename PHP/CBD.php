<?php
//configuración para el acceso de datos  de la base de datos
function conn(){
$servername = "localhost"; 
$username = "root";
$password = "";
$dbname = "examen";

//generando la conexicion con la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);
return $conn;
}
?>