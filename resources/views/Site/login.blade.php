<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="/assets/css/style-login.css">
    <title>Login</title>
</head>
<body>
    
    <div id="containeLogin">
        <form id="loginForm" action="">
            <img src="/assets/images/logo.png" alt="" width="140px" style="margin: auto; margin-bottom: 30px;">
            <!-- <strong id="textLogin">Login</strong> -->
            <label for="">Turma</label>
            <select class="input" id="turmaSelect" required></select>
            <label for="">Registro Acadêmico</label>
            <input class="input" type="text" id="inputUser" required maxlength="11" placeholder="Digite seu Registro Acadêmico">
            <input class="buttonSubmit" type="submit" value="Entrar">
        </form>

    </div>

    <script src="./data/dados.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="./login.js"></script>
</body>
</html>