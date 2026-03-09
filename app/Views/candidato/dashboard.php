<?= $this->extend('layout/candidato') ?>

<?= $this->section('content') ?>

<h1>Area de Candidato</h1>

<h2>Bienvenido, <?= session()->get('usuario_nombre') ?></h2>


<?= $this->endSection() ?>
