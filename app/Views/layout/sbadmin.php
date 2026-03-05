<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Panel de Administración' ?></title>

    <!-- SB Admin 2 CSS -->
    <link href="/assets/sbadmin2/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="/assets/sbadmin2/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- CSS personalizado -->
    <link href="/assets/css/style.css" rel="stylesheet">

    <!-- JavaScript -->
    <script src="/assets/js/sidebar.js" defer></script>
    
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?= $this->include('layout/sidebar') ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?= $this->include('layout/topbar') ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <?= $this->renderSection('content') ?>
                </div>
                <!-- End Page Content -->

            </div>
            <!-- End Main Content -->

            <!-- Footer -->
            <?= $this->include('layout/footer') ?>
            <!-- End Footer -->

        </div>
        <!-- End Content Wrapper -->

    </div>
    <!-- End Page Wrapper -->
    
    <!-- SB Admin 2 Scripts -->
    <script src="/assets/sbadmin2/vendor/jquery/jquery.min.js"></script>
    <script src="/assets/sbadmin2/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/sbadmin2/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="/assets/sbadmin2/js/sb-admin-2.min.js"></script>

</body>

</html>
