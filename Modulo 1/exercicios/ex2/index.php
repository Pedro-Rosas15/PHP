<!DOCTYPE html>
<html lang="php">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exemplo de php</h1>

    <?php 
        $nome="Pedro Rosas";
        echo "Olá $nome !";
        echo " <br><br> Vc está vendo esse site no dia " . date("d/M/Y");
        date_default_timezone_set("America/Sao_Paulo");
        echo "<br><br> Já são " . date("G:i:s T");
    ?>
</body>
</html>