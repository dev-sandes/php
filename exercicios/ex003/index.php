<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos em PHP8</title>
</head>
<body>
    <h1>Tipos Primitivos</h1>
    <?php 
        #0x = hexadecimal
        #0b = binário
        #0 = Octal

        $num = (int) 3e2; # 3x10 (elevado a 2)
        var_dump($num);

        $casado = true;
        # Retorna 1 se for True
        # Retorna 0 se for False
        echo "<br>O valor para a variável casado é $casado<br>";

        $vet = ["Maria", 8.5, false, 3];
        var_dump($vet);
        
        class Pessoa {
            private string $nome;
        }

        $pessoa = new Pessoa;
        var_dump($pessoa);
    ?>
</body>
</html>
