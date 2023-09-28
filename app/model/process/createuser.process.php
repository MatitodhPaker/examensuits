<?php
    require "../crud.class.php";
    $curd=new Crud();
    $curd->registro([
        "nombres"=>$_POST['nombres'],
        "apellidos"=>$_POST['apellido'],
        "usuario"=>$_POST['usuario'],
        "pass"=>$_POST['pass']
    ]);
?>