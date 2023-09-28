<script>
    $(document).ready(()=>{
        $('#registra').click(()=>{
            let nombres=$("#nombre").val();
            let apellido=$("#apellido").val();
            let usuario=$("#usuarioR").val();
            let pass=$("#passR").val();
            let ExpReg=["^[A-ZÑa-zñáéíóúÁÉÍÓÚ'° ]+$","^[0-9A-ZÑa-zñ]+$"];
            if(nombres,apellido,usuario,pass){
                if (nombres.match(ExpReg[0])) {
                    if(apellido.match(ExpReg[0])){
                        if (usuario.match(ExpReg[1])&&usuario.length>=8) {
                            if (pass.match(ExpReg[1])&&pass.length>=8) {
                                $.ajax({
                                    url:'./app/model/process/createuser.process.php',
                                    data:{
                                        nombres,
                                        apellido,
                                        usuario,
                                        pass
                                    },
                                    type: "POST",
                                    success: (a,b,c,d)=>{
                                            console.log(a,b,c,d);
                                            Swal.fire({
                                                title:'Todo ok :)',
                                                text:'Nuevo usuario agregado',
                                                icon:'success',
                                                confirmButtonColor: '#3085d6',
                                                confirmButtonText:'OK!!'
                                            }).then((result)=>{
                                                location.reload();
                                            })
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
                            'El apellido contiene carecteres especialeso numeros',
                            'error'
                        )
                    }
                }else{
                    Swal.fire(
                        'Error!!',
                        'El nombre contiene carecteres especiales o numeros',
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