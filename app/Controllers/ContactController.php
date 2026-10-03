<?php
namespace App\Controllers;

use App\Models\ContactModel;
use Exception;

/**
 * Controlador de Contacto - API RESTful Empresarial para QuillaBit
 */
class ContactController {

    /**
     * Procesa la solicitud AJAX de contacto de forma asíncrona
     */

// En app/Controllers/ContactController.php

public function enviar(): void {
    // 1. Validar el Método HTTP
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        header('Location: ' . BASE_URL);
        exit;
    }

    // 2. Trampa Anti-Bot HoneyPot
    if (!empty($_POST['website_hp'])) {
        header('Location: ' . BASE_URL . '?status=success');
        exit;
    }

    // 3. Sanitización de datos
    $nombre   = isset($_POST['nombre']) ? trim(filter_var($_POST['nombre'], FILTER_SANITIZE_SPECIAL_CHARS)) : '';
    $apellido = isset($_POST['apellido']) ? trim(filter_var($_POST['apellido'], FILTER_SANITIZE_SPECIAL_CHARS)) : '';
    $emailRaw = isset($_POST['email']) ? trim($_POST['email']) : '';
    $email    = filter_var($emailRaw, FILTER_VALIDATE_EMAIL);
    $asunto   = isset($_POST['asunto']) ? trim(filter_var($_POST['asunto'], FILTER_SANITIZE_SPECIAL_CHARS)) : '';
    $mensaje  = isset($_POST['mensaje']) ? trim(filter_var($_POST['mensaje'], FILTER_SANITIZE_SPECIAL_CHARS)) : '';

    // Detectar si es petición AJAX
    $isAjax = !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest';

    // 4. Validación
    if (empty($nombre) || empty($apellido) || !$email || empty($asunto) || strlen($mensaje) < 10) {
        if ($isAjax) {
            $this->respondJSON('fail', 'Por favor completa todos los campos correctamente.', null, 400);
            return;
        }
        header('Location: ' . BASE_URL . '/#contacto?status=error');
        exit;
    }

