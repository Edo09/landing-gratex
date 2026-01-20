<?php
header('Content-Type: text/html; charset=UTF-8');

$request = $_SERVER['REQUEST_URI'];

$viewDir = 'src/pages/';

// Determine which page to load
switch ($request) {
    case '':
    case '/':
        $page = 'home.php';
        break;

    case '/blog':
        $page = 'blog.php';
        break;

    case '/contact':
        $page = 'contact.php';
        break;

    default:
        http_response_code(404);
        $page = '404.php';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Gratex - Taller de Impresión</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Construction Company Website Template" name="keywords">
    <meta content="Construction Company Website Template" name="description">

    <!-- Favicon -->
    <link href="public/favicon.ico" rel="icon">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="public/lib/flaticon/font/flaticon.css" rel="stylesheet">
    <link href="public/lib/animate/animate.min.css" rel="stylesheet">
    <link href="public/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="public/lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="public/lib/slick/slick.css" rel="stylesheet">
    <link href="public/lib/slick/slick-theme.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="public/css/style.css" rel="stylesheet">

</head>

</head>

<body>
    <div class="wrapper">
        <?php
            include_once './src/php-helpers/landing-data.php';
            include_once './src/layout/header.php';
            require __DIR__ . '/' . $viewDir . $page;
            include_once './src/layout/footer.php';
        ?>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="public/lib/easing/easing.min.js"></script>
    <script src="public/lib/wow/wow.min.js"></script>
    <script src="public/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="public/lib/isotope/isotope.pkgd.min.js"></script>
    <script src="public/lib/lightbox/js/lightbox.min.js"></script>
    <script src="public/lib/waypoints/waypoints.min.js"></script>
    <script src="public/lib/counterup/counterup.min.js"></script>
    <script src="public/lib/slick/slick.min.js"></script>

    <!-- Template Javascript -->
    <script src="public/js/main.js"></script>
    <script src="public/js/login.js"></script>
</body>

</html>