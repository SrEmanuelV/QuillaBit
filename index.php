<?php
    ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
/**
 * Punto de Entrada Único (Front Controller) - QuillaBit
 */

// 1. Iniciar sesión de PHP (por si se necesita más adelante)
#session_start();

// 2. Cargar las configuraciones globales y base de datos
require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/config/Database.php';
require_once __DIR__ . '/config/Router.php';

// 3. Autocargador Inteligente (Autoloader) Sensible a Mayúsculas/Minúsculas
spl_autoload_register(function ($className) {
    // Normalizar barras de namespace
    $path = str_replace('\\', '/', $className);

    // Intentar cargar la ruta exacta
    $file = __DIR__ . '/' . $path . '.php';

    if (file_exists($file)) {
        require_once $file;
        return;
    }

    // Fallback: probar convirtiendo la primera carpeta a minúscula (ej: app/models/ContactModel.php)
    $fileLower = __DIR__ . '/' . lcfirst($path) . '.php';
    if (file_exists($fileLower)) {
        require_once $fileLower;
        return;
    }
});

// 4. Instanciar el Router y definir las rutas de la web
$router = new Router();

// --- RUTAS DE NAVEGACIÓN (VISTAS) ---
$router->get('/', __DIR__ . '/app/Views/index.php');
$router->get('contacto', __DIR__ . '/app/Views/index.php');
$router->get('sobre-nosotros', __DIR__ . '/app/Views/sobre-nosotros/index.php');
$router->get('servicios', __DIR__ . '/app/Views/servicios/index.php');
$router->get('proyectos', __DIR__ . '/app/Views/proyectos/index.php');
$router->get('politica-de-privacidad', __DIR__ . '/app/Views/politicas/index.php');
$router->get('terminos-y-condiciones', __DIR__ . '/app/Views/terminos/index.php');
$router->get('mision-y-vision', __DIR__ . '/app/Views/mision-vision/index.php');

// --- RUTAS DE ACCIÓN / PETICIONES AJAX ---
$router->post('contacto', ['app\Controllers\ContactController', 'enviar']);

// 5. Despachar la ruta actual
$router->dispatch();