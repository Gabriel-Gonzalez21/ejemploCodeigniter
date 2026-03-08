<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Área del Candidato' ?></title>

    <!-- SB Admin 2 CSS -->
    <link href="/assets/sbadmin2/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="/assets/sbadmin2/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- CSS personalizado -->
    <link href="/assets/css/style.css" rel="stylesheet">
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar del candidato -->
        <ul class="navbar-nav sidebar " id="accordionSidebar" style="background-color: white;">

            <!-- Branding -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/candidato">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-user"></i>
                </div>
                <div class="sidebar-brand-text mx-3" style="color: grey;">Candidato</div>
            </a>

            <hr class="sidebar-divider">

            <!-- Menú -->
            <li class="nav-item">
                <a class="nav-link" href="/candidato">
                    <i class="fas fa-fw fa-home"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/candidato/perfil">
                    <i class="fas fa-fw fa-id-card"></i>
                    <span>Mi Perfil</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/candidato/curriculum">
                    <i class="fas fa-fw fa-file-alt"></i>
                    <span>Currículum</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/candidato/ofertas">
                    <i class="fas fa-fw fa-briefcase"></i>
                    <span>Ofertas</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/candidato/inscripciones">
                    <i class="fas fa-fw fa-list"></i>
                    <span>Mis Inscripciones</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/candidato/notificaciones">
                    <i class="fas fa-fw fa-bell"></i>
                    <span>Notificaciones</span>
                </a>
            </li>

            <hr class="sidebar-divider">

            <li class="nav-item">
                <a class="nav-link text-danger" href="/logout">
                    <i class="fas fa-fw fa-sign-out-alt"></i>
                    <span>Cerrar sesión</span>
                </a>
            </li>

        </ul>
        <!-- End Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 shadow">

                    <!-- Nombre del usuario -->
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown no-arrow">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                <?= session('usuario_nombre') ?>
                            </span>
                            <img class="img-profile rounded-circle"
                                 src="/assets/img/default-user.png" width="40">
                        </li>
                    </ul>

                </nav>
                <!-- End Topbar -->

                <!-- Page Content -->
                <div class="container-fluid">
                    <?= $this->renderSection('content') ?>
                </div>

            </div>
            <!-- End Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="text-center my-auto text-muted">
                        © <?= date('Y') ?> Agencia de Colocación
                    </div>
                </div>
            </footer>

        </div>
        <!-- End Content Wrapper -->

    </div>
    <!-- End Page Wrapper -->

    <!-- SB Admin Scripts -->
    <script src="/assets/sbadmin2/vendor/jquery/jquery.min.js"></script>
    <script src="/assets/sbadmin2/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/sbadmin2/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="/assets/sbadmin2/js/sb-admin-2.min.js"></script>

</body>

</html>
