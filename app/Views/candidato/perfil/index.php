<?= $this->extend('layout/candidato') ?>
<?= $this->section('content') ?>

<h2>Mi Perfil</h2>

<div class="row mt-4">

    <div class="col-md-3">
        <img src="/uploads/candidatos/<?= $candidato['foto'] ?? 'default-user.png' ?>"
             class="img-fluid rounded-circle shadow">
    </div>

    <div class="col-md-9">
        <h4><?= $candidato['nombre'] ?></h4>
        <p><strong>Email:</strong> <?= $candidato['email'] ?></p>
        <p><strong>Teléfono:</strong> <?= $candidato['telefono'] ?></p>
        <p><strong>Dirección:</strong> <?= $candidato['direccion'] ?></p>
        <a href="/candidato/perfil/editar" class="btn btn-primary mt-3">Editar perfil</a>
    </div>

</div>

<?= $this->endSection() ?>
