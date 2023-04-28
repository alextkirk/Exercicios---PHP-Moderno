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
        <h1>Conversor de Moedas 2.0</h1>
        <p>
            <?php
                //Cota
                $inicio = date("m-d-Y", strtotime("-7 days"));
                $fim = date("m-d-Y");
                $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'' . $inicio . '\'&@dataFinalCotacao=\'' . $fim . '\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

                $dados = json_decode(file_get_contents($url), true);

                $_Cota = $dados["value"][0]["cotacaoCompra"];


                //Digitado
                $_Valor = $_GET['money'];
                $_Dolar = $_Valor / $_Cota;

                $padrão = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
                echo "Seu valor". numfmt_format_currency($padrão, $_Valor, "BRL") . " equivale a <strong>" . numfmt_format_currency($padrão, $_Dolar, "USD"). "</strong>";
                echo "<br>Cotação <strong> " . numfmt_format_currency($padrão, $_Cota, "BRL") . "</strong> informada a partir de uma API do Banco Central.";
            ?>
        </p>
        <button onclick="javascript:history.go(-1)">&#x2B05; Voltar</button>
    </main>
</body>
</html>