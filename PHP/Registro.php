
<?php
include_once('CBD.php');
//Variables para guardar los datos o mejor dicho para recibirlos
$titulo=$_POST['titulo'];
$imagen=$_POST['imagen'];
$descripcion=$_POST['descripcion'];
$autor=$_POST['autor'];
$fecha=$_POST['fecha'];

echo "Los datos son los siguientes: <br>";
echo "$titulo,$imagen,$descripcion,$autor y $fecha";

$conn=conn();//hace la conexión de base de datos 
$sql="INSERT INTO `articulos`(`titulo`, `imagen`, `descripcion`, `autor`, `fecha`) VALUES ('$titulo','$imagen','$descripcion','$autor','$fecha')";
$resul= mysqli_query($conn,$sql)or trigger_error("Query Failed SQL- Error:".mysqli_error($conn), E_USER_Error);

?>