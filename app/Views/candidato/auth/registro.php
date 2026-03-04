<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Candidato</title>
    <link rel="stylesheet" href="/css/registro.css">
</head>

<body>
    <div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card shadow">
                <div class="card-header text-center">
                    <h4>Registro de Candidato</h4>
                </div>

                <div class="card-body">

                    <?php if(session()->getFlashdata('error')): ?>
                        <div class="alert alert-danger">
                            <?= session()->getFlashdata('error') ?>
                        </div>
                    <?php endif; ?>

                    <form action="/candidato/registro" method="post">
                        <?= csrf_field() ?>

                        <div class="mb-3">
                            <label>Nombre</label>
                            <input type="text" name="nombre" class="form-control" value="<?= old('nombre') ?>">
                        </div>

                        <div class="mb-3">
                            <label>Apellidos</label>
                            <input type="text" name="apellidos" class="form-control" value="<?= old('apellidos') ?>">
                        </div>

                        <div class="mb-3">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" value="<?= old('email') ?>">
                        </div>

                        <div class="mb-3">
                            <label>DNI/NIE</label>
                            <input type="text" name="dni" class="form-control" value="<?= old('dni') ?>">
                        </div>

                        <div class="mb-3">
                            <label>Fecha de nacimiento</label>
                            <input type="date" name="fecha_nacimiento" class="form-control" value="<?= old('fecha_nacimiento') ?>">
                        </div>

                        <div class="mb-3">
                            <label>Contraseña</label>
                            <input type="password" name="password" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label>Repetir contraseña</label>
                            <input type="password" name="password2" class="form-control">
                        </div>

                        <button type="submit" class="btn btn-primary w-100">Registrarse</button>

                    </form>

                    <div class="text-center mt-3">
                        <a href="/login">¿Ya tienes cuenta? Inicia sesión</a>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
</body>


</html>





