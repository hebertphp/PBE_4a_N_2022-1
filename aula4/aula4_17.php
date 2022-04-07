<?php
$a=50;
$b=120;
$c=200;
$d=(($a<=$b) xor ($c<=$a));// T F// T
$e=(($a>=$b) xor ($a>=$c));//F F //F
var_dump($d);
echo "<br>";
var_dump($e);
/*
not, só uma condição
and, or, xor 2 condições   

*/
?>