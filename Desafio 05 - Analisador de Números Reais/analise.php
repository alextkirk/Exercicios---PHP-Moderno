<!DOCTYPE html>
<html lang="pt-Br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analise do Número Real</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Analisador de Número Real</h1>
        <?php
            $num = $_GET['num'];
            $int = intdiv($num, 1);
            $resto = $num - $int;
            echo "<p>Analisando o número <strong>" . number_format($num, 3, ",", ".")  . "</strong> informado pelo usuário:</p>";
            echo "<ul><li>A parte inteira do número é <strong>" . number_format($int, 0, ",", ".") . "</strong></li>";
            echo "<li>A parte fracionária do número é <strong>" . number_format($resto, 3, ",", ".")  . "</strong></li></ul>";
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>