<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 06 PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $dividendo = $_GET['dividendo'] ?? 1;
        $divisor = $_GET['divisor'] ?? 1;
    ?>
    <main>
        <h1>Anatomia de uma Divisão</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="dividendo">Dividendo:</label>
        <input type="number" name="dividendo" id="dividendo">
        <label for="divisor">Divisor:</label>
        <input type="number" name="divisor" id="divisor">
        <input type="submit" value="Analisar">
        </form>
    </main>
    <section id="resultado">
        <h1>Estrutura da Divisão</h1>
        <?php 
            $resultado = $dividendo / $divisor;
            $resto = $dividendo % $divisor;
            print "<p>O resultado da divisão entre os valores $dividendo e $divisor é igual a <strong>". number_format($resultado, 2, ',', '.') ."</strong>.</p>";
            echo "<p>E o resto da divisão é <strong>$resto</strong>.</p>";
        ?>
    </section>
</body>
</html>
