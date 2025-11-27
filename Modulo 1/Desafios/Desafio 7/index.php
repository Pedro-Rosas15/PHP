<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FR</title>
    <link rel="stylesheet" href="../../CSS/style.css">
</head>
<body>
    <?php 
        $valor1 = $_GET['v1']?? 0;
        $atual = 1518;
        $sal1 = $valor1/$atual;
        $sal = (int) $sal1;
        $resto = ($sal1 - $sal) * 1000 ;
    ?>
    <main>
        <form action="<?php print $_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">Salário (R$)</label>
            <input type="number" name="v1" id="v1" value="<?=$valor1?>" step="0.01">

            <p>Considerando que o salário minimo é de <strong>R$ 1.518,00</strong></p>
            <input type="submit" value="Calcular">
        </form>
        
        
    </main>
    <section id="resultado">
            <h2>Resultado da Final:</h2>
            <?php 
                print "<p>Quem recebe um salário de $valor1 ganha <strong>$sal salários mínimos</strong> + R$: ". number_format($resto, 2, ",", ".") .".</p>"
            ?>
        </section>
</body>
</html>