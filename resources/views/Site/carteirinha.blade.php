<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/assets/css/style-carteirinha.css">
    <title>Carteirinha</title>
</head>
<body>
<!-- CABEÇALHO  -->
    <header>
        <div class="container grid">
            <div class="col-left">
                <a href="{{route('home')}}">
                    <img width="80" src="./assets/images/logo.png" alt="">
                </a>                
                <samp class="text-white" id="userName"></samp>
            </div>
            <div class="col-right">
                <a class="btn" href="{{route('home')}}"><i class="bi bi-arrow-return-left"></i> </a>
            </div>
        </div>

    </header>

<!-- CONTEÚDO PRINCIPAL -->
<main>
   
    <!-- CORPO -->
    <div class="box">
        <div id="card" class="card">
            <div class="top">
                <div class="topContainer">
    
                    <div class="item1">
                        <img class="img" src="./assets/images/logo-cart.png" alt="Logo da carteira digital">
                    </div>
    
                    <div class="item2">
                        <h1 class="textTop">CETI ALENCAR MORA</h1>
                        <h3 >ATIVIDADES ONLINE</h3>
                    </div>
    
                </div>
            </div>
            <div class="botton">
                <div class="col1">
                    <img width="150" src="./assets/images/qrCodeAulaOn.png" alt=" QR Code de aulas online">
                    <i>https://alunos.aldevan.dev.br/</i>
                </div>
    
                <div class="col2">
                    <h2 id="nameUserCarteirinha"></h2>
                    <p id="userTurma"></p>
                    <p>RA: <span id="ra"></span> </p>
                </div>
            </div>
    
        </div>
        
        <!-- Botões -->
        <button class="btnDownload" onclick="exportCertificateToPNG()"><i class="fa fa-download"></i> Baixar</button>
    </div>

</main>


<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.3.2/html2canvas.min.js"></script>
<script src="./assets/js/scripts-carteirinha.js"></script>
</body>
</html>