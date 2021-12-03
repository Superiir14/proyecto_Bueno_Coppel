<?php

include("conexion.php");
$con=conectar();

$id_Ventas=$_GET['id'];

$sql="DELETE FROM ventas WHERE id_Ventas='$id_Ventas'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: ventas.php");
    }
?>
