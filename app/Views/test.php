<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>

<div class="container mt-5">
    <h1>Bootstrap funciona correctamente</h1>
    
    <a href="/ofertas">
        <button class="btn btn-success">
        Botón de prueba
        
        </button>
    </a>
</div>

    <li class="nav-item">
        <a class="nav-link" href="/empresa">
            <i class="fas fa-building"></i>
            <span>Empresas</span>
        </a>
    </li>


<?= $this->endSection() ?>


<!-- Archivo para probar que Bootstrap está funcionando correctamente -->