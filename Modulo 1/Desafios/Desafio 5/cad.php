<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        
    </header>
    <main>
        <h1>Olha esses resultados</h1>
        <?php 
            $n = $_GET["inum"];
            $inteira = (int) $n;
            $divisão = $n - $inteira;
            print "<p>Vamos analisar o número <strong>". number_format($n, 3, ",", ".") . "</strong> que você escolheu</p>";
            
            print "<p>A parte inteira é <strong>". number_format($inteira, 0, ",", ".") ."</strong></p>";
            print "<p>A parte fracionaria de ". number_format($n, 3, ",", ".") ." é <strong>". number_format($divisão, 3, ",", ".") ."</strong></p>";
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>