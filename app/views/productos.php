<div class="container">
    <div class="row mt-5">
        <div class="col">
                <a href="./createproductos" class="btn btn-outline-success">Agregar</a>
                <a href="./pedidos" class="btn btn-outline-dark">Pedidos</a>
                <a href="./productos" class="btn btn-info">Go back</a>
                <a href="./close" class="btn btn-danger">Cerrar sesion</a>
            
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Actualizar</th>
                        <th scope="col">Eliminar</th>
                        <th scope="col">Relizar pedido</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    foreach($productos as $producto):
                ?>
                <tr>
                    <td>
                        <?php echo $producto['nombre']; ?>
                    </td>
                    <td>
                        <?php echo $producto['precio']; ?>
                    </td>
                    <td>
                        <?php echo $producto['fecha_caducidad']; ?>
                    </td>
                    <td>
                        <a href="./update&id=<?php echo $producto['id']; ?>" class="btn btn-outline-warning">Actualizar</a>
                    </td>
                    <td>
                        <button class="btn btn-outline-danger" onclick="borrar(<?php echo $producto['id']?>)">Eliminar</button>
                    </td>
                    <td>
                        <button class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#pedirModal">Pedir</button>
                    </td>
                </tr>
                <?php
                    endforeach;
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php 
require "./app/controller/delete.controller.php";
require "./app/views/modalpedido.php";
require "./app/controller/createPedido.controller.php";
?>