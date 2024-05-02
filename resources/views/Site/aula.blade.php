<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="/assets/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./assets/css/style-home.css">
    <title>Atividades online-Home</title>
</head>
<body>
    <!-- CABEÇALHO  -->
    <header class="fixed-top shadow">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-auto ">
                    <a href="/home.html">
                        <img class="logo" src="/assets/images/logo.png" alt="">
                    </a>
                </div>
                <div class="col ">
                     <samp class="text-white" id="userName"></samp>
                </div>
                <div class="col-auto">
                    <a href="{{route('home')}}"  class="btn btn-sm btn-light" type="button"><i class="bi bi-arrow-return-left"></i> Voltar</a>
                </div>
            </div>
          </div>
    </header>

    <!-- CONTEÚDO PRINCIPAL -->
    <main>
        <!-- BANNER -->
        <section class="container banner">
            <img class="img-fluid" src="/assets/images/bannerCapa.png" alt="">
        </section>
        
        <!-- CORPO -->
        <section class="container">
            <div class="row ">
                <div class="col-md-8">
                    <h2 class="p-3 mt-3 mb-3 fst-italic border-bottom">
                        Atividades recentes
                    </h2>
                    <!-- Container  para os posts -->
                    <section class="row flex-nowrap">
                        
                        <div class="mb-2">
                            <!-- INICIO POST 01 -->
                            <div class="card mb-3">
                                <div class="card-body">
                                  <h5 class="card-title">Evolução da IA</h5>
                                  <p class="card-text">Nesta atividade, o aluno deve assistir o vídeo e responder o questionário clicando no botão <i class="text-danger">acessar atividade</i> abaixo:</p>
                                  <a href="#" class="btn btn-sm btn-success mb-3 px-5 text-uppercase" >Acessar atividade</a>
                                  <p class="card-text"><small class="text-muted">OBS: O vídeo está em inglês, mas tem legenda em protugês.</small></p>
                                </div>
                                <iframe  height="400" src="https://www.youtube.com/embed/hpcdcJPdmIc?si=7JLbIsZUuxNUln-l" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            </div>
                            <!-- FIM POST 01 -->
                            
                            <!-- Mais posts -->


                        </div>
                        
                    </section>
                </div>
                
                <!-- <div class="col-md-4">
                    <div class="position-sticky" style="top: 2rem;">
                        <div class="p-4 mb-3 bg-light rounded">
                            <h4 class="fst-italic">Avisos</h4>
                            <div>
                                <span class="fst-italic">Sem avisos recentes!</span>  
                            </div>
                        </div>
                        
                        <div class="p-4">
                            <h4 class="fst-italic">Arquivos</h4>
                            <ol class="list-unstyled mb-0">
                                <li><a href="#">Fevereiro 2024</a></li>
                                <li><a href="#">Março 2024</a></li>
                                <li><a href="#">Abril 2024</a></li>
                                <li><a href="#">Maio 2024</a></li>
                                <li><a href="#">Junho 2024</a></li>
                                <li><a href="#">Julho 2024</a></li>
                                <li><a href="#">Agosto 2024</a></li>
                                <li><a href="#">Setembo 2024</a></li>
                                <li><a href="#">Outubro 2024</a></li>
                                <li><a href="#">Novembro 2024</a></li>
                                <li><a href="#">Dezembro 2024</a></li>
                            </ol>
                        </div> 
                        
                        
                    </div>
                </div> -->
                
            </div>
        </section>

    </main>

    <footer class="blog-footer">
        <p>
            <a href="#">Voltar ao topo</a>
        </p>
        <p><a href="https://aldevan.dev.br/">Aldevan Silva</a> © Copyright 2024 - Todos os direitos reservados.</p>
    </footer>
    
    <script src="/config/verificarLogin.js"></script>
    <script src="/home.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
</body>
</html>