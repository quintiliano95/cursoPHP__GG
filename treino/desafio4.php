<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/style.css">
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
            // $reais = (float) str_replace(',', '.', $_GET["reais"]);
            $inicio = date("m-d-Y", strtotime("-7 days"));
            $fim = date("m-d-Y") ;

            // URL da API
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
            $dados = json_decode(file_get_contents($url), true);
            $cotacao = $dados["value"][0]["cotacaoCompra"];
            $dolar = $reais / $cotacao;
            // $lucro_formatado = sprintf("%.2f", $lucro);;
            $lucro_formatado = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
            
            echo "<p>Seus " . numfmt_format_currency($lucro_formatado, $reais, "BRL") . " equivalem a <strong>" . numfmt_format_currency($lucro_formatado, $dolar, "USD") . "</strong> <br>";
            echo "<p><strong>*Cotação feita através de consulta ao Banco Central</strong>.";
        ?>

        <form method="get" style="background-color: transparent">
            <input type="submit" value="Voltar" onclick="window.history.go(-1)">
        </form>
    </main>
</body>
</html>
