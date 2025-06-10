<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio07 PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $salario = $_GET['salario'] ?? 0;
    ?>
    <main>
        <h1>Informe seu salário</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="salario">Salário (R$)</label>
            <input type="number" name="salario" id="salario">
            <p>Considerando o salário mínimo de <strong>R$1.804,00<strong></p>
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Resultado Final</h2>
        <?php
            $salario = floatval($salario); // converte string para número (float)

            $padrão = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            $total = $salario / 1804;
            $inteiros = (int) $total;
            $decimal = $total - $inteiros;
            $resto = $decimal * 1804;

            print "<p>Quem recebe um salário de " . 
            numfmt_format_currency($padrão, $salario, "BRL") . 
            " <strong>ganha $inteiros salários mínimos</strong> + " . 
            numfmt_format_currency($padrão, $resto, "BRL") . 
            "</p>";

        ?>
    </section>
</body>
</html>