<?php
include("conexion.php");
$con=conectar();

$id_Usuario=$_POST['id_Usuario'];
$Nombre=$_POST['Nombre'];
$Apellido=$_POST['Apellido'];
$Edad=$_POST['Edad'];
$Direccion=$_POST['Direccion'];
$Correo=$_POST['Correo'];
$Telefono=$_POST['Telefono'];


$sql="INSERT INTO usuario VALUES('$id_Usuario','$Nombre','$Apellido','$Edad','$Direccion','$Correo','$Telefono')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: usuario.php");
    
}else {
}
?>