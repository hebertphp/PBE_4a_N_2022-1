<?php
echo "Count: ".count($_FILES);
if(count($_FILES)==0){
    exit("<h1>Sem arquivo</h1>");
}
echo "Arquivo: " . $_FILES["file"]["name"]."<br/>";
echo "Tipo: " . $_FILES["file"]["type"]."<hr/>";
echo "<pre>";print_r($_FILES);echo "</pre>";
?>