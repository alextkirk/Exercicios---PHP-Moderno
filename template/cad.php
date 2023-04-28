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
        <h1>Resultado do Processamento</h1>
    </header>
    <main>
        <?php 
            $_Nome = $_GET["nome"];
            $_SobreNome = $_GET['sobrenome'];

            echo "<p>É um prazer te conhecer $_Nome $_SobreNome!";
        ?>
    </main>
</body>
</html>