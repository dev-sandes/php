<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio03</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <h1>Conversor de Moedas v1.0</h1>
        <?php 
            $reais = $_GET["reais"];
            $dolar = 5.73 * $reais;
            echo "Seus R$ $reais equivalem a <strong>US$ $dolar</strong>";
            echo <<< QUEBRA
            <br>
            <br>
            QUEBRA;
            echo "<p><strong>* Cotação fixa de R$5,73</strong> informada diretamente no código.</p>";
        ?>
        <button onclick="voltar()">Voltar</button>
        <script src="script.js"></script>
    </section>
</body>
</html>
