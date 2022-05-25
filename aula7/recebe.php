<?php
//  echo "<pre>";print_r($GLOBALS);echo "</pre>";
//  echo "<pre>";print_r($_POST);echo "</pre>";

// echo count($_POST);
if(count($_POST)==0){
    exit("<h1>Sem acesso!!!</h1>");
}
$login=$_POST["login"];
$senha=$_POST["senha"];
$cep=$_POST["cep"];
$senha_segura=md5($senha);
echo "<br>Login: $login, senha: *****, cep: $cep<br>";
$sql="insert into usuario(login,senha,cep) values ('$login','$senha_segura','$cep');";
echo $sql;
?>