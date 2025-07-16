<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="public/images/icon.ico" type="image/x-icon">
    <title>BuyAtHome.promotion</title>
    <link rel="stylesheet" href="public/Assets/Css/welcome.css">
    <link rel="stylesheet" href="public/Assets/Css/navbar.css">
    <link rel="stylesheet" href="public/Assets/Css/product-card.css">
    <link rel="stylesheet" href="public/Assets/Css/style.css">
</head>

<body>
    <?php
    $moedas = 0; 

    if (isset($_SESSION['usuario']['moedas'])) {
        $moedas = $_SESSION['usuario']['moedas'];
    }

    include_once(__DIR__ . '/components/navbar.php');
    ?>
    <section class="header-background">
        <div class="header-background-content">
            <div class="left-items">
                <h1>Mini-mercado de Condomínio</h1>
                <h1 class="orange-text">Uma facilidade que surpreende.</h1>
            </div>
            <div class="right-items">
                <button onclick="window.location.href='<?php echo $_ENV['APP_URL'] . route('lista_descontos');  ?>'">Resgatar Cupons</button>
            </div>
        </div>
    </section>
    <div class="division"></div>
    <div class="center">
        <h1>As promoções de hoje!</h1>
        <h1 class="orange-text-title">É muito mais economia!</h1>
    </div>
    <div class="paded">
        <cardProduto class="products-container">
        </cardProduto>
    </div>
    <script src="public/Assets/js/home.js" type="module"></script>
    <script src="public/Assets/js/produtoCard.js" type="module"></script>
</body>

</html>