<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <style>
        #login{
            background-color:crimson;
            border:none;
        }
    </style>
</head>
<body>
    <!-- method="get ou post" -->
    <form method="post" action="recebe.php">
    <label for="login">Login</label> <input type="text" id="login" name="login" required><br>
    <label for="senha">Senha</label> <input type="password" id="senha" name="senha" required><br>
    <label for="cep">Cep</label> <input type="text" id="cep" name="cep" required><br>
    <input type="submit" value="Enviar!">
    </form>
</body>
</html>