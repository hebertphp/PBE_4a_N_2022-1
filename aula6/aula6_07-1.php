<?php

$a=array(
    array(10,40,50,60),
    array("SP","RJ","SC"),
    array(9.8,7.5,6.5)
);




$aluno = array(
 array("TBD","Fulano",123456789),
 array("TRC","Beltrano",234567890),
 array("TADS","Sicrano",345678901) 
);

echo "<br>Curso: " . $aluno[0][0] . "<br> Nome: " . $aluno[0][1] . "<br> RA: " . $aluno[0][2];
echo "<hr>Curso: " . $aluno[1][0] . "<br> Nome: " . $aluno[1][1] . "<br> RA: " . $aluno[1][2];
echo "<hr>Curso: " . $aluno[2][0] . "<br> Nome: " . $aluno[2][1] . "<br> RA: " . $aluno[2][2];
?>
