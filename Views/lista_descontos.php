<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/Assets/Css/descontos.css">
    <link rel="icon" href="public/images/icon.ico" type="image/x-icon">
    <link rel="stylesheet" href="public/Assets/Css/style.css">
    <link rel="stylesheet" href="public/Assets/Css/base.css">
    <link rel="stylesheet" href="public/Assets/Css/navbar.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <title>Lista de Descontos</title>
</head>

<body>
    <?php include_once(__DIR__ . '/components/navbar.php'); ?>
    <div class="content">
        <h1>Veja quais <a>descontos</a> você pode adquirir!</h1>
            <cardDesconto class="container-desconto"></cardDesconto>
        
            <button class="btn-desconto">Comprar</button>
    </div>
    <div id="toast-container"></div>
</body>
<script type="module" src="public/Assets/js/listaDescontos.js"></script>
<script src="public/Assets/js/home.js" type="module"></script>
</html>