<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
    </header>
    <main>
        <h1>Resultado Final</h1>
        <?php
            $num = $_GET["num"];
            $antecessor = $num - 1;
            $sucessor = $num + 1;
            echo "<p>O número escolhido foi <strong>$num</strong></p>";
            echo "<p>Seu <i>antecessor</i> é $antecessor</p>";
            echo "<p>Seu <i>sucessor</i> é $sucessor</p>";
        ?>
        <button onclick="voltar()">Voltar</button>
        <script src="script.js"></script>
    </main>
</body>
</html>
