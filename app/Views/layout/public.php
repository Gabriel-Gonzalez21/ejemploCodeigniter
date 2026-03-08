<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Agencia de Colocación' ?></title>

    <!-- SB Admin 2 CSS (puedes mantenerlo sin problema) -->
    <link href="/assets/sbadmin2/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="/assets/sbadmin2/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- CSS personalizado -->
    <link href="/assets/css/style.css" rel="stylesheet">
</head>

<body>

    <!-- Navbar pública -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm mb-4">
        <div class="container">

            <a class="navbar-brand fw-bold" href="/">
                Agencia de Colocación
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarPublic">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarPublic">
                <ul class="navbar-nav ms-auto">

                    <li class="nav-item">
                        <a class="nav-link" href="/ofertas">Ofertas</a>
                    </li>

                    <li class="nav-item">
                        <a class="btn btn-outline-primary me-2" href="/login">Iniciar sesión</a>
                    </li>

                    <li class="nav-item">
                        <a class="btn btn-primary" href="/admin/dashboard">Registrarse</a>
                    </li>

                   

                </ul>
            </div>

        </div>
    </nav>

    <!-- Contenido principal -->
    <main class="container">
        <?= $this->renderSection('content') ?>
    </main>

    <!-- Footer público -->
    <footer class="text-center py-4 text-muted mt-5">
        © <?= date('Y') ?> Agencia de Colocación — Todos los derechos reservados
    </footer>

    <!-- Scripts necesarios -->
    <script src="/assets/sbadmin2/vendor/jquery/jquery.min.js"></script>
    <script src="/assets/sbadmin2/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>
