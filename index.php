<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <title>Formulário de Inscrição</title>
    <meta name="autor" content="">
    <meta name="viewport" content="">
    <meta nome="description" content="width-device.width, initial-scale-1">
    
</head>
<body>
    <p>Formulário para inscrição de competidores</p>
    <form action="script.php" method="POST"><!-- action é responsavel de processar dados que seram enviado pelo metodo POST -->
        <p>Seu Nome: <input type="text" name="nome" /></p>
        <p>Sua idade: <input type="text" name="idade" /></p>
        <p><input type="submit" value="Enviar dados co competidor"/></p>
    </form>
</body>
</html>