<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/assets/css/404.css">
    <link rel="stylesheet" href="public/assets/css/base.css">
    <link rel="stylesheet" href="public/assets/css/navbar.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

    <title>404</title>
</head>

<body>
<?php include_once(__DIR__ . '/components/navbar.php'); ?>
    <blocoCentral class="centro-j centro-a bloco-central">
        <main class="coluna centro-j centro-a">
            <linha class="linha centro-a">
                <p class="texto-404 bold">4</p>
                <img src="public/assets/img/emoji-triste.png" alt="emoji-triste" class="emoji">
                <p class="texto-404 bold">4</p>
            </linha>
            <linha>
                <h3 class = 'bold'>Opa! Não enchamos descontos por aqui</h3>
            </linha class="linha">
            <linha>
                <h4>
                    Vamos tentar em um lugar melhor!
                </h4>
            </linha>
            <linha class="linha">
                <a href="<?php echo $_ENV['APP_URL'] . route('homepage'); ?>" class='a'>
                    <button class="btn-retornar">Voltar a página inicial</button>
                </a>
            </linha>
        </main>
    </blocoCentral>
    <script src="public/Assets/js/home.js" type="module"></script>
</body>

</html>