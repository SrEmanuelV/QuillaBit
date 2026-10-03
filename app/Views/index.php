<?php 
$pageTitle = "Desarrollo de Software a Medida & Soluciones Digitales";
require_once __DIR__ . '/layouts/header.php'; 
?>

<!-- Estilos CSS Personalizados para Animaciones Tech y Efectos Glow -->
<style>
    /* Patrón de rejilla tecnológica para fondos */
    .bg-grid-pattern {
        background-size: 30px 30px;
        background-image: 
            linear-gradient(to right, rgba(31, 214, 193, 0.05) 1px, transparent 1px),
            linear-gradient(to bottom, rgba(31, 214, 193, 0.05) 1px, transparent 1px);
    }
    
    /* Efectos de brillo / Glows */
    .glow-turquesa {
        box-shadow: 0 0 50px -10px rgba(31, 214, 193, 0.3);
    }
    .glow-sol {
        box-shadow: 0 0 40px -10px rgba(255, 182, 39, 0.25);
    }

    /* Animación de cursor titilante en terminal */
    @keyframes blink {
        0%, 100% { opacity: 1; }
        50% { opacity: 0; }
    }
    .animate-blink {
        animation: blink 1s infinite;
    }
</style>

<main class="pt-20 overflow-hidden">

    <!-- ========================================== -->
    <!-- 1. HERO SECTION TECNOLÓGICO -->
    <!-- ========================================== -->
    <section id="inicio" class="relative bg-abismo bg-grid-pattern py-24 lg:py-32 border-b border-marino">
        
        <!-- Luces / Ambient Diffuse Glows -->
        <div class="absolute top-1/4 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-turquesa/10 rounded-full blur-[120px] pointer-events-none"></div>
        <div class="absolute bottom-10 right-10 w-[400px] h-[400px] bg-sol/10 rounded-full blur-[100px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                
                <!-- Columna Izquierda: Mensaje de Impacto -->
                <div class="lg:col-span-7 text-center lg:text-left space-y-8">
                    
                    <!-- Badge de Estado -->
                    <div class="inline-flex items-center gap-2.5 px-4 py-2 rounded-full border border-turquesa/30 bg-marino/80 text-turquesa text-xs font-semibold uppercase tracking-wider backdrop-blur-md">
                        <span class="w-2.5 h-2.5 rounded-full bg-turquesa animate-ping"></span>
                        <span>Ingeniería de Software de Alto Rendimiento</span>
                    </div>

                    <!-- Título Principal con Gradient -->
                    <h1 class="text-4xl sm:text-6xl font-extrabold tracking-tight text-white leading-tight">
                        Convertimos ideas complejas en <span class="text-transparent bg-clip-text bg-gradient-to-r from-turquesa via-niebla to-sol">software a medida</span>.
                    </h1>

                    <!-- Descripción -->
                    <p class="text-lg sm:text-xl text-niebla/80 leading-relaxed max-w-2xl mx-auto lg:mx-0 font-normal">
                        En <strong class="text-white">QuillaBit</strong> diseñamos, construimos y escalamos arquitecturas web, plataformas empresariales con los estándares de ingeniería más exigentes.
                    </p>

                    <!-- Botones de Acción -->
                    <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start pt-2">
                        <a href="#contacto" class="bg-turquesa hover:bg-turquesa/90 text-abismo font-bold px-8 py-4 rounded-xl transition-all duration-300 shadow-xl shadow-turquesa/25 hover:shadow-turquesa/40 hover:-translate-y-1 flex items-center justify-center gap-2">
                            <span>Iniciar un Proyecto</span>
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                        </a>
                        <a href="#demostrador" class="border border-marino bg-marino/50 hover:bg-marino text-niebla font-semibold px-8 py-4 rounded-xl transition-all duration-300 backdrop-blur-md hover:border-turquesa/50 flex items-center justify-center gap-2">
                            <svg class="w-5 h-5 text-sol" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            <span>Probar Demo Interactiva</span>
                        </a>
                    </div>

                    <!-- Métricas de Impacto -->
                    <div class="grid grid-cols-3 gap-6 pt-6 border-t border-marino/80 text-center lg:text-left">
                        <div>
                            <p class="text-3xl font-extrabold text-turquesa">100%</p>
                            <p class="text-xs text-niebla/70 mt-1 font-medium">Código a Medida</p>
                        </div>
                        <div>
                            <p class="text-3xl font-extrabold text-sol">ACID</p>
                            <p class="text-xs text-niebla/70 mt-1 font-medium">Bases de Datos Seguras</p>
                        </div>
                        <div>
                            <p class="text-3xl font-extrabold text-white">&lt;100ms</p>
                            <p class="text-xs text-niebla/70 mt-1 font-medium">Rendimiento Optimizado</p>
                        </div>
                    </div>

                </div>

                <!-- Columna Derecha: Terminal Interactiva / Mockup Visual -->
                <div class="lg:col-span-5">
                    <div class="relative rounded-2xl bg-marino border border-turquesa/30 p-4 shadow-2xl glow-turquesa">
                        
                        <!-- Barra superior de ventana estilo macOS/IDE -->
                        <div class="flex items-center justify-between pb-3 mb-3 border-b border-abismo/60">
                            <div class="flex items-center space-x-2">
                                <span class="w-3 h-3 rounded-full bg-rose-500 inline-block"></span>
                                <span class="w-3 h-3 rounded-full bg-amber-500 inline-block"></span>
                                <span class="w-3 h-3 rounded-full bg-emerald-500 inline-block"></span>
                            </div>
                            <span class="text-xs font-mono text-niebla/60">QuillaBit_Architecture.v2.php</span>
                            <span class="text-xs font-mono px-2 py-0.5 rounded bg-turquesa/10 text-turquesa">BUILD SUCCESS</span>
                        </div>

                        <!-- Visor de Código Animado / Consola -->
                        <div class="font-mono text-xs sm:text-sm space-y-2 text-niebla p-2 overflow-x-auto">
                            <p class="text-niebla/50">// Inicializando arquitectura del sistema cliente</p>
                            <p><span class="text-sol">use</span> QuillaBit\Core\Engine;</p>
                            <p><span class="text-turquesa">$app</span> = <span class="text-sol">new</span> Engine([</p>
                            <p class="pl-4"><span class="text-turquesa">'security'</span> =&gt; <span class="text-sol">'PDO_ACID_Strict'</span>,</p>
                            <p class="pl-4"><span class="text-turquesa">'performance'</span> =&gt; <span class="text-sol">'High_Speed_AJAX'</span>,</p>
                            <p class="pl-4"><span class="text-turquesa">'scalability'</span> =&gt; <span class="text-sol">true</span></p>
                            <p>);</p>
                            <div class="pt-2 border-t border-abismo/40 text-emerald-400">
                                <p>✓ Conexión MySQL establecida</p>
                                <p>✓ Módulos compilados en 0.04s</p>
                                <p class="text-sol flex items-center gap-1 mt-1">
                                    <span>&gt; QuillaBit listo para despegar</span>
                                    <span class="w-2 h-4 bg-sol inline-block animate-blink"></span>
                                </p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ========================================== -->
    <!-- 2. DEMOSTRADOR INTERACTIVO DE CAPACIDADES -->
    <!-- ========================================== -->
    <section id="demostrador" class="py-20 bg-abismo border-b border-marino relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-turquesa font-bold text-sm tracking-wider uppercase">Experiencia Interactiva</span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-white mt-2">Prueba en vivo lo que podemos construir para ti</h2>
                <p class="text-niebla/70 mt-3">Utiliza nuestro estimador dinámico e interactúa con los controles para simular tu proyecto.</p>
            </div>

            <div class="bg-marino/70 border border-marino rounded-2xl p-6 sm:p-10 backdrop-blur-xl shadow-2xl">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                    
                    <!-- Panel de Configuración Interactiva -->
                    <div class="lg:col-span-6 space-y-6">
                        <h3 class="text-xl font-bold text-white flex items-center gap-2">
                            <span class="w-3 h-3 rounded-full bg-turquesa"></span>
                            <span>Simulador de Proyecto de Software</span>
                        </h3>

                        <!-- Selector 1: Tipo de Plataforma -->
                        <div>
                            <label class="block text-sm font-medium text-niebla/80 mb-2">Tipo de Sistema</label>
                            <select id="sim-tipo" class="w-full bg-abismo border border-marino rounded-xl px-4 py-3 text-white focus:outline-none focus:border-turquesa transition">
                                <option value="web">Sitio Web Corporativo / Catálogo</option>
                                <option value="app">Aplicación Móvil (Android / iOS)</option>
                                <option value="saas">Plataforma SaaS / Sistema Web Multirrol</option>
                            </select>
                        </div>

                        <!-- Selector 2: Complejidad del Backend -->
                        <div>
                            <label class="block text-sm font-medium text-niebla/80 mb-2">Módulos Requeridos</label>
                            <div class="grid grid-cols-2 gap-3">
                                <button type="button" class="sim-mod-btn px-4 py-2.5 rounded-lg border border-turquesa bg-turquesa/10 text-turquesa text-xs font-semibold transition" data-mod="db">Base de Datos MySQL</button>
                                <button type="button" class="sim-mod-btn px-4 py-2.5 rounded-lg border border-marino bg-abismo text-niebla/70 text-xs font-semibold transition" data-mod="ajax">Formulario/AJAX</button>
                                <button type="button" class="sim-mod-btn px-4 py-2.5 rounded-lg border border-marino bg-abismo text-niebla/70 text-xs font-semibold transition" data-mod="api">Integración API / Email</button>
                                <button type="button" class="sim-mod-btn px-4 py-2.5 rounded-lg border border-marino bg-abismo text-niebla/70 text-xs font-semibold transition" data-mod="auth">Roles de Usuario</button>
                            </div>
                        </div>
                    </div>

                    <!-- Visualizador Dinámico de Resultados -->
                    <div class="lg:col-span-6 bg-abismo p-6 sm:p-8 rounded-xl border border-turquesa/30 text-center space-y-6 glow-sol">
                        <span class="text-xs font-semibold uppercase tracking-widest text-sol">Resultado Estimado en Tiempo Real</span>
                        
                        <div class="space-y-2">
                            <p class="text-sm text-niebla/70">Tiempo Estimado de Entrega</p>
                            <p id="sim-tiempo" class="text-3xl font-extrabold text-turquesa">1 a 2 Semanas</p>
                        </div>

                        <div class="space-y-2 pt-4 border-t border-marino">
                            <p class="text-sm text-niebla/70">Arquitectura Recomendada</p>
                            <p id="sim-stack" class="text-base font-mono text-white">HTML5 + Tailwind + PHP MVC + MySQL</p>
                        </div>

                        <a href="#contacto" class="inline-block w-full bg-sol hover:bg-sol/90 text-abismo font-bold py-3.5 px-6 rounded-xl transition shadow-lg shadow-sol/20">
                            Cotizar Este Proyecto Ahora
                        </a>
                    </div>

                </div>
            </div>

        </div>
    </section>

    <!-- ========================================== -->
    <!-- 3. SOBRE LA EMPRESA (MISIÓN & VISIÓN) -->
    <!-- ========================================== -->
    <section id="nosotros" class="py-24 bg-abismo border-b border-marino">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-turquesa font-bold text-sm tracking-wider uppercase">Nuestra Identidad</span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-white mt-2">Ingeniería con propósito y visión tecnológica</h2>
                <p class="text-niebla/70 mt-3">En QuillaBit transformamos ideas en plataformas escalables que generan resultados reales.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                
                <!-- Tarjeta Misión -->
                <div class="bg-marino/60 border border-marino hover:border-turquesa/50 rounded-2xl p-8 transition-all duration-300 hover:-translate-y-1">
                    <div class="w-14 h-14 bg-turquesa/10 border border-turquesa/30 rounded-xl flex items-center justify-center text-turquesa mb-6">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-3">Nuestra Misión</h3>
                    <p class="text-niebla/80 leading-relaxed text-sm sm:text-base">
                        Impulsar el crecimiento de empresas y negocios mediante la creación de software a medida de alta calidad, combinando arquitecturas sólidas, interfaces intuitivas y un rendimiento excepcional.
                    </p>
                </div>

                <!-- Tarjeta Visión -->
                <div class="bg-marino/60 border border-marino hover:border-sol/50 rounded-2xl p-8 transition-all duration-300 hover:-translate-y-1">
                    <div class="w-14 h-14 bg-sol/10 border border-sol/30 rounded-xl flex items-center justify-center text-sol mb-6">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-3">Nuestra Visión</h3>
                    <p class="text-niebla/80 leading-relaxed text-sm sm:text-base">
                        Ser reconocidos como un estudio de desarrollo de software referente por nuestra excelencia técnica, capacidad de innovación continua y el compromiso transparente con el éxito de cada cliente.
                    </p>
                </div>

            </div>

        </div>
    </section>

    <!-- ========================================== -->
    <!-- 4. PORTAFOLIO DE PROYECTOS DESTACADOS -->
    <!-- ========================================== -->
    <section id="proyectos" class="py-24 bg-abismo border-b border-marino">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-sol font-bold text-sm tracking-wider uppercase">Casos de Éxito</span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-white mt-2">Proyectos Personales y Empresariales</h2>
                <p class="text-niebla/70 mt-3">Una muestra real de la calidad de software que entregamos a nuestros clientes.</p>
            </div>

            <!-- Grilla de Proyectos -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                
                <!-- Proyecto 1: BSXmax -->
                <article class="bg-marino/70 border border-marino rounded-2xl overflow-hidden hover:border-turquesa/50 transition-all duration-300 group flex flex-col justify-between">
                    <div>
                        <div class="h-48 bg-abismo relative overflow-hidden">
                            <img 
                                src="<?= BASE_URL ?>/public/storage/projects-views/project1.jpg" 
                                alt="BSXmax Platform" 
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                onerror="this.onerror=null; this.src='https://via.placeholder.com/600x400/0D2B45/1FD6C1?text=BSXmax+Platform';"
                            >
                            <span class="absolute top-3 right-3 bg-turquesa text-abismo font-bold text-xs px-3 py-1 rounded-full">
                                Empresarial
                            </span>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-white mb-2 group-hover:text-turquesa transition-colors">BSXmax Platform</h3>
                            <p class="text-niebla/70 text-sm leading-relaxed mb-4">
                                Sistema de administración web multirrol con panel de control, gestión de permisos y sincronización de datos en tiempo real.
                            </p>
                        </div>
                    </div>
                    <div class="px-6 pb-6 pt-2 border-t border-abismo/50 flex flex-wrap gap-2 text-xs font-mono text-turquesa">
                        <span class="bg-abismo px-2.5 py-1 rounded">#PHP</span>
                        <span class="bg-abismo px-2.5 py-1 rounded">#MySQL</span>
                        <span class="bg-abismo px-2.5 py-1 rounded">#AJAX</span>
                    </div>
                </article>

                <!-- Proyecto 2: AegisVault -->
                <article class="bg-marino/70 border border-marino rounded-2xl overflow-hidden hover:border-sol/50 transition-all duration-300 group flex flex-col justify-between">
                    <div>
                        <div class="h-48 bg-abismo relative overflow-hidden">
                            <img 
                                src="<?= BASE_URL ?>/public/storage/projects-views/project2.jpg" 
                                alt="AegisVault Mobile App" 
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                onerror="this.onerror=null; this.src='https://via.placeholder.com/600x400/0D2B45/FFB627?text=AegisVault+App';"
                            >
                            <span class="absolute top-3 right-3 bg-sol text-abismo font-bold text-xs px-3 py-1 rounded-full">
                                App Móvil
                            </span>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-white mb-2 group-hover:text-sol transition-colors">AegisVault</h3>
                            <p class="text-niebla/70 text-sm leading-relaxed mb-4">
                                Aplicación móvil nativa orientada a la seguridad de datos con persistencia local optimizada mediante Room Database.
                            </p>
                        </div>
                    </div>
                    <div class="px-6 pb-6 pt-2 border-t border-abismo/50 flex flex-wrap gap-2 text-xs font-mono text-sol">
                        <span class="bg-abismo px-2.5 py-1 rounded">#Kotlin</span>
                        <span class="bg-abismo px-2.5 py-1 rounded">#Android</span>
                        <span class="bg-abismo px-2.5 py-1 rounded">#RoomDB</span>
                    </div>
                </article>

                <!-- Proyecto 3: KAPITAL -->
                <article class="bg-marino/70 border border-marino rounded-2xl overflow-hidden hover:border-turquesa/50 transition-all duration-300 group flex flex-col justify-between">
                    <div>
                        <div class="h-48 bg-abismo relative overflow-hidden">
                            <img 
                                src="<?= BASE_URL ?>/public/storage/projects-views/project3.jpg" 
                                alt="KAPITAL Finance System" 
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                onerror="this.onerror=null; this.src='https://via.placeholder.com/600x400/0D2B45/1FD6C1?text=KAPITAL+Finance';"
                            >
                            <span class="absolute top-3 right-3 bg-turquesa text-abismo font-bold text-xs px-3 py-1 rounded-full">
                                Financiero / Personal
                            </span>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-white mb-2 group-hover:text-turquesa transition-colors">KAPITAL</h3>
                            <p class="text-niebla/70 text-sm leading-relaxed mb-4">
                                Plataforma de gestión financiera personal e informes analíticos con interfaz ultra fluida y almacenamiento estructurado.
                            </p>
                        </div>
                    </div>
                    <div class="px-6 pb-6 pt-2 border-t border-abismo/50 flex flex-wrap gap-2 text-xs font-mono text-turquesa">
                        <span class="bg-abismo px-2.5 py-1 rounded">#JavaScript</span>
                        <span class="bg-abismo px-2.5 py-1 rounded">#Tailwind</span>
                        <span class="bg-abismo px-2.5 py-1 rounded">#PHP</span>
                    </div>
                </article>

            </div>

        </div>
    </section>

    <!-- ========================================== -->
    <!-- 5. FORMULARIO DE CONTACTO INTERACTIVO -->
    <!-- ========================================== -->
    <section id="contacto" class="py-24 bg-abismo relative">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            
            <div class="text-center mb-12">
                <span class="text-turquesa font-bold text-sm tracking-wider uppercase">Hablemos de tu proyecto</span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-white mt-2">¿Listo para dar el siguiente paso?</h2>
                <p class="text-niebla/70 mt-3">Escríbenos tus requerimientos y nos pondremos en contacto contigo a la brevedad.</p>
            </div>

            <!-- Contenedor del Formulario -->
            <form id="contactForm" class="bg-marino/80 border border-marino p-8 sm:p-10 rounded-2xl shadow-2xl backdrop-blur-xl space-y-6" action="<?= BASE_URL ?>/contacto" method="POST">
                
                <!-- Alerta de Respuesta AJAX -->
                <div id="formResponse" class="hidden p-4 rounded-xl text-sm font-medium transition-all duration-300"></div>

                <!-- Fila 1: Nombre y Apellido -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <div>
                        <label for="nombre" class="block text-sm font-medium text-niebla mb-2">Nombre *</label>
                        <input type="text" id="nombre" name="nombre" required placeholder="Ej: Emanuel" class="w-full bg-abismo border border-marino rounded-xl px-4 py-3.5 text-white placeholder-niebla/40 focus:outline-none focus:border-turquesa transition">
                    </div>
                    <div>
                        <label for="apellido" class="block text-sm font-medium text-niebla mb-2">Apellido *</label>
                        <input type="text" id="apellido" name="apellido" required placeholder="Ej: Villalobos" class="w-full bg-abismo border border-marino rounded-xl px-4 py-3.5 text-white placeholder-niebla/40 focus:outline-none focus:border-turquesa transition">
                    </div>
                </div>

                <!-- Fila 2: Email y Asunto -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <div>
                        <label for="email" class="block text-sm font-medium text-niebla mb-2">Correo Electrónico *</label>
                        <input type="email" id="email" name="email" required placeholder="ejemplo@empresa.com" class="w-full bg-abismo border border-marino rounded-xl px-4 py-3.5 text-white placeholder-niebla/40 focus:outline-none focus:border-turquesa transition">
                    </div>
                    <div>
                        <label for="asunto" class="block text-sm font-medium text-niebla mb-2">Asunto del Proyecto *</label>
                        <input type="text" id="asunto" name="asunto" required placeholder="Ej: Desarrollo de Web App" class="w-full bg-abismo border border-marino rounded-xl px-4 py-3.5 text-white placeholder-niebla/40 focus:outline-none focus:border-turquesa transition">
                    </div>
                </div>

                <!-- Fila 3: Mensaje -->
                <div>
                    <label for="mensaje" class="block text-sm font-medium text-niebla mb-2">Detalles del Mensaje *</label>
                    <textarea id="mensaje" name="mensaje" rows="5" required placeholder="Cuéntanos brevemente qué deseas construir o los requerimientos de tu empresa..." class="w-full bg-abismo border border-marino rounded-xl px-4 py-3.5 text-white placeholder-niebla/40 focus:outline-none focus:border-turquesa transition resize-none"></textarea>
                </div>

                <!-- Botón de Envío -->
                <button type="submit" id="submitBtn" class="w-full bg-turquesa hover:bg-turquesa/90 text-abismo font-extrabold py-4 px-8 rounded-xl transition-all duration-300 shadow-xl shadow-turquesa/20 hover:shadow-turquesa/40 flex items-center justify-center gap-2 text-base">
                    <span>Enviar Mensaje</span>
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 19l9-7-9-7-9 7 9 7zm0 0v-8"/></svg>
                </button>
            </form>

        </div>
    </section>

</main>

<script>const BASE_URL = '<?= BASE_URL ?>';</script>

<!-- Lógica JS del Demostrador Interactivo -->
<script src="<?= BASE_URL ?>/public/js/landing.js"></script>

<?php require_once __DIR__ . '/layouts/footer.php'; ?>