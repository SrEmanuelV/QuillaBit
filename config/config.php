<?php
/**
 * Configuración General del Sistema - QuillaBit
 */

// 1. Detección dinámica inteligente de la URL Base (Corregida para Raíz / Subcarpetas)
$protocol  = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || (isset($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] == 443)) ? "https://" : "http://";
$host      = $_SERVER['HTTP_HOST'] ?? 'localhost';

// Normalizar la ruta del directorio descartando barras sobrantes en la raíz /
$scriptDir = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME']));
$scriptDir = ($scriptDir === '/' || $scriptDir === '\\') ? '' : $scriptDir;

$baseUrl   = rtrim($protocol . $host . $scriptDir, '/');

define('BASE_URL', $baseUrl);

// 2. Información de la Empresa
define('APP_NAME', 'QuillaBit');
define('COMPANY_EMAIL', 'emanuelvillalobos546@gmail.com');

// 3. Credenciales de Base de Datos (MySQL)
define('DB_HOST', 'localhost');
define('DB_NAME', 'quillabit_db');
define('DB_USER', 'root');
define('DB_PASS', 'root');
define('DB_CHARSET', 'utf8mb4');

// 4. Configuración de Resend (Envío de correos por API HTTP)
define('RESEND_API_KEY', 'TU_RESEND_API_KEY_AQUI');
define('RESEND_FROM_EMAIL', 'onboarding@resend.dev');