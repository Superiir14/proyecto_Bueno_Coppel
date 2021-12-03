<?php

include("conexion.php");
$con=conectar();

$id_Sucursal=$_GET['id'];

$sql="DELETE FROM sucursal  WHERE id_Sucursal='$id_Sucursal'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: sucursal.php");
    }
?>
