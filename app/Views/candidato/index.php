<?= $this->extend('layout/sbadmin') ?>
<?= $this->section('content') ?>

<div class="container-fluid">

    <!-- Título -->
    <h1 class="h3 mb-4 text-gray-800">Candidatos</h1>

    <!-- Tarjetas de resumen -->
    <div class="row">

        <div class="col-md-3 mb-4">
            <div class="card shadow h-100 py-2">
                <div class="card-body">
                    <h6 class="text-primary">Total candidatos</h6>
                    <h3 class="font-weight-bold"><?= $totalCandidatos ?? 0 ?></h3>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-4">
            <div class="card shadow h-100 py-2">
                <div class="card-body">
                    <h6 class="text-success">CV completos</h6>
                    <h3 class="font-weight-bold"><?= $cvCompletos ?? 0 ?></h3>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-4">
            <div class="card shadow h-100 py-2">
                <div class="card-body">
                    <h6 class="text-info">Inscripciones activas</h6>
                    <h3 class="font-weight-bold"><?= $inscripcionesActivas ?? 0 ?></h3>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-4">
            <div class="card shadow h-100 py-2">
                <div class="card-body">
                    <h6 class="text-warning">Pendientes de validar</h6>
                    <h3 class="font-weight-bold"><?= $pendientes ?? 0 ?></h3>
                </div>
            </div>
        </div>

    </div>

    <!-- Tabla de candidatos -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h6 class="m-0 font-weight-bold text-primary">Listado de candidatos</h6>
            <a href="/candidato/crear" class="btn btn-primary btn-sm">Añadir candidato</a>
        </div>

        <div class="card-body">

            <?php if (isset($candidatos) && count($candidatos) > 0): ?>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="thead-light">
                            <tr>
                                <th>Nombre</th>
                                <th>Email</th>
                                <th>Fecha registro</th>
                                <th>Estado CV</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($candidatos as $c): ?>
                                <tr>
                                    <td><?= $c['nombre'] ?></td>
                                    <td><?= $c['email'] ?></td>
                                    <td><?= $c['fecha_registro'] ?></td>
                                    <td><?= $c['estado_cv'] ?></td>
                                    <td>
                                        <a href="/candidato/ver/<?= $c['id'] ?>" class="btn btn-sm btn-info">Ver</a>
                                        <a href="/candidato/editar/<?= $c['id'] ?>" class="btn btn-sm btn-warning">Editar</a>
                                        <a href="/candidato/eliminar/<?= $c['id'] ?>" class="btn btn-sm btn-danger">Eliminar</a>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            <?php else: ?>
                <p class="text-center text-muted">No hay candidatos registrados.</p>
            <?php endif; ?>

        </div>
    </div>

</div>

<?= $this->endSection() ?>
