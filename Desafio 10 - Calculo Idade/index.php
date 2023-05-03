<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo Idade</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $ano = $_GET['idade'] ?? date("Y");
        $anoNasc = $_GET['anoNasc'] ?? '2000';
    ?>
    <main>
        <h1>Calculando a sua idade</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="anoNasc">Em que ano você nasceu?</label>
            <input type="number" name="anoNasc" id="anoNasc" value="<?=$anoNasc?>">
            <label for="idade">Quer saber sua idade em que ano? (Atualmente estamos em <?=$ano?>)</label>
            <input type="number" name="idade" id="idade" value="<?=$ano?>">
            <input type="submit" value="Qual será a minha idade?">
        </form>
    </main>
    <section>
        <h1>Resultado</h1>
        <p>Quem nasceu em <?=$anoNasc?> vai ter <strong><?=$ano - $anoNasc?> anos</strong> em <?=$ano?>!</p>
    </section>
</body>
</html>