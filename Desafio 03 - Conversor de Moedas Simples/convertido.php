<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valor convertido em Dólares</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Conversor de Moedas 1.0</h1>
        <p>
            <?php
                $_Cota = 5.00;
                $_Valor = $_GET['money'];
                $_Dolar = $_Valor / $_Cota;

                $padrão = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
                echo "Seu valor". numfmt_format_currency($padrão, $_Valor, "BRL") . " equivale a <strong>" . numfmt_format_currency($padrão, $_Dolar, "USD"). "</strong>";
                echo "<br><strong>Cotação fixa de " . numfmt_format_currency($padrão, $_Cota, "BRL") . "</strong> informada diretamente no código.";
            ?>
        </p>
        <button onclick="javascript:history.go(-1)">&#x2B05; Voltar</button>
    </main>
</body>
</html>