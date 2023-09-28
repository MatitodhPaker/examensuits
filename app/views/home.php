<div class="container">
    <div class="row justify-content-around">
        <div class="col-sm-4 py-5">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <div class="mb-3">
                        <label for="usuario" class="form-label">Usuario</label>
                        <input type="text" class="form-control" id="usuario" aria-describedby="usuariohelp">
                        <div id="usuariohelp" class="form-text">Ingrese su usuario</div>
                    </div>
                    <div class="mb-3">
                        <label for="pass" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" id="pass" aria-describedby="passhelp">
                        <div id="passhelp" class="form-text">Ingrese su contraseña</div>
                    </div>
                    <div class="d-grid gap-2 d-md-block">
                        <button class="btn btn-primary" type="button" id="login">Iniciar Session</button>
                        <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#registro">Registrarse</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php 
    require "./app/views/modalregistro.php";
    require "./app/controller/createUser.controller.php";
    require "./app/controller/login.controller.php";
?>