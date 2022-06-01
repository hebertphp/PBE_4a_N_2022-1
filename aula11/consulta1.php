<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório</title>
    <style>
        :root{
            --cor:240;
        }
        table, td, th{
            border: 2px solid blue;
            border-collapse:collapse;

        }
        table{
            width: 400px;
            margin: 0 auto;
        }
        tr:nth-child(odd) {
            background: hsl(var(--cor),100%,40%);
            color:white;
        }
        tr:nth-child(even) {
            background: hsl(var(--cor),100%,90%);
        }
    </style>
</head>
<body>
    <h1>Relatório</h1>
    <table>
        <!-- <table> <tr> <th> <td> -->
        <tr>
            <th>Id</th>
            <th>Login</th>
            <th>E-mail</th>
            <th>Data</th>
            <th>Obs</th>
        </tr>  
        <!--
        <tr>
            <td>1</td>
            <td>admin</td>
            <td>teste@teste.com</td>
            <td>13/12/2021</td>
        </tr>   
        -->   
<?php
include "conecta.php";//$conn
$sql="select id, login, email, DATE_FORMAT(data,'%d/%m/%Y') as data,obs from usuario";
$result = mysqli_query($conn,$sql) or die (mysqli_error($conn));

while($row=  mysqli_fetch_array($result, MYSQLI_ASSOC)){
    // echo $row["id"]." - ".$row["login"]." - ".$row["email"]." - ".$row["data"]."<br>";
?>
        <tr>
            <td><?php echo $row["id"]; ?></td>
            <td><?php echo $row["login"]; ?></td>
            <td><?php echo $row["email"]; ?></td>
            <td><?php echo $row["data"]; ?></td>
            <td><?php echo $row["obs"]; ?></td>
        </tr> 
<?php
}
mysqli_free_result($result);

mysqli_close($conn);
?>
</table>
</body>
</html>