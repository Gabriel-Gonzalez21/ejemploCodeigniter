<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Página pública
$routes->get('/', 'Home::index');

// Test (pública)
$routes->get('/test', fn() => view('test'));

// Rutas de login (públicas)
$routes->get('/login', 'Auth::login');
$routes->post('/login', 'Auth::doLogin');
$routes->get('/logout', 'Auth::logout');

// Rutas privadas (requieren login)
$routes->group('', ['filter' => 'auth'], function($routes) {

    // ADMIN
    $routes->group('admin', ['filter' => 'role:admin'], function($routes){
        $routes->get('/', 'Admin\Dashboard::index');
    });

    // CANDIDATO
    $routes->group('candidato', ['filter' => 'role:candidato'], function($routes){
        $routes->get('/', 'Candidato\Dashboard::index');
    });

    // EMPRESA
    $routes->group('empresa', ['filter' => 'role:empresa'], function($routes){
        $routes->get('/', 'Empresa\Dashboard::index');
    });

    // OFERTAS (si solo admin puede verlas)
    $routes->group('ofertas', ['filter' => 'role:admin'], function($routes){
        $routes->get('/', 'Ofertas\Listado::index');
    });

});

