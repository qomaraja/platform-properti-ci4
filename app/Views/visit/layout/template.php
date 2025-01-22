<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title><?= $title; ?></title>
    <meta name="description" content="<?= $mtDesk; ?>" />
    <meta name="keywords" content="<?= $mtKey; ?>" />

    <!-- Facebook -->
    <meta property="og:url" content="<?= $mtUrl; ?>" />
    <meta property="og:title" content="<?= $title; ?>" />
    <meta property="og:image" content="<?= $mtImg; ?>" />
    <meta property="og:description" content="<?= $mtDesk; ?>" />

    <!-- Twitter -->
    <meta name="twitter:title" content="<?= $title; ?>">
    <meta name="twitter:description" content="<?= $mtDesk; ?>">
    <meta name="twitter:image" content="<?= $mtImg; ?>">
    <meta name="twitter:url" content="<?= $mtUrl; ?>">

    <base href="<?= base_url(); ?>">

    <!-- Favicons -->
    <link href="visit/img/ini-properti.png" rel="icon" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="visit/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="visit/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
    <link href="visit/vendor/aos/aos.css" rel="stylesheet" />
    <link href="visit/vendor/owlcarousel/dist/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="visit/vendor/owlcarousel/dist/assets/owl.theme.default.css" rel="stylesheet">

    <!-- CSS untuk Datepicker -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">

    <!-- Main CSS File -->
    <link href="visit/css/style.css" rel="stylesheet" />
</head>

<body class="<?= isset($isIndexPage) && $isIndexPage ? 'index-page' : '' ?>">
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container position-relative d-flex align-items-center justify-content-between">
            <a href="" class="logo d-flex align-items-center me-auto me-xl-0">
                <img src="visit/img/ini-properti.png" alt="">
                <h1 class="sitename"><span class="text-primary">Ini</span>Properti</h1>
                <span>.</span>
            </a>
            <div class="position-relative d-flex align-items-center justify-content-end">
                <nav id="navmenu" class="navmenu">
                    <ul>
                        <li><a href="" class="<?= ($active == 'beranda') ? 'active' : ''; ?>">Beranda</a></li>
                        <li><a href="properti" class="<?= ($active == 'properti') ? 'active' : ''; ?>">Properti</a></li>
                        <li><a href="toko" class="<?= ($active == 'toko') ? 'active' : ''; ?>">Toko</a></li>
                    </ul>
                    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
                </nav>
            </div>
        </div>
    </header>

    <?= $this->renderSection('content'); ?>

    <footer id="footer" class="footer position-relative dark-background">
        <div class="container footer-top">
            <div class="row">
                <div class="col-lg-3 footer-about">
                    <a href="index.html" class="logo d-flex align-items-center">
                        <img src="visit/img/ini-properti.png" alt="ini-properti.png">
                        <span class="sitename"><span class="text-primary">Ini</span>Properti<span class="text-primary">.</span></span>
                    </a>
                </div>
                <div class="col-lg-2 contact">
                    <p><strong>Alamat:</strong> <span>Semarang, Jawa Tengah</span></p>
                </div>
                <div class="col-lg-2 contact">
                    <p><strong>Phone:</strong><br><span>+62 857-4010-3818</span></p>
                </div>
                <div class="col-lg-2 contact">
                    <p><strong>Email:</strong><br><span>iniproperti1@gmail.com</span></p>
                </div>
                <div class="col-lg-3">
                    <div class="social-links d-flex">
                        <a href="https://web.facebook.com/profile.php?id=61567128846133" target="_blank"><i class="bi bi-facebook"></i></a>
                        <a href="https://www.instagram.com/ini.properti1/" target="_blank"><i class="bi bi-instagram"></i></a>
                        <a href="https://www.tiktok.com/@ini.properti1" target="_blank"><i class="bi bi-tiktok"></i></a>
                        <a href="https://www.youtube.com/@Ini.properti1" target="_blank"><i class="bi bi-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="copyright text-center mt-3">
            <p>© <span>Copyright</span> <strong class="sitename">IniProperti 2024.</strong></p>
        </div>
    </footer>

    <a href="https://wa.me/6285740103818?text=Halo!%20saya%20ingin%20bertanya%20terkait%20properti%20Anda"
        target="_blank"
        id="whatsapp"
        class="whatsapp d-flex align-items-center justify-content-center">
        <i class="fab fa-whatsapp"></i>
    </a>

    <a
        href="#"
        id="scroll-top"
        class="scroll-top d-flex align-items-center justify-content-center">
        <i class="bi bi-arrow-up-short"></i>
    </a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Vendor JS Files -->
    <script src="visit/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="visit/vendor/aos/aos.js"></script>
    <script src="visit/vendor/owlcarousel/dist/owl.carousel.min.js"></script>

    <!-- JS untuk Datepicker -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>

    <!-- Main JS File -->
    <script src="visit/js/main.js"></script>
</body>

</html>