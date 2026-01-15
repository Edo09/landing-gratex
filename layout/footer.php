<!-- Footer Start -->
<div class="footer wow fadeIn" data-wow-delay="0.3s">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-3">
                <div class="footer-logo">
                    <a href="/">
                        <img src="img/logos/logo-gratex-notext.png" alt="Gratex"
                            style="max-width: 100%; height: auto; display: block; width: 100%; max-width: 150px;">
                    </a>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="footer-contact">
                    <h2>Ubicación y Contacto</h2>
                    <p><i class="fa fa-map-marker-alt"></i>Calle José Nicolás Casimiro, #85, Ens. Espaillat</p>
                    <p><i class="fa fa-phone-alt"></i>(809) 538 9203</p>
                    <p><i class="fa fa-envelope"></i>gratexrd@gmail.com</p>
                    <div class="footer-social">
                        <a href=""><i class="fab fa-facebook-f"></i></a>
                        <a href=""><i class="fab fa-instagram"></i></a>
                        <a href=""><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
            </div>
            <!-- <div class="col-md-6 col-lg-3">
                            <div class="footer-link">
                                <h2>Services Areas</h2>
                                <a href="">Building Construction</a>
                                <a href="">House Renovation</a>
                                <a href="">Architecture Design</a>
                                <a href="">Interior Design</a>
                                <a href="">Painting</a>
                            </div>
                        </div> -->

            <div class="col-md-6 col-lg-3">
                <div class="newsletter">
                    <h2>Newsletter</h2>
                    <p>Suscribirse para recibir las últimas actualizaciones y noticias.
                    </p>
                    <div class="form">
                        <input class="form-control" placeholder="Email here">
                        <button class="btn">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container footer-menu">
        <div class="f-menu">
            <a href="#terms">Terms of use</a>
            <a href="#privacy">Privacy policy</a>
            <a href="#cookies">Cookies</a>
            <a href="#help">Help</a>
            <a href="#faqs">FQAs</a>
        </div>
    </div>
    <div class="container copyright">
        <div class="row">
            <div class="col-md-6">
                <p>&copy; <a href="#">Gratex</a>, Todos los derechos reservados.</p>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->

<!-- Social Media Sidebar Start -->
<div class="social-sidebar">
    <a href="https://instagram.com" title="Instagram" class="social-icon" style="background-color: #C13584;"><i
            class="fab fa-instagram"></i></a>
    <a href="https://wa.me" title="WhatsApp" class="social-icon" style="background-color: #25D366;"><i
            class="fab fa-whatsapp"></i></a>
    <a href="https://facebook.com" title="Facebook" class="social-icon" style="background-color: #1877f2;"><i
            class="fab fa-facebook-f"></i></a>
</div>
<!-- Social Media Sidebar End -->
<a href="#top" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

<!-- Login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header"
                style="background: linear-gradient(135deg, #00417a 0%, #0066cc 100%); color: white;">
                <h5 class="modal-title" id="loginModalLabel" style="color: white; font-weight: 600;">Iniciar Sesión</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                    style="color: white; opacity: 1;">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body p-4">
                <form id="loginForm">
                    <div id="login-alert" class="alert alert-danger" style="display:none;"></div>
                    <div class="form-group">
                        <label for="emailOrUsername" style="font-weight: 500; color: #343a40;">Usuario o Email</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-user"></i></span>
                            </div>
                            <input type="text" class="form-control" id="emailOrUsername" name="emailOrUsername" required
                                placeholder="Ingrese su usuario o email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password" style="font-weight: 500; color: #343a40;">Contraseña</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-lock"></i></span>
                            </div>
                            <input type="password" class="form-control" id="password" name="password" required
                                placeholder="Ingrese su contraseña">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block"
                        style="background: #00417a; border-color: #00417a; padding: 10px; font-weight: 600;">
                        <span id="login-btn-text">INGRESAR</span>
                        <span id="login-spinner" class="spinner-border spinner-border-sm" role="status"
                            aria-hidden="true" style="display: none;"></span>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>