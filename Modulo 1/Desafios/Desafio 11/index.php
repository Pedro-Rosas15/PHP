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
        $preco = $_GET['n1']?? 0;
        $porcem = $_GET['n2']?? 10;
    ?>
    <main>
        <form action="<?php print $_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">Preço do Produto(R$) :</label>
            <input type="number" name="n1" id="n1" value="<?=$nota1?>" step="0.01">

            <label for="v1">Quer aumentar em quantos %(<strong><span id="p">?</span>%</strong>) :</label>
            <input type="range" name="n2" id="n2" value="<?=$nota2?>" min="1" max="100" oninput="mudaValor()">
            
            <input type="submit" value="Calcular">
        </form>
        
        
    </main>
    <section id="resultado">
            <h2>Calculadora de medias:</h2>
            <?php 
                //calculos
                $calculo = ($preco / 100) * $porcem;
                $aumento = $preco + $calculo;
                $menos = $preco - $calculo;

                //texto
                print "O produto custuva R$$preco com $porcem% de aumento fica $aumento e se diminuir fica $menos";
            ?>
        </section>

        <script>
            mudaValor()
            function mudaValor() {
                p.innerText = n2.value
            }

        </script>
</body>
</html>