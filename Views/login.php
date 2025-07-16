<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/assets/css/login.css">
    <link rel="stylesheet" href="public/assets/css/base.css">
    <link rel="stylesheet" href="public/assets/css/navbar.css">
    <link rel="stylesheet" href="public/assets/css/style.css">

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

    <title>Login</title>
    <link rel="icon" href="public/images/icon.ico" type="image/x-icon">
</head>

<body>
    <navbar></navbar>
    <main>
        <form class='formLogin coluna centro-a centro-j' method="POST" action="">
            <div class="coluna centro-a centro-j">
                <h1 class='fonte-titulo'>Entre na</h1>
                <div class="linha">
                    <h1 class="margin-5 fonte-titulo">
                        Buy
                        <span class="margin-5 fonte-titulo notBold">At</span>
                        Home
                    </h1>
                </div>
            </div>
            <input type="tel" name="CPF" id="cpf" placeholder="000.000.000-00" class="input" required pattern="\d{3}\.?\d{3}\.?\d{3}-?\d{2}" title="Digite um CPF no formato 000.000.000-00">
            <input type="password" name="Senha" id="Senha" placeholder="Sua senha" class="input" required minlength="6" autocomplete="current-password">
            <button type="submit" class="bt-enviar">Login</button>
        </form>
    </main>
    <script src="public/Assets/js/home.js" type="module"></script>
</body>

</html>