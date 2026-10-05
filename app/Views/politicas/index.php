<?php 
$pageTitle = "Política de Privacidad & Tratamiento de Datos";
require_once __DIR__ . '/../layouts/header.php'; 
?>

<!-- Estilos para fondo tecnológico -->
<style>
    .bg-grid-pattern {
        background-size: 30px 30px;
        background-image: 
            linear-gradient(to right, rgba(31, 214, 193, 0.05) 1px, transparent 1px),
            linear-gradient(to bottom, rgba(31, 214, 193, 0.05) 1px, transparent 1px);
    }
</style>

<main class="pt-28 pb-20 bg-abismo bg-grid-pattern text-niebla min-h-screen">
    
    <!-- Luces Diffuse Ambientales -->
    <div class="fixed top-20 left-1/2 -translate-x-1/2 w-[500px] h-[500px] bg-turquesa/5 rounded-full blur-[120px] pointer-events-none"></div>

    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        <!-- Encabezado de la página -->
        <header class="text-center mb-12">
            <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full border border-turquesa/30 bg-marino/80 text-turquesa text-xs font-semibold uppercase tracking-wider backdrop-blur-md mb-4">
                <span>Protección de Datos (Ley 1581 de 2012)</span>
            </span>
            <h1 class="text-3xl sm:text-5xl font-extrabold text-white tracking-tight">
                Política de <span class="text-transparent bg-clip-text bg-gradient-to-r from-turquesa via-niebla to-sol">Privacidad</span>
            </h1>
            <p class="text-sm sm:text-base text-niebla/70 mt-3 font-medium">
                Última actualización: <?= date('d/m/Y') ?>
            </p>
        </header>

        <!-- Contenedor del documento legal -->
        <div class="bg-marino/80 border border-marino rounded-2xl p-6 sm:p-10 shadow-2xl backdrop-blur-xl space-y-8 text-sm sm:text-base leading-relaxed">
            
            <!-- Introducción y Responsable -->
            <section class="space-y-3">
                <h2 class="text-xl sm:text-2xl font-bold text-white flex items-center gap-2">
                    <span class="w-2.5 h-2.5 rounded-full bg-turquesa"></span>
                    <span>1. Responsable del Tratamiento de Datos</span>
                </h2>
                <p class="text-niebla/80">
                    En <strong class="text-white">QuillaBit</strong>, nos tomamos muy en serio la seguridad y la confidencialidad de la información de nuestros usuarios. Dando cumplimiento a lo establecido en la **Ley Estatutaria 1581 de 2012** de Colombia y sus decretos reglamentarios sobre Protección de Datos Personales (Hábeas Data), informamos que los datos capturados mediante esta plataforma serán tratados con estricta reserva y seguridad.
                </p>
            </section>

            <hr class="border-marino/80">

            <!-- Datos Recolectados -->
            <section class="space-y-3">
                <h2 class="text-xl sm:text-2xl font-bold text-white flex items-center gap-2">
                    <span class="w-2.5 h-2.5 rounded-full bg-turquesa"></span>
                    <span>2. Datos Personales que Recolectamos</span>
                </h2>
                <p class="text-niebla/80">
                    A través de nuestro formulario de contacto en línea, recolectamos exclusivamente los siguientes datos indispensables para la atención comercial y técnica:
                </p>
                <ul class="list-disc list-inside space-y-1.5 pl-2 text-niebla/80">
                    <li><strong class="text-white">Nombre y Apellido:</strong> Para la identificación del remitente.</li>
                    <li><strong class="text-white">Correo Electrónico:</strong> Como canal directo para responder a la solicitud presentada.</li>
                    <li><strong class="text-white">Asunto y Detalles del Mensaje:</strong> Información referente a requerimientos de software o cotizaciones.</li>
                </ul>
            </section>

            <hr class="border-marino/80">

            <!-- Finalidad del Tratamiento -->
            <section class="space-y-3">
                <h2 class="text-xl sm:text-2xl font-bold text-white flex items-center gap-2">
                    <span class="w-2.5 h-2.5 rounded-full bg-turquesa"></span>
                    <span>3. Finalidad del Uso de la Información</span>
                </h2>
                <p class="text-niebla/80">
                    Los datos recolectados serán almacenados en nuestras bases de datos con las siguientes finalidades específicas:
                </p>
                <ul class="list-disc list-inside space-y-1.5 pl-2 text-niebla/80">
                    <li>Gestionar, atender y responder consultas comerciales, dudas o cotizaciones de proyectos.</li>
                    <li>Establecer contacto directo para evaluar propuestas de desarrollo de software a medida.</li>
                    <li>Mantener un registro histórico interno de solicitudes atendidas.</li>
                </ul>
                <p class="text-niebla/80 pt-2 font-semibold text-turquesa">
                    ✓ QuillaBit NO vende, NO alquila y NO cede datos personales a terceros para fines publicitarios o comerciales masivos.
                </p>
            </section>

            <hr class="border-marino/80">

            <!-- Derechos del Titular (ARCO) -->
            <section class="space-y-3">
                <h2 class="text-xl sm:text-2xl font-bold text-white flex items-center gap-2">
                    <span class="w-2.5 h-2.5 rounded-full bg-turquesa"></span>
                    <span>4. Derechos de los Titulares</span>
                </h2>
                <p class="text-niebla/80">
                    De acuerdo con el Artículo 8 de la Ley 1581 de 2012, como titular de los datos personales tienes derecho a:
                </p>
                <ul class="list-disc list-inside space-y-1.5 pl-2 text-niebla/80">
                    <li><strong class="text-white">Conocer y Acceder:</strong> Consultar gratuitamente tus datos personales bajo nuestro control.</li>
                    <li><strong class="text-white">Actualizar y Rectificar:</strong> Solicitar la corrección de información inexacta o incompleta.</li>
                    <li><strong class="text-white">Suprimir:</strong> Solicitar la eliminación de tus datos personales de nuestras bases de datos cuando consideres que no se están tratando conforme a la ley.</li>
                </ul>
            </section>

            <hr class="border-marino/80">

            <!-- Canales para Ejercer Derechos -->
            <section class="space-y-3">
                <h2 class="text-xl sm:text-2xl font-bold text-white flex items-center gap-2">
                    <span class="w-2.5 h-2.5 rounded-full bg-sol"></span>
                    <span>5. Canal de Atención de Hábeas Data</span>
                </h2>
                <p class="text-niebla/80">
                    Si deseas ejercer tus derechos de acceso, rectificación, actualización o eliminación de datos, o para cualquier inquietud relacionada con esta política, puedes enviar una solicitud formal a nuestro correo electrónico:
                </p>
                <p class="pt-2">
                    <a href="mailto:<?= COMPANY_EMAIL ?>" class="inline-flex items-center gap-2 px-4 py-2.5 rounded-xl bg-abismo border border-turquesa/30 text-turquesa font-mono hover:bg-turquesa/10 transition-colors">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                        <span><?= COMPANY_EMAIL ?></span>
                    </a>
                </p>
            </section>

        </div>

        <!-- Botón de regreso -->
        <div class="mt-8 text-center">
            <a href="<?= BASE_URL ?>" class="inline-flex items-center gap-2 text-sm text-niebla/70 hover:text-turquesa transition-colors">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
                <span>Volver al inicio</span>
            </a>
        </div>

    </div>
</main>

<?php require_once __DIR__ . '/../layouts/footer.php'; ?>