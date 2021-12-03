<?php

include("conexion.php");
$con=conectar();

$id_Producto=$_POST['id_Producto'];
$Nombre=$_POST['Nombre'];
$descripcion=$_POST['descripcion'];
$Disponibilidad=$_POST['Disponibilidad'];
$Existencia=$_POST['Existencia'];
$Pasillo=$_POST['Pasillo'];
$Precio=$_POST['Precio'];

$sql="UPDATE productos SET  Nombre='$Nombre',descripcion='$descripcion',Disponibilidad='$Disponibilidad',Existencia='$Existencia',Pasillo='$Pasillo',Precio='$Precio' WHERE id_Producto='$id_Producto'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: productos.php");
    }
?>