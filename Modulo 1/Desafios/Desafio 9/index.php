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
        //notas e pesos
        $nota1 = $_GET['n1']?? 0;
        $peso1 = $_GET['p1']?? 1;
        $nota2 = $_GET['n2']?? 0;
        $peso2 = $_GET['p2']?? 1;

        //calculos

        //media simples
        $mas = ($nota1 + $nota2) / 2;

        //media ponderada
        $map = (($nota1 * $peso1) + ($nota2 * $peso2)) / ($peso1 + $peso2);
    ?>
    <main>
        <form action="<?php print $_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">Nota 1 :</label>
            <input type="number" name="n1" id="n1" value="<?=$nota1?>" step="0.01">

            <label for="v1">Peso 1 :</label>
            <input type="number" name="p1" id="p1" value="<?=$peso1?>" step="0.01">

            <label for="v1">Nota 2 :</label>
            <input type="number" name="n2" id="n2" value="<?=$nota2?>" step="0.01">

            <label for="v1">Peso 2 :</label>
            <input type="number" name="p2" id="p2" value="<?=$peso2?>" step="0.01">
            
            <input type="submit" value="Calcular">
        </form>
        
        
    </main>
    <section id="resultado">
            <h2>Calculadora de medias:</h2>
            <?php 
                print "<p>A média simples é  ". number_format($mas, 2, ",", ".") ."</p>";
                print "<p>A média ponderada é ". number_format($map, 2, ",", ".") ."</p>"
            ?>
        </section>
</body>
</html>