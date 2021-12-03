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

$sql="UPDATE sucursal SET  Nombre='$Nombre',Direccion='$Direccion',Telefono='$Telefono',Correo='$Correo',Encargado='$Encargado',Ventas='$Ventas' WHERE id_Sucursal='$id_Sucursal'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: sucursal.php");
    }
?>