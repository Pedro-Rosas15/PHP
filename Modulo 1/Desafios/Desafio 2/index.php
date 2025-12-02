<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>

    </header>
    <main>
        <p>Nosso site gera uma numero de 1 a 10000 clique no botão de "gerar" para gerar outro numero</p>

        <?php 
            $alea=mt_rand(0,10000);
            
            //rand(1,100)
            print "<p>O nosso site gerou $alea</p>";
        ?>

        <button onclick="javascript:document.location.reload()">Gerar</button>
    </main>
</body>
</html>