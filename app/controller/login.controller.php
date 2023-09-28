<script>
    $(document).ready(()=>{
        $('#login').click(()=>{
            let usuario=$("#usuario").val();
            let pass=$("#pass").val();
            let ExpReg=["^[A-ZÑa-zñáéíóúÁÉÍÓÚ'° ]+$","^[0-9A-ZÑa-zñ]+$"];
            if(usuario,pass){
                if (usuario.match(ExpReg[1])&&usuario.length>=8) {
                            if (pass.match(ExpReg[1])&&pass.length>=8) {
                                $.ajax({
                                    url:'./app/model/process/login.process.php',
                                    data:{
                                        usuario,
                                        pass
                                    },
                                    type: "POST",
                                    success: ()=>{
                                            window.location="./productos"
                                        },
                                    error:()=>{
                                        Swal.fire(
                                            'Error!!!',
                                            'Falla al agregar',
                                            'error'
                                        )
                                    }
                                })
                            } else {
                                Swal.fire(
                                    'Error!!',
                                    'Contraseña invalida debe contener al menos 8 caracteres no debe contener espacios ni caracteres especiales',
                                    'error'
                                )
                            }
                        } else {
                            Swal.fire(
                                'Error!!',
                                'Usuario invalido debe contener al menos 8 caracteres no debe contener espacios ni caracteres especiales',
                                'error'
                            )
                        }
            }else{
                Swal.fire(
                    'Error!!',
                    'Campo o campos vacios',
                    'error'
                )
            }
        })
    })
</script>