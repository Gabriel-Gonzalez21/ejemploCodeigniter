<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Página pública
$routes->get('/', 'Home::sbadmin');

// Test (pública)
$routes->get('/test', fn() => view('test'));

// Rutas de login (públicas)
$routes->get('/login', 'Auth::login');
$routes->post('/login', 'Auth::doLogin');
$routes->get('/logout', 'Auth::logout');

//Registro de candidatos (público)
$routes->get('candidato/auth/registro', 'Candidato\Registro::registro');
$routes->post('candidato/auth/registro', 'Candidato\Registro::procesarRegistro');


//Ruta publica de candidatos
$routes->get('/candidato', 'Candidato\Dashboard::index');

//Ruta publica de empresas
$routes->get('/empresa', 'Empresa\Dashboard::index');

//Rutas públicas para admin
$routes->get('/admin', 'Admin\Dashboard::index');
$routes->get('/admin/dashboard', 'Admin\Dashboard::index');

//Ruta pública para ofertas
$routes->get('/ofertas', 'Ofertas\Listado::index');


// Rutas privadas (requieren login) 
$routes->group('', ['filter' => 'auth'], function($routes) {

    //*********************************ADMIN*********************************************
    // $routes->group('admin', ['filter' => 'role:admin'], function($routes){
    //     $routes->get('/', 'Admin\Dashboard::index');
    // });

    //*******************************CANDIDATO********************************************
    //$routes->group('candidato', ['filter' => 'role:candidato'], function($routes){
        $routes->get('/', 'Candidato\Dashboard::index');
        
        /*Rutas de registro para candidatos (públicas, pero dentro del grupo admin para mantener orden) */
        $routes->get('candidato/registro', 'Candidato\Registro::registro');
        $routes->post('candidato/registro', 'Candidato\Registro::procesarRegistro');
    //});

    //*******************************EMPRESA********************************************
    $routes->group('empresa', ['filter' => 'role:empresa'], function($routes){
        $routes->get('/', 'Empresa\Dashboard::index');
    });

    //*******************************OFERTAS (si solo admin puede verlas)*********************
    $routes->group('ofertas', ['filter' => 'role:admin'], function($routes){
        $routes->get('/', 'Ofertas\Listado::index');
    });

});





