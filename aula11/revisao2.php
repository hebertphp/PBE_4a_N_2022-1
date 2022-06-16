<?php
//         0   1     2    3    4    5    6    7  
$uf=array(0=>"SP","RJ","SC",3=>"TO","PA","PR","PA","AM");

echo $uf[3]."<br>";

$mercado=array( "fruta"=>"Laranja",
                "bebida"=>"Leite;água",
                "total"=>15.5);

echo $mercado["fruta"]."<br>";

$aluno=array(
      0=> array("nome"=>"Hebert","ra"=>1234,"nota"=>9.9),
      1=> array("nome"=>"Joao","ra"=>789,"nota"=>8.9),
      2=> array("nome"=>"Belarmino","ra"=>9876,"nota"=>7.9)
);

echo $aluno[1]["nome"];
?>