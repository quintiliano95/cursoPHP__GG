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
    <title>Desafio 2</title>

</head>
<body>
    <main>
    <h1>Trabalhando com números aleatórios</h1>
        <?php
            $num_aleatorio = rand(1, 100);
            echo "Gerando número aleatório entre 0 e 100... <br>";
            echo "O número gerado foi <strong> $num_aleatorio </strong>";
        ?>
        <form method="get">
            <input type="submit" value="Gerar número aleatório">
        </form>
    </main>
</body>
</html>
