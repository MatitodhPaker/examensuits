<script>
    $(document).ready(()=>{
        $('#actualizar').click(()=>{
            let id=$("#id").val();
            let nombre=$("#nombre").val();
            let precio=$("#precio").val();
            let fecha=$("#fechaCaducidad").val();
            let ExpReg=["^[A-ZÑa-zñáéíóúÁÉÍÓÚ'° ]+$","^[0-9]+$","^[0-9/]+$"];
            console.log(id);
            if(nombre,precio,fecha){
                if (nombre.match(ExpReg[0])) {
                    if(precio.match(ExpReg[1])){
                        if (fecha.match(ExpReg[2])) {
                            $.ajax({
                                    url:'./app/model/process/update.process.php',
                                    data:{
                                        id,
                                        nombre,
                                        precio,
                                        fecha
                                    },
                                    type: "POST",
                                    success: ()=>{
                                            Swal.fire({
                                                title:'Todo ok :)',
                                                text:'Producto actualizado',
                                                icon:'success',
                                                confirmButtonColor: '#3085d6',
                                                confirmButtonText:'OK!!'
                                            }).then((result)=>{
                                                window.location="./productos"
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
                                'fecha Invalida',
                                'error'
                            )
                        }
                    }else{
                        Swal.fire(
                            'Error!!',
                            'precio invalido',
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