<?php include("../../../include/bd.php");

if(isset($_GET['txtid'])){

    //Borrar dicho registro con el ID correspondiente
    $txtid=(isset($_GET['txtid']))?$_GET['txtid']:"";
    $sentencia= $conexion->prepare("DELETE FROM productos WHERE id=:id");
    $sentencia->bindParam(":id",$txtid);
    $sentencia->execute();
   
}

    //SELECCIONAR REGISTROS
    $sentencia= $conexion->prepare("SELECT * FROM `productos`"); 
    $sentencia->execute();
    $lista_productos=$sentencia->fetchAll(PDO::FETCH_ASSOC);


 include("../../header.php");
 include '../../../include/header.php'?>


<div class="card">
    <div class="card-header">
        <a name="" id="" class="btn btn-primary" href="crear.php" role="button">Agregar producto</a>
    </div>
    <div class="card-body">
         <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Mini descripcion</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Tipo de producto</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Precio con descuento</th>
                        <th scope="col">Imagen</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($lista_productos as $registros){?>
                    <tr>
                        <td><?php echo $registros["id_producto"] ?></td>
                        <td><?php echo $registros["nombre"] ?></td>
                        <td><?php echo $registros["mini_descripcion"] ?></td>
                        <td><?php echo $registros["descripcion"] ?></td>
                        <td><?php echo $registros["producto_tipo"] ?></td>
                        <td>$ <?php echo $registros["precio"] ?></td>
                        <td>$ <?php echo $registros["precio_descuento"] ?></td>
                        <td><?php echo $registros["imagen"] ?></td>
                        <td>
                        <a name="" id="" class="btn btn-info" href="editar.php?txtid=<?php echo $registros['id_producto']; ?> " role="button" role="button">Editar</a>
                        <a name="" id="" class="btn btn-danger" href="index.php?txtid=<?php echo $registros['id_producto']; ?>" role="button">Eliminar</a>
                        </td>
                    </tr>
                  <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include("../../../include/footer.php"); ?>