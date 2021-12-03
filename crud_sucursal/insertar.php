<?php
include("conexion.php");
$con=conectar();

$id_Sucursal=$_POST['id_Sucursal'];
$Nombre=$_POST['Nombre'];
$Direccion=$_POST['Direccion'];
$Telefono=$_POST['Telefono'];
$Correo=$_POST['Correo'];
$Encargado=$_POST['Encargado'];
$Ventas=$_POST['Ventas'];


$sql="INSERT INTO sucursal VALUES('$id_Sucursal','$Nombre','$Direccion','$Telefono','$Correo','$Encargado','$Ventas')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: sucursal.php");
    
}else {
}
?>