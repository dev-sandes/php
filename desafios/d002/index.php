<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio02</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <h1>Trabalhando com números aleatórios</h1>
        <p>Gerando um número aleatório entre 0 e 100...</p>
        <?php
            $aleatorio = random_int(0, 100);
            echo "<p>O valor gerado foi <strong>$aleatorio</strong></p>";
        ?>
        <button onclick="gerar()">&#x1F503; Gerar outro</button>
        <script src="script.js"></script>
    </section>
</body>
</html>
