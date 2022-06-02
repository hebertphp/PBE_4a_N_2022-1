<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="upload_file.php" method="post" enctype="multipart/form-data">
    <label for="file">Foto:</label>
    <input type="file" name="file" id="file" /><br/>
    <input type="submit" name="submit" value="Enviar" />
    </form>
</body>
</html>