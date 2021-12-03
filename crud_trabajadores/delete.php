<?php

include("conexion.php");
$con=conectar();

$id_Trabajadores=$_GET['id'];

$sql="DELETE FROM trabajadores  WHERE id_Trabajadores='$id_Trabajadores'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: trabajadores.php");
    }
?>
