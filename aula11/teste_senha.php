<?php
$senha="uninove";
$senha_md5=md5($senha);
$hashed_password = password_hash($senha, PASSWORD_DEFAULT);
//$hashed_gerada='$2y$10$vmxLWKYPQd6R0MXo9kGTWu3IxYrbXUFdxADUw4o5pRbpbarPv8xnS';
  $hashed_gerada='$2y$10$0E29gxYEkYm68KhrQd3RD.yze3GzftHPyoEPwwR6g1zZrcNftCJ/m';
echo "Tamanho da string: ".strlen($senha_md5)." caracteres -  <b>$senha_md5</b><br>";
echo "Tamanho da string: ".strlen($hashed_password)." caracteres -  <b>$hashed_password</b><br>";

if(password_verify($senha, $hashed_gerada)){
    echo "<hr>Senha ok!";
}
else{
    echo "<hr>Senha desconhecida!";
}
?>