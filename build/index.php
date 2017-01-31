<?php
    $title = 'Home';
    $description = '';
    $keywords = '';

    include('includes/geral.php');
    include('includes/head.php');
?>

<body>

    <header class="navbar">
        <nav class="navbar nav-top">
            <div class="container">
                <p>Email: <a href="mailto:email@dominio.com.br">email@dominio.com.br</a></p>
                <p>Telefone: (11) 8888-8888</p>
            </div>
        </nav>
        <nav class="navbar container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="#" class="navbar-brand">
                    <img src="assets/images/logo.png" alt="">
                </a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#">Galeria</a></li>
                    <li><a href="#">Trainer</a></li>
                    <li><a href="#">Serviços</a></li>
                    <li><a href="#">Contato</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <section id="parallaxBar" class="col-md-12 banner-cover text-center" data-speed="2" data-type="background">
        <header>
            <h1>Olá, este é o <span>Stamina</span></h1>
            <p>Um template responsivo em HTML5 totalmente desenvolvido pela <a href="<?=$author;?>"><?=$creditos;?></a></p>
            <a href="#" class="btn btn-cta">Assista nosso Vídeo</a>
        </header>
    </section>

    <div class="services">
        <div class="container">
            <div class="col-md-4">
                <div class="services-wrapper">
                    <img src="assets/images/dumbbell.svg" alt="">
                    <h3>Weight Lifting</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                    <a href="#" class="btn btn-cta-small">More <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="services-wrapper">
                    <img src="assets/images/exercise.svg" alt="">
                    <h3>Running</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                    <a href="#" class="btn btn-cta-small">More <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="services-wrapper">
                    <img src="assets/images/yoga-carpet.svg" alt="">
                    <h3>Yoga</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                    <a href="#" class="btn btn-cta-small">More <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </div>

    <div class="about">
        <div class="container">
            <div class="about-text">
                <h2>Fitness Expert</h2>
                <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>

            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="box">
                        <a href="#">
                            <img src="assets/images/trainer-1.jpg" alt="">
                            <div class="title">
                                <h3>Name</h3>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box">
                        <a href="#">
                            <img src="assets/images/trainer-2.jpg" alt="">
                            <div class="title">
                                <h3>Name</h3>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box">
                        <a href="#">
                            <img src="assets/images/trainer-3.jpg" alt="">
                            <div class="title">
                                <h3>Name</h3>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="schedule">
        <div class="container">
            <h2>Programação</h2>

            <div id="filters" class="button-group">
                <!-- <button class="button is-checked" data-filter="*">Todos</button> -->
                <button class="button" data-filter=".janeiro">Janeiro</button>
                <button class="button" data-filter=".fevereiro">Fevereiro</button>
                <button class="button" data-filter=".marco">Março</button>
                <button class="button" data-filter=".abril">Abril</button>
                <button class="button" data-filter=".maio">Maio</button>
                <button class="button" data-filter=".junho">Junho</button>
                <button class="button" data-filter=".julho">Julho</button>
                <button class="button" data-filter=".agosto">Agosto</button>
                <button class="button" data-filter=".setembro">Setembro</button>
                <button class="button" data-filter=".outubro">Outubro</button>
                <button class="button" data-filter=".novembro">Novembro</button>
                <button class="button" data-filter=".dezembro">Dezembro</button>
            </div>

            <div class="grid">
                <div class="element-item julho " data-category="julho">
                    <h3 class="name">Ateu</h3>
                    <p class="symbol">Hg</p>
                    <p class="weight">200.59</p>
                </div>
                <div class="element-item fevereiro ">
                    <h3 class="name">Mel</h3>
                    <p class="symbol">Mel</p>
                    <p class="weight">200.59</p>
                </div>
                <div class="element-item marco " data-category="julho">
                    <h3 class="name">Ateu</h3>
                    <p class="symbol">Hg</p>
                    <p class="weight">200.59</p>
                </div>
                <div class="element-item marco ">
                    <h3 class="name">Mel</h3>
                    <p class="symbol">Mel</p>
                    <p class="weight">200.59</p>
                </div>
                <div class="element-item fevereiro ">
                    <h3 class="name">Mel</h3>
                    <p class="symbol">Mel</p>
                    <p class="weight">200.59</p>
                </div>
            </div>

        </div>
    </div>

<?php include('includes/footer.php'); ?>
