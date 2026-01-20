<!-- Carousel Start -->
<div id="carousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <?php foreach ($carouselItems as $index => $item): ?>
            <li data-target="#carousel" data-slide-to="<?php echo $index; ?>"
                class="<?php echo $index === 0 ? 'active' : ''; ?>"></li>
        <?php endforeach; ?>
    </ol>
    <div class="carousel-inner">
        <?php foreach ($carouselItems as $index => $item): ?>
            <div class="carousel-item <?php echo $index === 0 ? 'active' : ''; ?>">
                <img src="<?php echo getImageUrl($item['image_path']); ?>"
                    alt="<?php echo htmlspecialchars($item['title']); ?>"
                    style="width: 100%; height: 600px; object-fit: cover;">
                <div class="carousel-caption">
                    <p class="animated fadeInRight">
                        <?php echo htmlspecialchars($item['subtitle']); ?>
                    </p>
                    <h1 class="animated fadeInLeft">
                        <?php echo htmlspecialchars($item['title']); ?>
                    </h1>
                    <!-- <a class="btn animated fadeInUp" href="/">Get A Quote</a> -->
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<!-- Carousel End -->

<!-- Feature Start-->
<div class="feature wow fadeInUp" data-wow-delay="0.1s">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-4 col-md-12">
                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="flaticon-worker"></i>
                    </div>
                    <div class="feature-text">
                        <h3>Experiencia</h3>
                        <p>Más de 15 años ofreciendo servicios de impresión</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="flaticon-measure"></i>
                    </div>
                    <div class="feature-text">
                        <h3>Calidad</h3>
                        <p>Impresión y diseño con atención personalizada</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="flaticon-call"></i>
                    </div>
                    <div class="feature-text">
                        <h3>Soporte</h3>
                        <p>Contactanos a través de las redes</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Feature End-->

<!-- Service Start -->
<div class="service">
    <div class="container">
        <div class="section-header text-center">
            <p>Nuestros Servicios</p>
            <h2>Servicios que ofrecemos</h2>
        </div>
        <div class="row">
            <?php foreach ($services as $index => $item): ?>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="<?php echo 0.1 * ($index + 1); ?>s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="<?php echo getImageUrl($item['image_path']); ?>"
                                alt="<?php echo htmlspecialchars($item['title']); ?>"
                                style="width: 100%; height: 250px; object-fit: cover;">
                            <div class="service-overlay">
                                <p>
                                    <?php echo htmlspecialchars($item['description']); ?>
                                </p>
                            </div>
                        </div>
                        <div class="service-text">
                            <h3>
                                <?php echo htmlspecialchars($item['title']); ?>
                            </h3>
                            <a class="btn" href="<?php echo getImageUrl($item['image_path']); ?>"
                                data-lightbox="service">+</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<!-- Service End -->

<!-- Fact Start -->
<div class="fact">
    <div class="container-fluid">
        <div class="row counters">
            <div class="col-md-6 fact-left wow slideInLeft">
                <div class="row">
                    <div class="col-6">
                        <div class="fact-icon">
                            <i class="flaticon-calendar"></i>
                        </div>
                        <div class="fact-text">
                            <h2> <span data-toggle="counter-up">15</span></h2>
                            <p>Años en el Mercado</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="fact-icon">
                            <i class="flaticon-building"></i>
                        </div>
                        <div class="fact-text">
                            <h2><span data-toggle="counter-up">100</span>%</h2>
                            <p>En Satisfacción</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 fact-right wow slideInRight">
                <div class="row">
                    <div class="col-6">
                        <div class="fact-icon">
                            <i class="flaticon-measure"></i>
                        </div>
                        <div class="fact-text">
                            <h2>+<span data-toggle="counter-up">100</span></h2>
                            <p>Proyectos completados</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="fact-icon">
                            <i class="flaticon-worker"></i>
                        </div>
                        <div class="fact-text">
                            <h2>+<span data-toggle="counter-up">10</span></h2>

                            <p>Diferentes Servicios</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Fact End -->

<!-- Video Start -->
<div class="video wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <button type="button" class="btn-play" data-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc"
            data-target="#videoModal">
            <span></span>
        </button>
    </div>
</div>

