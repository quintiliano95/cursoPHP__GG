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
        <?php
            // var_dump($_REQUEST);  // $Request é a junção de $_GET, $_POST E $_COOKIES
            $nome = $_GET["nome"] ?? "Pessoa"; // A interrogação é para setar um nome default
            $sobrenome = $_GET["sobrenome"] ?? "Desconhecida"; // A interrogação é para setar um sobrenome default
            echo "<p>Seja bem vindo ao meu site, <strong> $nome $sobrenome</strong>! <br></p>";
            echo 50/2+3**2;
        ?>
        <p><a href="javascript:history.go(-1)">Voltar</a></p>
    </main>
</body>
</html>
