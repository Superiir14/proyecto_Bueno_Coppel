<?php

include("conexion.php");
$con=conectar();

$id_Ventas=$_POST['id_Ventas'];
$fecha_venta=$_POST['fecha_venta'];
$Ventas_totales=$_POST['Ventas_totales'];

$sql="UPDATE ventas SET  fecha_venta='$fecha_venta',Ventas_totales='$Ventas_totales' WHERE id_Ventas='$id_Ventas'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: ventas.php");
    }
?>