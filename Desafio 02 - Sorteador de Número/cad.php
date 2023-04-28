<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteador de Números Aleatórios</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Trabalhando com números aleatórios</h1>
        <p>Gerando um número aleatório entre 0 e 100</p>
        <p>
            <?php
                $_Numero = rand(0, 100);
                echo "O valor gerado foi $_Numero";
            ?>
        </p>
        <!-- <button onclick="javascript:window.location.href='cad.php'">&#x1F504; Gerar outro número</button> -->
        <button onclick="javascript:window.location.reload()">&#x1F504; Gerar outro número</button>
    </main>
</body>
</html>