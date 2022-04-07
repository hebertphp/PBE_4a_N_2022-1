<?php
$a=50;
$b=120;
$c=200;
$d=!(($a<=$b) and ($a<=$c));//$d= ( (T) and !(T) )//$d=F
$e=(($a<=$b) &&  !($a>=$c));//$e= !( (T) &&  !(F) )//$e=T
var_dump($d);
echo "<br>";
var_dump($e);
/*

!($x<=$z)

usuario - cond1
senha   - cond2

USUARIO E SENHA
cond1   cond2   res
v       v       v
v       f       f
f       v       f
f       f       f
*/
?>