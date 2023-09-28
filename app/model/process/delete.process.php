<?php
    require "../crud.class.php";
    $curd=new Crud();
    $curd->delete(
        $_POST['id']
    );
?>