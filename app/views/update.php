<?php
    print_r($producto)
?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Actualizar producto</h1>
            <a href="./close" class="btn btn-danger">Cerrar sesion</a>
            <input type="text" hidden value="<?php echo $producto['id']?>" id="id">
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombre" aria-describedby="nombrehelp" value="<?php echo $producto['nombre']?>">
                    <div id="nombrehelp" class="form-text">Ingrese el nombre del producto</div>
                </div>
                <div class="mb-3">
                    <label for="precio" class="form-label">Precio</label>
                    <input type="text" class="form-control" id="precio" aria-describedby="preciohelp" value="<?php echo $producto['precio']?>">
                    <div id="preciohelp" class="form-text">Ingrese su precio</div>
                </div>
                <div class="mb-3">
                    <label for="fechaCaducidad" class="form-label">Fecha de Caducidad</label>
                    <input type="text" class="form-control" id="fechaCaducidad" aria-describedby="fechaCaducidadhelp" value="<?php echo $producto['fecha_caducidad']?>">
                    <div id="fechaCaducidadhelp" class="form-text">Ingrese la fecha de caducidad</div>
                </div>
                <div class="d-grid gap-2">
                    <button class="btn btn-warning" type="button" id="actualizar">Actualizar</button>
                    <a href="./productos" class="btn btn-primary" type="button">Regresar</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
require "./app/controller/update.controller.php";
?>