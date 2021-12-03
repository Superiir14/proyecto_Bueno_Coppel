<?php
include("conexion.php");
$con=conectar();

$id_Trabajadores=$_POST['id_Trabajadores'];
$Nombre=$_POST['Nombre'];
$Apellido=$_POST['Apellido'];
$Edad=$_POST['Edad'];
$Direccion=$_POST['Direccion'];
$Correo=$_POST['Correo'];
$Telefono=$_POST['Telefono'];

$sql="INSERT INTO trabajadores VALUES('$id_Trabajadores','$Nombre','$Apellido','$Edad','$Direccion','$Correo','$Telefono')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: trabajadores.php");
    
}else {
}
?>