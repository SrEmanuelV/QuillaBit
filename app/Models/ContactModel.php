<?php

namespace App\Models;

use Database;
use PDO;
use Exception;

/**
 * Modelo para gestionar los mensajes de contacto en la BD mediante Transacciones PDO
 */
class ContactModel {
    private $db;

    public function __construct() {
        // Obtenemos la conexión singleton PDO de config/Database.php
        $this->db = Database::getConnection();
    }

    /**
     * Inserta un nuevo mensaje de contacto en la tabla 'mensajes_contacto' usando Transacciones ACID
     * e integrando la fecha y hora oficial de Colombia (America/Bogota).
     * 
     * @param string $nombre
     * @param string $apellido
     * @param string $email
     * @param string $asunto
     * @param string $mensaje
     * @return bool
     */
    public function registrarMensaje($nombre, $apellido, $email, $asunto, $mensaje) {
        
        if (!$this->db) {
            error_log("ContactModel::registrarMensaje -> Conexión a la base de datos no disponible.");
            return false;
        }

        try {
            // Asegurar zona horaria de Colombia para el registro
            date_default_timezone_set('America/Bogota');
            $fechaColombia = date('Y-m-d H:i:s');

            // 1. Iniciar la transacción de base de datos
            $this->db->beginTransaction();

            $sql = "INSERT INTO mensajes_contacto (nombre, apellido, email, asunto, mensaje, fecha_creacion) 
                    VALUES (:nombre, :apellido, :email, :asunto, :mensaje, :fecha_creacion)";
            
            $stmt = $this->db->prepare($sql);
            
            $resultado = $stmt->execute([
                ':nombre'         => $nombre,
                ':apellido'       => $apellido,
                ':email'          => $email,
                ':asunto'         => $asunto,
                ':mensaje'        => $mensaje,
                ':fecha_creacion' => $fechaColombia
            ]);

            if ($resultado) {
                // 2. Confirmar los cambios de forma permanente si la inserción fue exitosa
                $this->db->commit();
                return true;
            }

            // Si por algún motivo execute no retorna true, revertimos
            if ($this->db->inTransaction()) {
                $this->db->rollBack();
            }
            return false;

        } catch (Exception $e) {
            // 3. Si ocurre cualquier error/excepción, revertimos todos los cambios
            if ($this->db && $this->db->inTransaction()) {
                $this->db->rollBack();
            }

            error_log("Error en ContactModel::registrarMensaje (Rollback ejecutado): " . $e->getMessage());
            return false;
        }
    }
}