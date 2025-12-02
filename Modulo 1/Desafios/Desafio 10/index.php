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
        $nota2 = $_GET['n2']?? 2025;
        $Calculadora = $nota2 - $nota1;
    ?>
    <main>
        <form action="<?php print $_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">Em qual ano vc nasceu? :</label>
            <input type="number" name="n1" id="n1" value="<?=$nota1?>" >

            <label for="v1">Que ano você quer saber sua idade? :</label>
            <input type="number" name="n2" id="n2" value="<?=$nota2?>" >
            
            <input type="submit" value="Calcular">
        </form>
        
        
    </main>
    <section id="resultado">
            <h2>Calculadora de medias:</h2>
            <?php 
                print "<p>Que legal! Você nasceu em $nota1 e você vai ter $Calculadora anos em $nota2!</p>";
            ?>
        </section>
</body>
</html>