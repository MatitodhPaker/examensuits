<!DOCTYPE html>
<html lang="es">
<head>
    <?php require "./app/views/includes/metatags.php"?>
</head>
<body>
    <?php
        require "./app/model/crud.class.php";
        session_start();
        $curd= new Crud();
        if (isset($_GET["vista"])) {
            switch ($_GET["vista"]) {
                case 'home':
                    include "./app/views/home.php";
                    break;
                case 'productos':
                    if(isset($_SESSION['id_session'])) {
                        $productos=$curd->read();
                        include "./app/views/productos.php";
                    }else{
                        header("location: ./home");
                    }
                    break;
                case 'createproductos':
                    if(isset($_SESSION['id_session'])) {
                        include "./app/views/createproductos.php";
                    }else{
                        header("location: ./home");
                    }
                    break;
                case 'update':
                    if(isset($_SESSION['id_session'])) {
                        $producto=$curd->show($_GET['id']);
                        include "./app/views/update.php";
                    }else{
                        header("location: ./home");
                    }
                    break;
                case 'pedidos':
                    if(isset($_SESSION['id_session'])) {
                        $pedidos=$curd->readpedidos();
                        include "./app/views/pedidos.php";
                    }else{
                        header("location: ./home");
                    }
                    break;
                case 'close':
                    include "./app/views/cierrasession.php";
                    break;
                default:
                    # code...
                    break;
            }
        }else{
            header("location: ./home");
        }
    ?>
    <?php require "./app/views/includes/scripts.php"?>
</body>
</html>