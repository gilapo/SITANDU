<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title><?= $judul; ?></title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="<?= base_url(); ?>/assets/img/umy.jpg" type="image/x-icon" />


    <!-- Fonts and icons -->
    <script src="<?= base_url(); ?>/assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
        WebFont.load({
            google: {
                "families": ["Lato:300,400,700,900"]
            },
            custom: {
                "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"],
                urls: ['<?= base_url(); ?>/assets/css/fonts.min.css']
            },
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/atlantis.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/mine.css">
    <link href="<?= base_url(); ?>/assets/css/all.css" rel="stylesheet">
    <style>
        html,
        .bg-image-login {
            background-image: url("<?= base_url(); ?>/assets/img/national-cancer-institute-NFvdKIhxYlU-unsplash.jpg");
            background-size: cover;
            background-position: center;
        }

        .bg-image-register {
            background-image: url("<?= base_url(); ?>/assets/img/rusty-watson-yIGinlYA6t8-unsplash.jpg");
            background-size: cover;
            background-position: center;
        }
    </style>
</head>

<body>
    <!-- End Logo Header -->
    <!-- content -->

    <?= $this->renderSection('content'); ?>

    <!--   Core JS Files   -->
    <script src="<?= base_url(); ?>/assets/js/core/jquery.3.2.1.min.js"></script>
    <script src="<?= base_url(); ?>/assets/js/core/popper.min.js"></script>
    <script src="<?= base_url(); ?>/assets/js/core/bootstrap.min.js"></script>

    <!-- jQuery UI -->
    <script src="<?= base_url(); ?>/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
    <script src="<?= base_url(); ?>/assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

    <!-- jQuery Scrollbar -->
    <script src="<?= base_url(); ?>/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>


    <!-- Chart JS -->
    <script src="<?= base_url(); ?>/assets/js/plugin/chart.js/chart.min.js"></script>

    <!-- jQuery Sparkline -->
    <script src="<?= base_url(); ?>/assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

    <!-- Chart Circle -->
    <script src="<?= base_url(); ?>/assets/js/plugin/chart-circle/circles.min.js"></script>

    <!-- Datatables -->
    <script src="<?= base_url(); ?>/assets/js/plugin/datatables/datatables.min.js"></script>

    <!-- Bootstrap Notify -->
    <script src="<?= base_url(); ?>/assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

    <!-- jQuery Vector Maps -->
    <script src="<?= base_url(); ?>/assets/js/plugin/jqvmap/jquery.vmap.min.js"></script>
    <script src="<?= base_url(); ?>/assets/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

    <!-- Sweet Alert -->
    <script src="<?= base_url(); ?>/assets/js/plugin/sweetalert/sweetalert.min.js"></script>

    <!-- Atlantis JS -->
    <script src="<?= base_url(); ?>/assets/js/atlantis.min.js"></script>


</body>

</html>