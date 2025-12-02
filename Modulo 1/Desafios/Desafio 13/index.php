<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FR</title>
    <link rel="stylesheet" href="../../CSS/style.css">
    <style>
        .nota{
            height: 60px;
            margin: 10px;
        }

    </style>
</head>
<body>
    <?php 
        //variaveis
        $saque = $_GET['n1']?? 0;
        $resto = $saque;
        //100
        $cem =(int)($resto/100);
        $resto = $resto % 100;
        //50
        $cinquenta =(int)($resto/50);
        $resto = $resto% 50;
        //20
        $vinte =(int)($resto/20);
        $resto =$resto% 20;
        //10
        $dez =(int)($resto/10);
        $resto =$resto% 10;
        //5
        $cinco =(int)($resto/5);
        $resto =$resto% 5;
        //2
        $dois =(int)($resto/2);
        $resto =$resto% 2;
        //1
        $um =(int)($resto/1);
        $resto =$resto% 1;

    ?>
    <main>
        <h1 style="text-align: center;color: purple;">Nubank</h1>
        <form action="<?php print $_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">Quantos reais você quer sacar? :</label>
            <input type="number" name="n1" id="n1" value="<?=$saque?>" >
            
            <input type="submit" value="Calcular">
        </form>
        
        
    </main>


    <section id="resultado">
            <h2>Boa! O saque de R$<?= number_format($saque, 2, ",", ".") ?> foi realizado</h2>
            <ul>
                <li><img src="img/1-real.jpg" class="nota"><?=$um  ?></li>
                <li><img src="img/2-reais.jpg" class="nota"><?=$dois  ?></li>
                <li><img src="img/5-reais.jpg" class="nota"><?=$cinco  ?></li>
                <li><img src="img/10-reais.jpg" class="nota"><?=$dez  ?></li>
                <li><img src="img/20-reais.jpg" class="nota"><?= $vinte ?></li>
                <li><img src="img/50-reais.jpg" class="nota"><?=$cinquenta  ?></li>
                <li><img src="img/100-reais.jpg" class="nota"><?=$cem  ?></li>
            </ul>
        </section>

        
</body>
</html>