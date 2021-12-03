<?php

include("conexion.php");
$con=conectar();

$id_Producto=$_GET['id'];

$sql="DELETE FROM productos  WHERE id_Producto='$id_Producto'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: productos.php");
    }
?>
