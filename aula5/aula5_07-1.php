<?php
$destino="New York";
if ($destino=="São Paulo"){
    echo 'Seja bem vindo a cidade que nunca para';
}
elseif($destino=="New York"){
    echo 'Seja bem vindo a Big Apple';
}
elseif($destino=="Luz"){
    echo 'Next station Luz, desembarque pelo lado direito do trem';
}
else{
    echo 'Não encontramos seu destino';
}
/*
switch ($destino) {
 case "São Paulo":
   echo 'Seja bem vindo a cidade que nunca para!';
 break;
 case "New York":
   echo 'Seja bem vindo a Big Apple!';
 break;
 case "Paris":
   echo 'Seja bem vindo a cidade Luz!';
 break;
 default:
   echo 'Não encontramos seu destino!';
}
*/
?>