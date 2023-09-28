<script>
    $(document).ready(()=>{
        $('#pedir').click(()=>{
            let producto=$("#producto").val();
            let pedido=$("#pedido").val();
            let cantidad=$("#cantidad").val();
            let ExpReg="^[0-9]+$";
            console.log(producto,pedido,cantidad);
            if(producto,pedido,cantidad){
                if (cantidad.match(ExpReg)) {
                    $.ajax({
                        url:'./app/model/process/createpedido.process.php',
                        data:{
                            producto,
                            pedido,
                            cantidad
                            },
                        type: "POST",
                        success: ()=>{
                            Swal.fire({
                                title:'Todo ok :)',
                                text:'Nuevo pedido agregado',
                                icon:'success',
                                confirmButtonColor: '#3085d6',
                                confirmButtonText:'OK!!'
                                }).then((result)=>{
                                    window.location="./pedidos"
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