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
        //variaveis
        $começo = $_GET['n1']?? 0;
        $sobra = $começo;
        

        
        //minuto
        $min = (int)($sobra/60);
        $sobra = $sobra % 60;        
        //hora
        $hrs = (int)($sobra /3600);
        $sobra = $sobra % 3600;
        //dias
        $dias = (int)($sobra /86400);
        $sobra = $sobra % 85400;
        //semana
        $smn = (int)($sobra / 604800);
        $sobra = $sobra % 604800;
        //mes
        $mes = (int)($sobra /36288000);
        $sobra = $sobra % 36288000;
        //segundos
        $segundos = $sobra;
    ?>
    <main>
        <h1>Calculadora do Tempo</h1>
        <form action="<?php print $_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">Quantos segundos você quer converter? :</label>
            <input type="number" name="n1" id="n1" value="<?=$começo?>" >
            
            <input type="submit" value="Calcular">
        </form>
        
        
    </main>
    <section id="resultado">
            <h2>Calculadora o Tempo:</h2>
            <?php 
                //calculos
                

                //texto
                print "<p>Analisando o valor que você digitou, <strong>$começo segundos</strong> equivalem a um total de:</p><br>";
                print "
        <ul>
            <li>$mes Mes</li>
            <li>$smn semana</li>
            <li>$dias dias</li>
            <li>$hrs horas</li>
            <li>$min minutos</li>
            <li>$segundos segundos</li>
        </ul>  
                "
            ?>
        </section>

        
</body>
</html>