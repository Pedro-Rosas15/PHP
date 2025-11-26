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


            $incio = date("m-d-Y", strtotime("-7 days")); 
            $fim = date("m-d-Y");

            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $incio .'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

            $dados = json_decode(file_get_contents($url), true);

            $cotacão = $dados["value"][0]["cotacaoCompra"];
            
            $real = $_GET["imoney"] ?? 0;

            $dolar = $real / $cotacão;

            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            print "A cotação atual é $cotacão";

            print "<br><br>Vc tem " . numfmt_format_currency($padrao, $real, "BRL");

            print "<br> <br>Vc consegue comprar " .  numfmt_format_currency($padrao, $dolar, "USD");
        ?>

        <button><a href="index.html">Voltar</a></button>
    </main>
</body>
</html>