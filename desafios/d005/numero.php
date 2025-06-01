<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Analisador de Número Real</h1>
        <?php 
            $num = $_POST["n"] ?? 0;

            echo "<p>Analisando o número <strong>".number_format($num, 3, ",",".")." </strong>informado pelo usuário:</p>";

            $int = (int) $num;
            $fra = $num - $int;

            echo "<ul><li> A parte inteiro do número é <strong>".number_format($int, 0, ",", ".")."</strong></li>";
            echo "<li> A parte fracionária do número é <strong>".number_format($fra, 3, ",", ".")."</strong></li></ul>";
        ?>
        <button onclick="voltar()">Voltar</button>
        <script src="script.js"></script>
    </main>
</body>
</html>