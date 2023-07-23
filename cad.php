<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Converssão</title>
</head>
<body>
    <main>
        <h1>Valor convertido para Dollar</h1>
        <?php
            //cotação do dolar consultado no google
            $cotacao = 4.80;

            //valor buscado no formulário
            $real = (float)$_REQUEST["din"] ?? 0;

            $dolar = $real / $cotacao;

            //Mostrar o resultado
            echo "<p>Seus <strong>R\$" . number_format($real,2, ",", ".") . "</strong>" . " equivalem a <strong>US\$" . number_format($dolar,2,",",".") . "</strong>". "</p>";

        ?>
        <button onclick = "javascript:history.go(-1)">Retornar</button>
    </main>
</body>
</html>