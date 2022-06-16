<?php
//echo count($_POST);
include "conecta.php";//$conn
if(count($_POST)==0){ exit("<h1>ACESSO NEGADO!</h1>");}
echo "<pre>";print_r($_POST);echo "</pre>";

$login=$_POST["login"];
$senha=$_POST["senha"];
$email=$_POST["email"];
$obs=$_POST["obs"];
$hashed_password = password_hash($senha, PASSWORD_DEFAULT);
$sql="insert into usuario (login,senha,email,data,obs) 
                   values ('$login','$hashed_password','$email',now(),'$obs')";

//echo "<br>$sql";
$query = mysqli_query($conn,$sql) or die (mysqli_error($conn));
echo "Insert OK!";
mysqli_close($conn);
/*
Array
(
    [login] => re
    [senha] => erwe
    [email] => teste@teste.com
    [obs] => erwe
)
*/
?>