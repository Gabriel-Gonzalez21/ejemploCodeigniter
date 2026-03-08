<?= $this->extend('layout/public') ?>
<?= $this->section('content') ?>



<h3 style="margin-top: 50px;">Registrarse como candidato o empresa</h3>

<!-- Boton de registro para candidato-->
<button class="btn btn-success" style="background-color: #1b98b9; border: none; margin-right: 20px;">
    <img src="/img/iconoCandidatos.png" alt="" class="iconoCandidatos">
    <a href="/candidato/auth/registro" class="text-white text-decoration-none">Candidato</a>
</button>

<!-- Boton de registro para empresa (no funcional por ahora)-->
<button class="btn btn-success" style="background-color: #1b98b9; border: none;">
    <img src="/img/iconoEmpresas.png" alt="" class="iconoCandidatos">
    <a href="/empresa/auth/registro" class="text-white text-decoration-none">Empresa</a>
</button>

<?= $this->endSection() ?>
