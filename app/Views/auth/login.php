<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="/css/login.css">
</head>

<body>

    <?php if (session()->getFlashdata('error')): ?>
        <p style="color:white;"><?= session()->getFlashdata('error') ?></p>
    <?php endif; ?>
    
    <div>
        <img src="/img/logoAbire.png" alt="logoAbire" class="logo">
        <form action="/login" method="post">
            <input type="text" placeholder="Email" name="email" required><br>

            <input type="password" placeholder="Contraseña" name="password" required><br>

            <button type="submit">Entrar</button><br>

            <b>¿No tienes cuenta? <a href="/admin/dashboard">Regístrate aquí</a></b>
        </form>
    </div>
</body>
</html>
