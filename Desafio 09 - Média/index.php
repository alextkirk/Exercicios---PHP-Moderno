<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Médias Aritiméticas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $pNum = $_POST['pNum'] ?? 0;
        $pPeso = $_POST['pPeso'] ?? 0;
        $sNum = $_POST['sNum'] ?? 0;
        $sPeso = $_POST['sPeso'] ?? 0;
        $mPonderada = ((($pNum * $pPeso) + ($sNum * $sPeso))/ ($pPeso + $sPeso))
    ?>
    <main>
        <h1>Médias Aritiméticas</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="pV">1º Valor</label>
            <input type="number" name="pNum" id="idpNum" value="<?=$pNum?>">
            <label for="p1">1º Peso</label>
            <input type="number" name="pPeso" id="idpPeso" value="<?=$pPeso?>">
            <label for="sV">2º Valor</label>
            <input type="number" name="sNum" id="idsNum" value="<?=$sNum?>">
            <label for="p2">2º Peso</label>
            <input type="number" name="sPeso" id="idsPeso" value="<?=$sPeso?>">
            <input type="submit" value="Calcular Médias">
        </form>
    </main>
    <section>
        <h1>Cálculo das Médias</h1>
        <p>Analisando os valores <?=$pNum?> e <?=$sNum?>:</p>
        <ul>
            <li>A <strong>Média Aritimética Simples</strong> entre os valores é igual a <?=number_format(($pNum + $sNum) / 2, 2, ",",".")?>.</li>
            <li>A <strong>Média Aritimética Ponderada</strong> com pesos <?=$pPeso?> e <?=$sPeso?> é igual a <?=number_format($mPonderada,2,",",".")?></li>
        </ul>
    </section>
</body>
</html>