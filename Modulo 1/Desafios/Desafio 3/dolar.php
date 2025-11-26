<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="1.css">
    
</head>
<body>
    <header>

    </header>
    <main>
        <h1>Conversor de Moedas v1.0</h1>

        <?php 
            $cotacao = 5.40;

            $real = $_GET["imoney"];

            $dolar = $real / $cotacao;

            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            print "Vc tem " . numfmt_format_currency($padrao, $real, "BRL");
            print "<br> <br>Vc consegue comprar " .  numfmt_format_currency($padrao, $dolar, "USD");
        ?>
    </main>
</body>
</html>