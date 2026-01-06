<!-- Modern Header Start -->
<header class="main-header">
    <div class="header-container">
        <!-- Logo -->
        <div class="header-logo">
            <a href="/">
                <img src="https://placehold.co/1200x320" alt="Gratex Logo">
            </a>
        </div>

        <!-- Navigation -->
        <nav class="header-nav" id="mainNav">
            <ul class="nav-menu">
                <li class="nav-menu-item">
                    <a href="/" class="nav-menu-link <?php echo ($_SERVER['REQUEST_URI'] === '/' ? 'active' : ''); ?>">
                        <span class="link-text">Inicio</span>
                        <span class="link-indicator"></span>
                    </a>
                </li>
                <li class="nav-menu-item">
                    <a href="/blog" class="nav-menu-link <?php echo ($_SERVER['REQUEST_URI'] === '/blog' ? 'active' : ''); ?>">
                        <span class="link-text">Servicios</span>
                        <span class="link-indicator"></span>
                    </a>
                </li>
                <li class="nav-menu-item">
                    <a href="/contact" class="nav-menu-link <?php echo ($_SERVER['REQUEST_URI'] === '/contact' ? 'active' : ''); ?>">
                        <span class="link-text">Contacto</span>
                        <span class="link-indicator"></span>
                    </a>
                </li>
            </ul>
        </nav>

        <!-- Contact Info & CTA -->
        <div class="header-actions">
            <div class="header-contact-items">
                <div class="header-contact-item">
                    <div class="contact-icon">
                        <i class="flaticon-calendar"></i>
                    </div>
                    <div class="contact-info">
                        <span class="contact-label">Horario de Apertura</span>
                        <span class="contact-value">Lun - Vie, 8:00 - 6:00</span>
                    </div>
                </div>
                <div class="header-contact-item">
                    <a href="tel:+18095389203" class="contact-link">
                        <div class="contact-icon">
                            <i class="flaticon-call"></i>
                        </div>
                        <div class="contact-info">
                            <span class="contact-label">Ll&aacute;manos</span>
                            <span class="contact-value">(809) 538 9203</span>
                        </div>
                    </a>
                </div>
                <div class="header-contact-item">
                    <a href="mailto:gratexrd@gmail.com" class="contact-link">
                        <div class="contact-icon">
                            <i class="flaticon-send-mail"></i>
                        </div>
                        <div class="contact-info">
                            <span class="contact-label">Email</span>
                            <span class="contact-value">gratexrd@gmail.com</span>
                        </div>
                    </a>
                </div>
            </div>
            <a href="/" class="header-cta-btn">Iniciar Sesi&oacute;n</a>
        </div>

        <!-- Mobile Menu Toggle -->
        <button class="mobile-menu-toggle" id="mobileMenuToggle" aria-label="Toggle menu">
            <span class="hamburger-line"></span>
            <span class="hamburger-line"></span>
            <span class="hamburger-line"></span>
        </button>
    </div>

    <!-- Mobile Menu -->
    <div class="mobile-menu" id="mobileMenu">
        <ul class="mobile-nav-menu">
            <li><a href="/" class="<?php echo ($_SERVER['REQUEST_URI'] === '/' ? 'active' : ''); ?>">Inicio</a></li>
            <li><a href="/blog" class="<?php echo ($_SERVER['REQUEST_URI'] === '/blog' ? 'active' : ''); ?>">Servicios</a></li>
            <li><a href="/contact" class="<?php echo ($_SERVER['REQUEST_URI'] === '/contact' ? 'active' : ''); ?>">Contacto</a></li>
        </ul>
        <div class="mobile-contact-info">
            <a href="tel:+18095389203"><i class="flaticon-call"></i> (809) 538 9203</a>
            <a href="mailto:gratexrd@gmail.com"><i class="flaticon-send-mail"></i> gratexrd@gmail.com</a>
        </div>
        <a href="/" class="mobile-cta-btn">Iniciar Sesi&oacute;n</a>
    </div>
</header>
<!-- Modern Header End -->