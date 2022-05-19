<?php
$aluno=array("Thiago","Ilvan","Renan","Giovani","Guilherme","Eric","Jabson","Daniel","Kaique","Klisman","Hebert","Jonathan","Andrey");

//echo count($aluno)."<hr>";
echo "<pre>";print_r($aluno);echo "</pre>";
for($i=0;$i<count($aluno);$i++){
    echo $aluno[$i]."<br>";
}
echo "<hr>";

foreach($aluno as $valor){
    echo $valor."<br>";
}


?>