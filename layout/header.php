<!-- Top Bar Start -->
<div class="top-bar">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-4 col-md-12">
                <div class="logo">
                    <a href="index.html">
                        <!-- <h1>Gratex</h1> -->
                        <img src="img/logos/logo-gratex.svg" alt="Logo">
                    </a>
                </div>
            </div>
            <div class="col-lg-8 col-md-7 d-none d-lg-block">
                <div class="row">
                    <div class="col-4">
                        <div class="top-bar-item">
                            <div class="top-bar-icon">
                                <i class="flaticon-calendar"></i>
                            </div>
                            <div class="top-bar-text">
                                <h3>Horario de Apertura</h3>
                                <p>Lun - Vie, 8:00 - 6:00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="top-bar-item">
                            <div class="top-bar-icon">
                                <i class="flaticon-call"></i>
                            </div>
                            <div class="top-bar-text">
                                <h3>Llámanos</h3>
                                <p>(809) 538 9203</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="top-bar-item">
                            <div class="top-bar-icon">
                                <i class="flaticon-send-mail"></i>
                            </div>
                            <div class="top-bar-text">
                                <h3>Email</h3>
                                <p>gratexrd@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Top Bar End -->

<!-- Nav Bar Start -->
<div class="nav-bar">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
            <a href="#" class="navbar-brand">MENU</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav mr-auto">
                    <a href="/" class="nav-item nav-link <?php echo ($_SERVER['REQUEST_URI'] === '/' ? 'active' : ''); ?>">Inicio</a>
                    <a href="/blog" class="nav-item nav-link <?php echo ($_SERVER['REQUEST_URI'] === '/blog' ? 'active' : ''); ?>">Servicios</a>
                    <!-- <a href="portfolio.html" class="nav-item nav-link">Proyectos</a> -->
                    <a href="/contact" class="nav-item nav-link <?php echo ($_SERVER['REQUEST_URI'] === '/contact' ? 'active' : ''); ?>">Contacto</a>
                    <!-- <a href="about.html" class="nav-item nav-link">Acerca de</a> -->

                    <!-- <a href="team.html" class="nav-item nav-link">Equipo</a>

                                <div class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Páginas</a>
                                    <div class="dropdown-menu">
                                        <a href="blog.html" class="dropdown-item">Página del Blog</a>
                                        <a href="single.html" class="dropdown-item">Página Individual</a>
                                    </div>
                                </div> -->
                </div>
                <div class="ml-auto">
                    <a class="btn" href="/">Iniciar Sesi&oacute;n</a>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Nav Bar End -->