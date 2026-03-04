<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

    <!-- Sidebar Toggle (Topbar, Botón para abrir/cerrar el sidebar en móviles) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>

    <!-- Topbar Search (Buscador superior) -->
    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 navbar-search">
        <div class="input-group">
            <input type="text" class="form-control bg-light border-0 small" placeholder="Buscar..."
                aria-label="Search" aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                    <i class="fas fa-search fa-sm"></i>
                </button>
            </div>
        </div>
    </form>

    <!-- Topbar Navbar -->
    <ul class="navbar-nav ms-auto">

        <?php if (!session()->get('isLoggedIn')): ?>

            <!-- Mostrar solo cuando NO hay sesión -->
            <li class="nav-item">
                <a class="nav-link" href="/login">
                    <i class="fas fa-sign-in-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Iniciar sesión
                </a>
            </li>

        <?php else: ?>

            <!-- Mostrar solo cuando SÍ hay sesión -->
            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                    <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                        <?= session()->get('usuario_nombre') ?>
                    </span>

                    <img class="img-profile rounded-circle"
                        src="/assets/sbadmin2/img/undraw_profile.svg">
                </a>

                <div class="dropdown-menu dropdown-menu-end shadow animated--grow-in"
                    aria-labelledby="userDropdown">

                    <a class="dropdown-item" href="/<?= session()->get('usuario_rol') ?>/perfil">
                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                        Perfil
                    </a>

                    <a class="dropdown-item" href="/<?= session()->get('usuario_rol') ?>/configuracion">
                        <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                        Configuración
                    </a>

                    <div class="dropdown-divider"></div>

                    <a class="dropdown-item text-danger" href="/logout">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                        Cerrar sesión
                    </a>
                </div>
            </li>

        <?php endif; ?>

    </ul>


</nav>