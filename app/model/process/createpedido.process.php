<?php
    require "../crud.class.php";
    $curd=new Crud();
    $curd->createPedido([
        "producto"=>$_POST['producto'],
        "pedido"=>$_POST['pedido'],
        "cantidad"=>$_POST['cantidad']
    ]);
?>