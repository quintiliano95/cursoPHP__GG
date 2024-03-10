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
    <title>Desafio 4</title>

</head>
<body>
    <main>
    <h1>Conversor de Moedas v2.0</h1>
        <?php
            $reais = $_GET["reais"];
            $reais_ajustado = (float) str_replace(',', '.', $_GET["reais"]);
            // URL da API
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/';

            // Parâmetros da consulta
            $params = array(
                '$top' => 1, // Limita o resultado a 1 item
                '$filter' => "moeda == 'USD'", // Filtra por moeda USD (dólar)
                '$orderby' => 'dataHoraCotacao desc', // Ordena por dataHoraCotacao de forma decrescente
                '$format' => 'json' // Formato da resposta JSON
            );

            // Montando a URL completa com os parâmetros
            $url .= '?' . http_build_query($params);

            // Fazendo a requisição HTTP GET
            $response = file_get_contents($url);

            // Verificando se a requisição foi bem-sucedida
            if ($response === FALSE) {
                die('Erro ao acessar a API.');
            }

            // Decodificando a resposta JSON
            $data = json_decode($response, TRUE);

            // Verificando se há dados válidos na resposta
            if (isset($data['value'][0])) {
                // Extraindo o preço do dólar
                $precoDolar = $data['value'][0]['cotacaoCompra'];

                // Exibindo o preço do dólar
                echo 'Preço do dólar: ' . $precoDolar;
            } else {
                echo 'Nenhum dado disponível.';
            }
            $convertido = $reais_ajustado / $precoDolar;
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


<?php

// URL da API
$url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/';

// Parâmetros da consulta
$params = array(
    '$top' => 1, // Limita o resultado a 1 item
    '$filter' => "moeda == 'USD'", // Filtra por moeda USD (dólar)
    '$orderby' => 'dataHoraCotacao desc', // Ordena por dataHoraCotacao de forma decrescente
    '$format' => 'json' // Formato da resposta JSON
);

// Montando a URL completa com os parâmetros
$url .= '?' . http_build_query($params);

// Fazendo a requisição HTTP GET
$response = file_get_contents($url);

// Verificando se a requisição foi bem-sucedida
if ($response === FALSE) {
    die('Erro ao acessar a API.');
}

// Decodificando a resposta JSON
$data = json_decode($response, TRUE);

// Verificando se há dados válidos na resposta
if (isset($data['value'][0])) {
    // Extraindo o preço do dólar
    $precoDolar = $data['value'][0]['cotacaoCompra'];

    // Exibindo o preço do dólar
    echo 'Preço do dólar: ' . $precoDolar;
} else {
    echo 'Nenhum dado disponível.';
}
?>
