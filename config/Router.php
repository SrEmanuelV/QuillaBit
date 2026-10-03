<?php
/**
 * Sistema de Enrutamiento Centralizado - QuillaBit
 */

class Router {
    private $routes = [];

    public function get($path, $handler) {
        $this->routes['GET'][$this->formatPath($path)] = $handler;
    }

    public function post($path, $handler) {
        $this->routes['POST'][$this->formatPath($path)] = $handler;
    }

    /**
     * Normaliza cualquier formato de ruta (/contacto, contacto/, /contacto/) a 'contacto'
     */
    private function formatPath($path) {
        $path = trim(parse_url($path, PHP_URL_PATH), '/');
        return $path === '' ? '/' : $path;
    }

    public function dispatch() {
        $method = $_SERVER['REQUEST_METHOD'] ?? 'GET';

        // Capturar la URL desde $_GET['url'] o desde $_SERVER['REQUEST_URI']
        if (isset($_GET['url']) && !empty($_GET['url'])) {
            $rawUrl = $_GET['url'];
        } else {
            $rawUrl = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
            
            // Si el proyecto esta en una subcarpeta, limpia el prefijo
            $scriptDir = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME']));
            if ($scriptDir !== '/' && $scriptDir !== '\\' && !empty($scriptDir) && strpos($rawUrl, $scriptDir) === 0) {
                $rawUrl = substr($rawUrl, strlen($scriptDir));
            }
        }

        $url = $this->formatPath($rawUrl);

        // Verificar si la ruta existe en el mapa de rutas
        if (isset($this->routes[$method][$url])) {
            $handler = $this->routes[$method][$url];

            // Si el handler es una vista (.php)
            if (is_string($handler) && file_exists($handler)) {
                require_once $handler;
                exit;
            }

            // Si es un Callback o arreglo [Controlador, Método]
            if (is_callable($handler)) {
                call_user_func($handler);
                exit;
            }

            if (is_array($handler)) {
                $controllerName = $handler[0];
                $methodName = $handler[1];

                if (class_exists($controllerName)) {
                    $controller = new $controllerName();
                    if (method_exists($controller, $methodName)) {
                        $controller->$methodName();
                        exit;
                    }
                }
            }
        }

        // Si la ruta no existe
        http_response_code(404);
        echo "<h1>Error 404 - Página no encontrada</h1>";
        echo "<p>La ruta '{$url}' no existe en QuillaBit.</p>";
    }
}