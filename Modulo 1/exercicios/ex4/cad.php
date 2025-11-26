<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado dos Dados</h1>
    </header>

    <main>
        <?php 
            $n = $_GET["inome"];
            $s = $_GET["isnome"];
            $p = $_GET ["ipsw"];

            print "<p>Eai <strong>$n $s</strong>, é um prazer ter vc devolta com nosco</p>"
        ?>
    </main>
</body>
</html>