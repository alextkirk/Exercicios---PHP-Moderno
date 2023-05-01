<!DOCTYPE html>
<html lang="pt-Br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salário Mínimo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $salario = $_POST['salario'] ?? 0;
    ?>
    <main>
        <h1>Informe seu salário salafrário</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="salario">Salário (R$)</label>
            <input type="number" name="salario" id="idSalario" step="0.01" value="<?=$salario?>">
            <p>Considerando o salário mínimo de <strong>R$1.380,00</strong></p>
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Resultado Final</h2>
        <?php 
            $int = (int) ($salario / 1380);
            $resto = $salario - (1380 * $int);

            echo "<p>Quem recebe um salário de R$5.000,00 ganha <strong>$int salários mínimos +</strong> R$".number_format($resto, 2, ",", ".").".</p>"
        ?>
    </section>
</body>
</html>