    try {
        // 5. Guardar en Base de Datos
        $contactModel = new ContactModel();
        $contactModel->registrarMensaje($nombre, $apellido, $email, $asunto, $mensaje);

        // 6. Enviar Correo por Resend API
        $this->enviarConResend($nombre, $apellido, $email, $asunto, $mensaje);

        if ($isAjax) {
            $this->respondJSON('success', '¡Gracias por contactar a QuillaBit! Tu mensaje ha sido enviado.', null, 200);
            return;
        }

        // Redirección en envío tradicional para evitar reenvío al recargar
        header('Location: ' . BASE_URL . '/?status=success#contacto');
        exit;

    } catch (Exception $e) {
        error_log("ContactController Exception: " . $e->getMessage());
        if ($isAjax) {
            $this->respondJSON('error', 'Error interno al procesar la solicitud.', null, 500);
            return;
        }
        header('Location: ' . BASE_URL . '/#contacto?status=error');
        exit;
    }
}
    /**
     * Integración REST con la API de Resend (cURL)
     */
    private function enviarConResend(string $nombre, string $apellido, string $emailCliente, string $asuntoCliente, string $mensajeCliente): array {
        $apiUrl = 'https://api.resend.com/emails';

        // Estructura HTML estilizada con la paleta oficial de QuillaBit
        $htmlContent = "
            <div style='font-family: \"Poppins\", Arial, sans-serif; background-color: #06182B; padding: 30px 15px; color: #EAF6F5;'>
                <div style='max-width: 600px; margin: 0 auto; background-color: #0D2B45; padding: 30px; border-radius: 16px; border: 1px solid #1FD6C1; box-shadow: 0 10px 30px rgba(0,0,0,0.5);'>
                    <div style='text-align: center; margin-bottom: 25px;'>
                        <h1 style='color: #FFFFFF; font-size: 24px; margin: 0;'>Quilla<span style='color: #1FD6C1;'>Bit</span><span style='color: #FFB627;'>.</span></h1>
                        <p style='color: #1FD6C1; font-size: 13px; font-weight: 600; text-transform: uppercase; letter-spacing: 1px; margin-top: 5px;'>Nueva Solicitud de Proyecto</p>
                    </div>
                    <hr style='border: 0; border-top: 1px solid rgba(31, 214, 193, 0.2); margin: 20px 0;'>
                    <table style='width: 100%; text-align: left; border-collapse: collapse; color: #EAF6F5; font-size: 14px;'>
                        <tr>
                            <td style='padding: 8px 0; color: #1FD6C1; font-weight: bold; width: 130px;'>Cliente:</td>
                            <td style='padding: 8px 0; font-weight: 500;'>{$nombre} {$apellido}</td>
                        </tr>
                        <tr>
                            <td style='padding: 8px 0; color: #1FD6C1; font-weight: bold;'>Email:</td>
                            <td style='padding: 8px 0;'><a href='mailto:{$emailCliente}' style='color: #FFB627; text-decoration: none;'>{$emailCliente}</a></td>
                        </tr>
                        <tr>
                            <td style='padding: 8px 0; color: #1FD6C1; font-weight: bold;'>Asunto:</td>
                            <td style='padding: 8px 0; font-weight: 500;'>{$asuntoCliente}</td>
                        </tr>
                    </table>
                    <div style='margin-top: 20px;'>
                        <p style='color: #1FD6C1; font-weight: bold; margin-bottom: 8px;'>Mensaje del cliente:</p>
                        <div style='background-color: #06182B; padding: 18px; border-radius: 10px; border-left: 4px solid #FFB627; font-size: 14px; line-height: 1.6; color: #EAF6F5;'>
                            " . nl2br($mensajeCliente) . "
                        </div>
                    </div>
                    <hr style='border: 0; border-top: 1px solid rgba(31, 214, 193, 0.2); margin: 25px 0 15px 0;'>
                    <p style='font-size: 11px; color: #8899A6; text-align: center; margin: 0;'>
                        Notificación automática del sistema de gestión de prospectos de <strong>QuillaBit</strong>.
                    </p>
                </div>
            </div>
        ";

        $payload = [
            'from'     => 'QuillaBit <' . (defined('RESEND_FROM_EMAIL') ? RESEND_FROM_EMAIL : 'onboarding@resend.dev') . '>',
            'to'       => [COMPANY_EMAIL],
            'subject'  => " QuillaBit Contacto: {$asuntoCliente}",
            'html'     => $htmlContent,
            'reply_to' => $emailCliente
        ];

        $ch = curl_init($apiUrl);
        curl_setopt_array($ch, [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST           => true,
            CURLOPT_POSTFIELDS     => json_encode($payload),
            CURLOPT_HTTPHEADER     => [
                'Authorization: Bearer ' . RESEND_API_KEY,
                'Content-Type: application/json'
            ],
            CURLOPT_TIMEOUT        => 10,
            CURLOPT_SSL_VERIFYPEER => false, // Evita fallos por falta de certificado CA en entornos locales de desarrollo (Windows)
            CURLOPT_SSL_VERIFYHOST => false
        ]);

        $responseBody = curl_exec($ch);
        $httpCode     = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $curlError    = curl_error($ch);
        curl_close($ch);

        if ($curlError || $httpCode < 200 || $httpCode >= 300) {
            error_log("Resend API Error (HTTP {$httpCode}): " . ($curlError ?: $responseBody));
            return ['success' => false, 'code' => $httpCode, 'response' => $responseBody];
        }

        return ['success' => true, 'code' => $httpCode, 'response' => $responseBody];
    }

    /**
     * Helper estandarizado para emitir respuestas JSON en formato REST API
     */
    private function respondJSON(string $status, string $message, ?array $data = null, int $httpCode = 200): void {
        http_response_code($httpCode);
        
        $response = [
            'status'    => $status,                       // "success", "fail" o "error"
            'success'   => ($status === 'success'),       // Flag booleano de conveniencia para JS
            'code'      => $httpCode,                     // Código de respuesta HTTP
            'message'   => $message,                      // Mensaje legible para la interfaz
            'data'      => $data,                         // Datos de respuesta
            'timestamp' => date('Y-m-d H:i:s')            // Sello de tiempo de auditoría
        ];

        echo json_encode($response, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
        exit;
    }
}