<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM ventas WHERE id_Ventas='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="id_Ventas" value="<?php echo $row['id_Ventas']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="fecha_venta" placeholder="fecha_venta" value="<?php echo $row['fecha_venta']  ?>">
                                <input type="text" class="form-control mb-3" name="Importe" placeholder="Importe" value="<?php echo $row['Importe']  ?>">
                                <input type="text" class="form-control mb-3" name="Ventas_totales" placeholder="Ventas_totales" value="<?php echo $row['Ventas_totales']  ?>">
                                

                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>