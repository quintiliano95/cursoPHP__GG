<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/cursoPHP/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
    <title>Desafio 3</title>

</head>
<body>
    <main>
    <h1>Conversor de Moedas v1.0</h1>
        <?php
            $reais = $_GET["reais"];
            $reais_ajustado = (float) str_replace(',', '.', $_GET["reais"]);
            $dolar = (float) "4.98";
            $convertido = $reais_ajustado / $dolar;
            $convertido_formatado = number_format($convertido, 2, ',', '.');

            echo "<p>Seus R$ $reais equivalem a <strong>US$ $convertido_formatado</strong> <br>";
            echo "<p><strong>*Cotação fixa de R$ 4,98</strong> informada diretamente no código.";
        ?>
        <form method="get" style="background-color: transparent">
            <input type="submit" value="Voltar" onclick="window.history.go(-1)">
        </form>
    </main>
</body>
</html>
