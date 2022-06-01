<?php
include "con_pdo.php";//$conn
try {
    $sql="
    insert into usuario1 values (null, 'hba_pdo',md5('123456'),
    'hba_pdo@test.com',now(),'Funcionou com PDO?')
    ";
    $conn->exec($sql);
    echo "Insert OK!!";
}
catch(PDOException $e) {
    echo  "<br>" . $e->getMessage();
}
$conn = null;
?>
