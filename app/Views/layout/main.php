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

    <!-- Contenido dinámico -->
    <?= $this->renderSection('content') ?>

    <!-- jQuery (local) -->
    <script src="/assets/jquery/jquery-4.0.0.min.js"></script>

    <!-- Bootstrap JS (local) -->
    <script src="/assets/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Scripts personalizados -->
    <script src="/assets/js/app.js"></script>

</body>
</html>
