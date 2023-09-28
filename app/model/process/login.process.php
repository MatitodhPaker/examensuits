<?php
    require "../crud.class.php";
    $curd=new Crud();
    $curd->login([
        "usuario"=>$_POST['usuario'],
        "pass"=>$_POST['pass']
    ]);
?>