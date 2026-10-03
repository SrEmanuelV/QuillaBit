<?php
/**
 * Conexión a la Base de Datos mediante PDO
 */

class Database {
    private static $instance = null;

    /**
     * Obtener la instancia de la conexión PDO (Patrón Singleton)
     */
    public static function getConnection() {
        if (self::$instance === null) {
            try {
                $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET;
                
                $options = [
                    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, // Lanza excepciones en caso de error SQL
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,     // Retorna los datos como arreglos asociativos
                    PDO::ATTR_EMULATE_PREPARES   => false,                 // Usa consultas preparadas reales a nivel de motor SQL
                ];

                self::$instance = new PDO($dsn, DB_USER, DB_PASS, $options);
            } catch (PDOException $e) {
                // Registrar el error internamente y detener la ejecución de forma limpia
                error_log("Error de conexión a la Base de Datos: " . $e->getMessage());
                die("Error crítico: No se pudo conectar a la base de datos.");
            }
        }

        return self::$instance;
    }
}