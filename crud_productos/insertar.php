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


$sql="INSERT INTO productos VALUES('$id_Producto','$Nombre','$descripcion','$Disponibilidad','$Existencia','$Pasillo','$Precio')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: productos.php");
    
}else {
}
?>