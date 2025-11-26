<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Olha esses resultados</h1>
    </header>
    <main>
        <?php 
            $n = $_GET["inum"];
            $anti = $n - 1;
            $com = $n + 1;
            print "<p>VC escolheu o $n</p>";
            
            print "<p>O antecessor é $anti</p>";
            print "<p>O sucessor é o $com</p>";
        ?>
    </main>
</body>
</html>