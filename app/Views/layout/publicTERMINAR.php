<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $this->renderSection('title') ?> - Agencia de Colocación</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="/">Agencia de Colocación</a>

        <div>
            <a href="/login" class="btn btn-outline-primary me-2">Iniciar sesión</a>
            <a href="/candidato/registro" class="btn btn-primary">Registrarse</a>
        </div>
    </div>
</nav>

<div class="container mt-4">
    <?= $this->renderSection('content') ?>
</div>

<footer class="text-center mt-5 mb-3 text-muted">
    © <?= date('Y') ?> Agencia de Colocación
</footer>

</body>
</html>
