<?php

$aluno=array(
      0=> array("nome"=>"Hebert","ra"=>1234,"nota"=>9.9),
      1=> array("nome"=>"Joao","ra"=>789,"nota"=>8.9),
      2=> array("nome"=>"Belarmino","ra"=>9876,"nota"=>7.9)
);

// echo "<pre>";print_r($aluno);echo "</pre>";
// echo $aluno[1]["nome"];
for($i=0;$i<3;$i++){
    echo "Nome: ".$aluno[$i]["nome"].", ";
    echo "RA: ".$aluno[$i]["ra"].", ";
    echo "Nota: ".$aluno[$i]["nota"]."<br>";
}
/*
Desafio:

Criar um array bidimensional para armazenar dados de 3 alunos com:
*Nome;
*RA;
*Nota.

O array deverá ter:
Primeira dimensão numérica "iniciando por zero";  
segunda dimensão, array contendo as posições "nome", "ra" e "nota".
*/

/*
Estou por aqui, não fugi não!!!!
1 min, vou pegar água e já volto!!!!
*/
?>