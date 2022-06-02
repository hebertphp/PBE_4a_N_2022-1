<?php
    //echo "<pre>";print_r($_POST);echo "</pre>";
    $login=(isset($_POST['login']))?$_POST['login']:"";
    $senha=(isset($_POST['senha']))?$_POST['senha']:"";
    $cep=(isset($_POST['cep']))?$_POST['cep']:"";
    echo "Login: $login, senha: ***, cep: $cep";
?>