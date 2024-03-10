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
    <title>Formulário</title>

</head>
<body>
    <header>
        <h1>SEJA BEM-VINDO!</h1>
    </header>
    <main>
        <h1>Resultado Final</h1>
        <?php
            $numero = (int) $_GET["numero"];
            $antecessor = $numero - 1;
            $sucessor = $numero + 1;

            echo "O número escolhido foi $numero <br>";
            echo "O número antecessor é $antecessor <br>";
            echo "O número sucessor é $sucessor";
        ?>
        <p><a href="javascript:history.go(-1)">Voltar</a></p>
    </main>
</body>
</html>
