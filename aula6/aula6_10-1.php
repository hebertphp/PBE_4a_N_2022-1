<?php
$nomes=array("Fulano","Beltrano","Sicrano", "Astrogildo","Hebert","Claudio");
sort($nomes);
$total = count($nomes);//6
$ult = count($nomes)-1;//5
echo "Foram encontradas $total nomes no array.<br>";
echo "Primeiro valor do array: ".$nomes[0]."<br>";
echo "Último valor do array: ".$nomes[$ult];
echo "<hr>";
for($i=0;$i<$total;$i++){
 echo $nomes[$i]."<br>";
}
echo "<hr>";
// echo "&#9800 - Aries";
?>
