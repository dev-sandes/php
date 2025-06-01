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
        <h1>Conversor de Moedas</h1>
        <?php
            # Cotação copiada do Google
            $cotação = 5.73;
        
            # Quantos $$ você tem?
            $real = $_REQUEST["din"] ?? 0;
        
            # Equivalência em dólar
            $dólar = $real / $cotação;
        
            # Formatação de moedas com internacionalização!
            # Biblioteca intl (internallization PHP)
        
            $padrão = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        
            echo "<p>Seus " . numfmt_format_currency($padrão, $real, "BRL") . " equivalem a <strong>" . numfmt_format_currency($padrão, $dólar, "USD") . "</strong></p>";
        ?>
        <button onclick="voltar()">Voltar</button>
        <script src="script.js"></script>
    </main>
</body>
</html>
