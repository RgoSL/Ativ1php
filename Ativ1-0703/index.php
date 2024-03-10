<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET PHP</title>
</head>
<body>
    <?php
    if(isset($_GET['operacao']) && isset($_GET['x']) && isset($_GET['y'])) {
        $operacao = $_GET['operacao'];
        $x = $_GET['x'];
        $y = $_GET['y'];
 
        if($operacao == "adicao") {
            echo "$x + $y = " . ($x + $y);
        } elseif($operacao == "subtracao") {
            echo "$x - $y = " . ($x - $y);
        } elseif($operacao == "multiplicacao") {
            echo "$x * $y = " . ($x * $y);
        } elseif($operacao == "divisao") {
            if($y != 0) {
                echo "$x / $y = " . ($x / $y);
            } else {
                echo "Erro: divisão por zero.";
            }
        } else {
            echo "Operação inválida.";
        }
    } else {
        echo "Por favor, forneça todos os parâmetros necessários.";
    }
    ?>
</body>
</html>
