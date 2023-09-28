<?php
    require "../crud.class.php";
    $curd=new Crud();
    $curd->createProductos([
        "nombre"=>$_POST['nombre'],
        "precio"=>$_POST['precio'],
        "fecha"=>$_POST['fecha']
    ]);
?>