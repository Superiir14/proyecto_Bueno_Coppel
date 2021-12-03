<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM productos";
    $query=mysqli_query($con,$sql);


?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> PRODUCTOS</title>
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

                                    <input type="text" class="form-control mb-3" name="Nombre " placeholder="Nombre">
                                    <input type="text" class="form-control mb-3" name="descripcion" placeholder="descripcion">
                                    <input type="text" class="form-control mb-3" name="Disiponibilidad" placeholder="Disponibilidad">
                                    <input type="text" class="form-control mb-3" name="Existencia" placeholder="Existencia">
                                    <input type="text" class="form-control mb-3" name="Pasillo" placeholder="Pasillo">
                                    <input type="text" class="form-control mb-3" name="Precio" placeholder="Precio">

                                    <input type="submit" class="btn btn-primary">
                                    <a href="http://localhost/proyecto_Bueno_Coppel/">Inicio</a>
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>id_Producto</th>
                                        <th>Nombre</th>
                                        <th>descripcion</th>
                                        <th>Disponibilidad</th>
                                        <th>Existencia</th>
                                        <th>Pasillo</th>
                                        <th>Precio</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['id_Producto']?></th>
                                                <th><?php  echo $row['Nombre']?></th>
                                                <th><?php  echo $row['descripcion']?></th>
                                                <th><?php  echo $row['Disponibilidad']?></th>
                                                <th><?php  echo $row['Existencia']?></th>
                                                <th><?php  echo $row['Pasillo']?></th> 
                                                <th><?php  echo $row['Precio']?></th>       
                                                <th><a href="actualizar.php?id=<?php echo $row['id_Producto'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['id_Producto'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
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