<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado Final</h1>
    </header>
    <main>
        <p>
            <?php
                $_Numero = $_GET["numero"];
                $_Antecessor = $_GET["numero"] - 1;
                $_Sucessor = $_GET["numero"] + 1;
                echo "O número escolindo foi: <strong>$_Numero</strong><br>Seu antecessor é $_Antecessor<br>E seu sucessor é $_Sucessor";
            ?>
        </p>
        <button onclick="javascript:window.location.href='index.html'">&#x2B05; Voltar</button>
    </main>
</body>
</html>