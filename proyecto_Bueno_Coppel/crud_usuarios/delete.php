<?php

include("conexion.php");
$con=conectar();

$id_Usuario=$_GET['id'];

$sql="DELETE FROM usuario  WHERE id_Usuario='$id_Usuario'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: usuario.php");
    }
?>
