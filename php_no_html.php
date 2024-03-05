<?php
    $nome = "Fulano";
    $cor_favorita = "cinza";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usar PHP no HTML</title>
</head>
<body>
    <h1>Nome: <?= $nome ?></h1>
    <h1>Cor favorita: <?= $nome ?></h1>
    <?php print "oi, como você esta?" ?>
    <br>
    <?= "mensagem exibida pelo php" ?>
</body>
</html>