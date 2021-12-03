<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM ventas";
    $query=mysqli_query($con,$sql);


?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> PAGINA EMPLEADO</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese datos</h1>
                                <form action="insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="fecha_venta " placeholder="fecha_venta">
                                    <input type="text" class="form-control mb-3" name="Importe" placeholder="Importe">
                                    <input type="text" class="form-control mb-3" name="Ventas_totales" placeholder="Ventas_totales">
                                        
                                    <input type="submit" class="btn btn-primary">
                                    <a href="http://localhost/proyecto_Bueno_Coppel/">Inicio</a>
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>id_Ventas</th>
                                        <th>fecha_venta</th>
                                        <th>Importe</th>
                                        <th>Ventas_totales</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['id_Ventas']?></th>
                                                <th><?php  echo $row['fecha_venta']?></th>
                                                <th><?php  echo $row['Importe']?></th>
                                                <th><?php  echo $row['Ventas_totales']?></th>
                                                  
                                                <th><a href="actualizar.php?id=<?php echo $row['id_Ventas'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['id_Ventas'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>