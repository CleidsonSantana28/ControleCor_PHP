<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.php">
    <title>Document</title>
</head>
<body>
    <form method="post" action="ControllerColor.php">
        <select name="cor" id="cor" require>
            <option value="">Selecione a cor de fundo</option>
            <option value="black">Preta</option>
            <option value="red">Vermelha</option>
            <option value="blue">Azul</option>
        </select>
        <input type="submit" value="Trocar a Cor">
    </form>
    
</body>
</html>