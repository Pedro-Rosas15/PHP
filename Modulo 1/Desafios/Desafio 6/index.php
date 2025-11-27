<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../CSS/style.css">
</head>
<body>
    <?php 
        $valor1 = $_GET['v1']?? 0;
        $valor2 = $_GET['v2']?? 1;
        $resultado = intdiv($valor1, $valor2);
        $quon = $valor1 % $valor2;
        $resreal = $valor1/$valor2;
    ?>
    <main>
        <form action="<?php print $_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">Valor 1</label>
            <input type="number" name="v1" id="v1" value="<?=$valor1?>">


            <label for="v2">Valor 2</label>
            <input type="number" name="v2" id="v2" value="<?=$valor2?>">
            <input type="submit" value="Divida">

        </form>
    </main>

    <section>
        <h2>Resultado:</h2>

        <table class="divisao">
            <tr>
                <td><?=  $valor1?></td>
                <td> <?= $valor2?></td>
            </tr>
            <tr>
                <td><?= $quon?></td>
                <td><?= $resultado?> ou <?= $resreal ?></td>
                
            </tr>

        </table>
    </section>
</body>
</html>