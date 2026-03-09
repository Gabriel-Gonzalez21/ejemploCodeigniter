<?= $this->extend('layout/candidato') ?>
<?= $this->section('content') ?>

<h2>Editar Perfil</h2>

<form action="/candidato/perfil/actualizar" method="post" enctype="multipart/form-data" class="mt-4">

    <div class="mb-3">
        <label>Nombre completo</label>
        <input type="text" name="nombre" class="form-control" value="<?= $candidato['nombre'] ?>">
    </div>

    <div class="mb-3">
        <label>Teléfono</label>
        <input type="text" name="telefono" class="form-control" value="<?= $candidato['telefono'] ?>">
    </div>

    <div class="mb-3">
        <label>Dirección</label>
        <input type="text" name="direccion" class="form-control" value="<?= $candidato['direccion'] ?>">
    </div>

    <div class="mb-3">
        <label>Foto de perfil</label>
        <input type="file" name="foto" class="form-control">
    </div>

    <div class="mb-3">
        <label>Privacidad</label>
        <select name="privacidad" class="form-control">
            <option value="publico" <?= $candidato['privacidad'] == 'publico' ? 'selected' : '' ?>>Público</option>
            <option value="privado" <?= $candidato['privacidad'] == 'privado' ? 'selected' : '' ?>>Privado</option>
        </select>
    </div>

    <button class="btn btn-success" style="margin-bottom: 100px;">Guardar cambios</button>
</form>

<?= $this->endSection() ?>
