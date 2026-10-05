<?php 
$pageTitle = "Términos y Condiciones de Uso";
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
                <span>Marco Legal</span>
            </span>
            <h1 class="text-3xl sm:text-5xl font-extrabold text-white tracking-tight">
                Términos y <span class="text-transparent bg-clip-text bg-gradient-to-r from-turquesa via-niebla to-sol">Condiciones</span>
            </h1>
            <p class="text-sm sm:text-base text-niebla/70 mt-3 font-medium">
                Última actualización: <?= date('d/m/Y') ?>
            </p>
        </header>

        <!-- Contenedor del documento legal -->
        <div class="bg-marino/80 border border-marino rounded-2xl p-6 sm:p-10 shadow-2xl backdrop-blur-xl space-y-8 text-sm sm:text-base leading-relaxed">
            
            <!-- Introducción -->
            <section class="space-y-3">
                <h2 class="text-xl sm:text-2xl font-bold text-white flex items-center gap-2">
                    <span class="w-2.5 h-2.5 rounded-full bg-turquesa"></span>
                    <span>1. Información General y Aceptación</span>
                </h2>
                <p class="text-niebla/80">
                    Bienvenido a <strong class="text-white">QuillaBit</strong>. Al acceder, navegar o utilizar nuestro sitio web oficial, aceptas cumplir y estar sujeto a los presentes Términos y Condiciones de uso. Si no estás de acuerdo con alguno de los términos expuestos, te solicitamos abstenerte de hacer uso de la plataforma.
                </p>
            </section>

            <hr class="border-marino/80">

            <!-- Servicios y Cotizaciones -->
            <section class="space-y-3">
                <h2 class="text-xl sm:text-2xl font-bold text-white flex items-center gap-2">
                    <span class="w-2.5 h-2.5 rounded-full bg-turquesa"></span>
                    <span>2. Naturaleza de los Servicios</span>
                </h2>
                <p class="text-niebla/80">
                    QuillaBit es un estudio especializado en desarrollo de software a medida, aplicaciones web y soluciones digitales. La información expuesta en este sitio, incluyendo nuestro simulador interactivo de presupuestos y proyectos, tiene un carácter estrictamente **estimativo e informativo**. 
                </p>
                <p class="text-niebla/80">
                    Las estimaciones de tiempos y costos generadas en la web no constituyen una oferta formal obligatoria hasta que se formalice una propuesta técnica y comercial acordada por ambas partes.
                </p>
            </section>

            <hr class="border-marino/80">

            <!-- Propiedad Intelectual -->
            <section class="space-y-3">
                <h2 class="text-xl sm:text-2xl font-bold text-white flex items-center gap-2">
                    <span class="w-2.5 h-2.5 rounded-full bg-turquesa"></span>
                    <span>3. Propiedad Intelectual</span>
                </h2>
                <p class="text-niebla/80">
                    Todos los contenidos presentados en este sitio web —incluyendo código fuente, diseños de interfaz, logotipos, elementos gráficos, textos, combinaciones de colores e isotipos de QuillaBit— son propiedad exclusiva del desarrollo o cuentan con sus respectivas licencias de uso, estando protegidos por las leyes de propiedad intelectual e industrial.
                </p>
                <p class="text-niebla/80">
                    Queda expresamente prohibida la reproducción, distribución o modificación total o parcial de los contenidos sin la autorización previa y por escrito de QuillaBit.
                </p>
            </section>

            <hr class="border-marino/80">

            <!-- Uso del Formulario y Comunicaciones -->
            <section class="space-y-3">
                <h2 class="text-xl sm:text-2xl font-bold text-white flex items-center gap-2">
                    <span class="w-2.5 h-2.5 rounded-full bg-turquesa"></span>
                    <span>4. Uso del Formulario de Contacto</span>
                </h2>
                <p class="text-niebla/80">
                    Al utilizar nuestro formulario de contacto, te comprometes a proporcionar información veraz, precisa y actualizada. QuillaBit se reserva el derecho de descartar o no responder aquellas solicitudes que contengan información falsa, lenguaje inapropiado o fines spam.
                </p>
            </section>

            <hr class="border-marino/80">

            <!-- Limitación de Responsabilidad -->
            <section class="space-y-3">
                <h2 class="text-xl sm:text-2xl font-bold text-white flex items-center gap-2">
                    <span class="w-2.5 h-2.5 rounded-full bg-turquesa"></span>
                    <span>5. Limitación de Responsabilidad</span>
                </h2>
                <p class="text-niebla/80">
                    Aunque nos esforzamos por garantizar la disponibilidad constante y la seguridad del sitio web, QuillaBit no se hace responsable por interrupciones temporales del servicio debidas a mantenimiento del proveedor de hosting, fallas en las redes de telecomunicaciones o factores ajenos a nuestro control directo.
                </p>
            </section>

            <hr class="border-marino/80">

            <!-- Modificaciones y Contacto -->
            <section class="space-y-3">
                <h2 class="text-xl sm:text-2xl font-bold text-white flex items-center gap-2">
                    <span class="w-2.5 h-2.5 rounded-full bg-sol"></span>
                    <span>6. Modificaciones y Contacto</span>
                </h2>
                <p class="text-niebla/80">
                    Nos reservamos el derecho de actualizar o modificar estos Términos y Condiciones en cualquier momento sin previo aviso. Te recomendamos revisar esta página periódicamente para estar al tanto de cualquier cambio.
                </p>
                <p class="text-niebla/80 pt-2">
                    Si tienes dudas sobre estos términos, puedes escribirnos directamente a nuestro correo de contacto oficial: 
                    <a href="mailto:<?= COMPANY_EMAIL ?>" class="text-turquesa hover:underline font-mono"><?= COMPANY_EMAIL ?></a>.
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