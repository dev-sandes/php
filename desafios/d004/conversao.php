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
            # Cotação vinda da API do Banco Central
            $início = date("m-d-Y", strtotime("-7 days"));
            $fim = date("m-d-Y");
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$início.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

            $dados = json_decode(file_get_contents($url), true);

            $cotação = $dados["value"]["0"]["cotacaoCompra"];
        
            # Quantos $$ você tem?
            $real = $_REQUEST["din"] ?? 0;
        
            # Equivalência em dólar
            $dólar = $real / $cotação;
        
            # Formatação de moedas com internacionalização!
            # Biblioteca intl (internallization PHP)
        
            $padrão = numfmt_create("pt-BR", NumberFormatter::CURRENCY);
        
            echo "<p>Seus " . numfmt_format_currency($padrão, $real, "BRL") . " equivalem a <strong>" . numfmt_format_currency($padrão, $dólar, "USD") . "</strong></p>";
        ?>
        <button onclick="voltar()">Voltar</button>
        <script src="script.js"></script>
    </main>
</body>
</html>
