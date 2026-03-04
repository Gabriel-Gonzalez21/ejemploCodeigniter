<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Agencia de Colocación' ?></title>

    <!-- Bootstrap CSS (local) -->
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">

    <!-- Estilos personalizados -->
    <link rel="stylesheet" href="/assets/css/style.css">
</head>

<body>

    <!-- Barra de navegación pública -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
        <div class="container">

            <a class="navbar-brand" href="/">Agencia de Colocación</a>
            <img src="/public/img/logoAbire.png" alt="Logo de la agencia" class="logo">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">

                    <?php if (!session()->get('isLoggedIn')): ?>
                        <!-- Usuario NO logueado -->
                        <li class="nav-item">
                            <a class="nav-link" href="/login">Iniciar sesión</a>
                        </li>

                    <?php else: ?>
                        <!-- Usuario logueado -->
                        <li class="nav-item">
                            <span class="nav-link">
                                Hola, <?= session()->get('usuario_nombre') ?>
                            </span>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-danger" href="/logout">Cerrar sesión</a>
                        </li>
                    <?php endif; ?>

                </ul>
            </div>

        </div>
    </nav>

    <!-- Contenido dinámico -->
    <div class="container">
        <?= $this->renderSection('content') ?>
    </div>

    <!-- jQuery (local) -->
    <script src="/assets/jquery/jquery-4.0.0.min.js"></script>

    <!-- Bootstrap JS (local) -->
    <script src="/assets/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Scripts personalizados -->
    <script src="/assets/js/app.js"></script>



    <?= $this->include('layout/footer') ?>

</body>
</html>
