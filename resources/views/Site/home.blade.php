<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="./assets/css/style-home.css">
    <link rel="stylesheet" href="/assets/font/bootstrap-icons.css">
    <title>Atividades online-Home</title>
</head>
<body>
    <!-- CABEÇALHO  -->
    <header class="fixed-top shadow">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-auto ">
                    <a href="{{route('home')}}">
                        <img class="logo" src="/assets/images/logo.png" alt="">
                    </a>
                </div>
                <div class="col ">
                     <samp class="text-white" id="userName"></samp>
                </div>
                <div class="col-auto">
                    <button class="btn btn-sm btn-light" type="button" onclick="sair()"><i class="bi bi-power"></i></button>
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
                <div class="col-md-4">
                    <div class="position-sticky" style="top: 2rem;">
                        <div class="p-4 mb-3 bg-light rounded">
                            <h4 class="fst-italic">Avisos</h4>
                            <div>
                                <span class="fst-italic">Sem avisos recentes!</span>  
                            </div>
                        </div>

                        <div class="p-4 mb-3 bg-light rounded">
                            <h4 class="fst-italic">Pendências</h4>
                            <div>
                                <span class="fst-italic">Sem pendências!</span>  
                            </div>
                        </div>
                        
                        <div class="p-4">
                            <h4 class="fst-italic">Arquivos</h4>
                            <ol class="list-unstyled mb-0">
                                <li><a href="#">Notas</a></li>
                                <li><a href="{{route('carteirinha')}} ">Carteirinha</a></li>
                            </ol>
                        </div> 
                        
                        
                    </div>
                </div>

                <div class="col-md-8">
                    <h2 class="p-4 mb-3 fst-italic  bg-light rounded">
                        Atividades recentes
                    </h2>
                    <!-- Container  para os posts -->
                    <section class="row flex-nowrap">
                        
                        <div class="mb-2">
                            <div class="col ">
                                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                                    <div class="col p-4 d-flex flex-column position-static">
                                        <strong class="d-inline-block mb-2 text-success">Inteligência Artificial</strong>
                                        <h3 class="mb-0">Evolução da IA</h3>
                                        <div class="mb-1 text-muted">28 de Abril</div>
                                        <p class="card-text mb-auto">Atividade sobre a evolução da IA.</p>
                                        <a href="{{route('aula')}}" class="btn btn-sm btn-success mt-3 text-uppercase" >Acessar atividade</a>
                                    </div>
                                    <div class="col-auto d-none d-lg-block">
                                        <img src="/assets/images/thumb.png" alt="">      
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Mais posts -->
                        </div>
                        
                    </section>
                </div>
                
                
            </div>
        </section>

    </main>

<footer class="blog-footer">
    <p>
        <a href="#">Voltar ao topo</a>
    </p>
    <p><a href="https://aldevan.dev.br/">Aldevan Silva</a> © Copyright 2024 - Todos os direitos reservados.</p>
</footer>

    <!-- Bootstrap core JavaScript-->
    <script src="/assets/js/bootstrap.min.js"></script>
</body>
</html>