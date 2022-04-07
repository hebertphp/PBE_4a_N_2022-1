<?php
$a=50;
$b=120;
$c=200;
$d=(($a>=$b) or ($a>=$c));//false
$e=(($a>=$b) || ($a<=$c));//true
var_dump($d);
echo "<br>";
var_dump($e);
/*
Google
torta manga
cond1 torta
cond2 manga
cond1   cond2   res
v       v       v
v       f       v
f       v       v
f       f       f

*/
?>