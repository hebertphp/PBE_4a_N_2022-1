<?php
$aluno=array(
    "nome"=>"Astrogildo",
    "ra"=>123456,
    "av1"=>9.5
);
echo "<pre>";print_r($aluno);echo "</pre>";
foreach($aluno as $pos=>$dados){
    echo "$pos: $dados<br>";
}
?>