<?= $this->extend('layout/sbadmin') ?>

<?= $this->section('content') ?>

<h1 class="h3 mb-4 text-gray-800">Candidatos</h1>

<div class="card shadow mb-4">
    <div class="card-body">
        <p>Vista inicial del módulo de candidatos.</p>
        <h1 class="h3 mb-4 text-gray-800">Hola, <?= session()->get('usuario_nombre') ?></h1>
    </div>
</div>

<?= $this->endSection() ?>