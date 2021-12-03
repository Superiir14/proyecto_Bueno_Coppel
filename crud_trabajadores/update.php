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

$sql="UPDATE trabajadores SET  Nombre='$Nombre',Apellido='$Apellido',Edad='$Edad',Direccion='$Direccion',Correo='$Correo',Telefono='$Telefono' WHERE id_Trabajadores='$id_Trabajadores'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: trabajadores.php");
    }
?>