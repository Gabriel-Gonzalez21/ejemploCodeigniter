<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');


/*Para el test de Boostrap*/
$routes->get('/test', fn() => view('test'));

/*Ruta de admin*/
$routes->get('/admin', function () {
    return view('dashboard');
});


/*Ruta de candidatos*/
$routes->get('/candidatos', 'Candidatos::index');

/*Rutas de ofertas*/
$routes->get('/ofertas', 'Ofertas::index');

/*Ruta de empresas*/
$routes->get('/empresas', 'Empresas::index');

