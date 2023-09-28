<div class="container">
    <div class="row mt-5">
        <div class="col">
                <a href="./productos" class="btn btn-info">Go back</a>
                <a href="./close" class="btn btn-danger">Cerrar sesion</a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Producto</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Total</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    foreach($pedidos as $pedido):
                ?>
                <tr>
                    <td>
                        <?php echo $pedido['nombre']; ?>
                    </td>
                    <td>
                        <?php echo $pedido['cantidad']; ?>
                    </td>
                    <td>
                        <?php echo $pedido['precio']*$pedido['cantidad']; ?>
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