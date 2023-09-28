<div class="modal fade" id="pedirModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog        ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Pedir</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h3><?php echo $producto['nombre']?></h3>
                <input type="text" hidden value="<?php echo $producto['id']?>" id="producto">
                <input type="text" hidden value="<?php echo $_SESSION['id_session']?>" id="pedido">
                <div class="mb-3">
                    <label for="cantidad" class="form-label">cantidad</label>
                    <input type="text" class="form-control" id="cantidad" aria-describedby="textHelp">
                    <div id="textHelp" class="form-text">Ingresa</div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="pedir">Hacer pedido</button>
            </div>
        </div>
    </div>
</div>