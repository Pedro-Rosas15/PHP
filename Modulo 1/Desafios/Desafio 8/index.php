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
        $raiz4 = sqrt($valor1);
        $raizcubo = pow($valor1, 1/3);
    ?>
    <main>
        <form action="<?php print $_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">Numero:</label>
            <input type="number" name="v1" id="v1" value="<?=$valor1?>" step="0.01">
            <input type="submit" value="Calcular">
        </form>
        
        
    </main>
    <section id="resultado">
            <h2>Resultado da Final:</h2>
            <?php 
                print "<p>O numero selcecionado foi ". number_format($valor1, 2, ",", ".") ."</p>";
                print "<p>A sua raiz quadrada é:". number_format($raiz4, 2, ",", ".") ." </p>";
                print "<p>A sua raiz cubica é:". number_format($raizcubo, 2, ",", ".") ." </p>";
            ?>
        </section>
</body>
</html>