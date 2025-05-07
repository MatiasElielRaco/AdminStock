<?php 

require_once __DIR__ . '/../includes/app.php';

use MVC\Router;
use Controllers\AuthController;
use Controllers\CategoriasController;
use Controllers\DashboardController;
use Controllers\PaginasController;
use Controllers\ProductosController;

$router = new Router();


// Login
$router->get('/login', [AuthController::class, 'login']);
$router->post('/login', [AuthController::class, 'login']);
$router->post('/logout', [AuthController::class, 'logout']);

// Crear Cuenta
$router->get('/registro', [AuthController::class, 'registro']);
$router->post('/registro', [AuthController::class, 'registro']);

// Formulario de olvide mi password
$router->get('/olvide', [AuthController::class, 'olvide']);
$router->post('/olvide', [AuthController::class, 'olvide']);

// Colocar el nuevo password
$router->get('/reestablecer', [AuthController::class, 'reestablecer']);
$router->post('/reestablecer', [AuthController::class, 'reestablecer']);

// Confirmación de Cuenta
$router->get('/mensaje', [AuthController::class, 'mensaje']);
$router->get('/confirmar-cuenta', [AuthController::class, 'confirmar']);

// Área Pública
$router->get('/', [PaginasController::class, 'index']);

// Páginas Dashboard
$router->get('/dashboard', [DashboardController::class, 'index']);
$router->get('/dashboard/producto', [ProductosController::class, 'productos']);
$router->post('/dashboard/producto', [ProductosController::class, 'productos']);
$router->get('/dashboard/categoria', [CategoriasController::class, 'categorias']);
$router->post('/dashboard/categoria', [CategoriasController::class, 'categorias']);

// Pagina de error
$router->get('/404', [PaginasController::class, 'error']);

$router->comprobarRutas();