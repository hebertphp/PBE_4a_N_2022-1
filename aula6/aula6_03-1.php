<?php
$uf=array("SP","RJ","MG","TO","SC");
$i=[10,2022,50,7.5];//GABRIEL DA SILVEIRA FIL
$uf[3].="PR";//$uf[3]=$uf[3]."PR"//$uf[3]="TO"."PR"

$i[0]++;//++ soma 1 +=1 

//print_r($uf);
echo $uf[3];
?>
<hr>
Outra forma para utilizar o print_r( ):
<hr>                 
<?php
 echo "<pre>";
 print_r($i);
 echo "</pre>";
 for($i=0;$i<3;$i++){
     echo $i." ";
 }
?>
