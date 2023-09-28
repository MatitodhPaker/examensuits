<?php
    require "../crud.class.php";
    $curd=new Crud();
    $curd->update([
        "id"=>$_POST['id'],
        "nombre"=>$_POST['nombre'],
        "precio"=>$_POST['precio'],
        "fecha"=>$_POST['fecha']
    ]);
?>