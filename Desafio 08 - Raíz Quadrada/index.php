<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raízes</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $num = $_POST['num'] ?? 1;
    ?>
    <main>
        <h1>Informe um número </h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="num">Número</label>
            <input type="number" name="num" id="idNum" value="<?=$num?>">
            <input type="submit" value="Calcular Raízes">
        </form>
    </main>
    <section>
        <h1>Resultado final</h1>
        <p>Analisando o <strong>número <?=$num?></strong>,temos:</p>
        <ul>
            <li>A sua raiz quadrada é <strong><?=number_format(sqrt($num),3, ",",".")?></strong></li>
            <li>A sua raiz cúbica é <strong><?=number_format(pow($num, 1/3), 3, ",", ".")?></strong></li>
        </ul>
    </section>
</body>
</html>