<!-- Blog Start -->
<div class="blog">
    <div class="container">
        <div class="section-header text-center">
            <p>Posts</p>
            <h2>Ultimos Posts</h2>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="https://placehold.co/400x250" alt="Image">
                    </div>
                    <div class="blog-title">
                        <h3>Lorem ipsum dolor sit</h3>
                        <a class="btn" href="">+</a>
                    </div>

                    <div class="blog-text">
                        <p>
                            Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit
                            non vulputate. Aliquam metus tortor
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp">
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="https://placehold.co/400x250" alt="Image">
                    </div>
                    <div class="blog-title">
                        <h3>Lorem ipsum dolor sit</h3>
                        <a class="btn" href="">+</a>
                    </div>

                    <div class="blog-text">
                        <p>
                            Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit
                            non vulputate. Aliquam metus tortor
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="https://placehold.co/400x250" alt="Image">
                    </div>
                    <div class="blog-title">
                        <h3>Lorem ipsum dolor sit</h3>
                        <a class="btn" href="">+</a>
                    </div>

                    <div class="blog-text">
                        <p>
                            Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit
                            non vulputate. Aliquam metus tortor
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog End -->

<div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <!-- 16:9 aspect ratio -->
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="" id="video" allowscriptaccess="always"
                        allow="autoplay"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Video End -->

<!-- FAQs Start -->
<div class="faqs">
    <div class="container">
        <div class="section-header text-center">
            <p>Preguntas y Respuestas</p>
            <h2>Preguntas Frequentes</h2>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div id="accordion-1">
                    <div class="card wow fadeInLeft" data-wow-delay="0.1s">
                        <div class="card-header">
                            <a class="card-link collapsed" data-toggle="collapse" href="#collapseOne">
                                Lorem ipsum dolor sit amet?
                            </a>
                        </div>
                        <div id="collapseOne" class="collapse" data-parent="#accordion-1">
                            <div class="card-body">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi.
                                Curabitur facilisis ornare velit non.
                            </div>
                        </div>
                    </div>
                    <div class="card wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="card-header">
                            <a class="card-link collapsed" data-toggle="collapse" href="#collapseTwo">
                                Lorem ipsum dolor sit amet?
                            </a>
                        </div>
                        <div id="collapseTwo" class="collapse" data-parent="#accordion-1">
                            <div class="card-body">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi.
                                Curabitur facilisis ornare velit non.
                            </div>
                        </div>
                    </div>
                    <div class="card wow fadeInLeft" data-wow-delay="0.3s">
                        <div class="card-header">
                            <a class="card-link collapsed" data-toggle="collapse" href="#collapseThree">
                                Lorem ipsum dolor sit amet?
                            </a>
                        </div>
                        <div id="collapseThree" class="collapse" data-parent="#accordion-1">
                            <div class="card-body">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi.
                                Curabitur facilisis ornare velit non.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div id="accordion-2">
                    <div class="card wow fadeInRight" data-wow-delay="0.1s">
                        <div class="card-header">
                            <a class="card-link collapsed" data-toggle="collapse" href="#collapseSix">
                                Lorem ipsum dolor sit amet?
                            </a>
                        </div>
                        <div id="collapseSix" class="collapse" data-parent="#accordion-2">
                            <div class="card-body">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi.
                                Curabitur facilisis ornare velit non.
                            </div>
                        </div>
                    </div>
                    <div class="card wow fadeInRight" data-wow-delay="0.2s">
                        <div class="card-header">
                            <a class="card-link collapsed" data-toggle="collapse" href="#collapseSeven">
                                Lorem ipsum dolor sit amet?
                            </a>
                        </div>
                        <div id="collapseSeven" class="collapse" data-parent="#accordion-2">
                            <div class="card-body">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi.
                                Curabitur facilisis ornare velit non.
                            </div>
                        </div>
                    </div>
                    <div class="card wow fadeInRight" data-wow-delay="0.3s">
                        <div class="card-header">
                            <a class="card-link collapsed" data-toggle="collapse" href="#collapseEight">
                                Lorem ipsum dolor sit amet?
                            </a>
                        </div>
                        <div id="collapseEight" class="collapse" data-parent="#accordion-2">
                            <div class="card-body">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi.
                                Curabitur facilisis ornare velit non.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- FAQs End -->