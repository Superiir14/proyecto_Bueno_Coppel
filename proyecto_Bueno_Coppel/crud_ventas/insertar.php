<?php
include("conexion.php");
$con=conectar();

$id_Ventas=$_POST['id_Ventas'];
$fecha_venta=$_POST['fecha_venta'];
$Importe=$_POST['Importe'];
$Ventas_totales=$_POST['Ventas_totales'];


$sql="INSERT INTO ventas VALUES('$id_Ventas','$fecha_venta','$Importe','$Ventas_totales')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: ventas.php");
    
}else {
}
?>