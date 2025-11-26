<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../CSS/style.css">
</head>
<body>
    <main>
        <pre>
            <?php 
                setcookie("dia-semana", "Domingo", time() + 3600);

                session_start();
                $_SESSION["teste"] = "Funcionou";

                print "<h1>Superglobais Get</h1>";
                var_dump($_GET);

                print "<h1>Superglobais Post</h1>";
                var_dump($_POST);

                print "<h1>Superglobais request</h1>";
                var_dump($_REQUEST);
                
                print "<h1>Superglobais cookie</h1>";
                var_dump($_COOKIE);

                print "<h1>Superglobais SESSION</h1>";
                var_dump($_SESSION);

                print "<h1>Superglobais Env</h1>";
                var_dump($_ENV);

                print "<h1>Superglobais SERVER</h1>";
                var_dump($_SERVER);

                print "<h1>Superglobais Globais</h1>";
                var_dump($GLOBALS);
            ?>

        </pre>

    </main>
</body>
</html>