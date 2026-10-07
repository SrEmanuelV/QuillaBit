<?php 
$pageTitle = "Misión & Visión ";
require_once __DIR__ . '/../layouts/header.php'; 
?>

<!-- Estilos para patrón de fondo tecnológico -->
<style>
    .bg-grid-pattern {
        background-size: 30px 30px;
        background-image: 
            linear-gradient(to right, rgba(31, 214, 193, 0.05) 1px, transparent 1px),
            linear-gradient(to bottom, rgba(31, 214, 193, 0.05) 1px, transparent 1px);
    }
</style>

<main class="pt-28 pb-20 bg-abismo bg-grid-pattern text-niebla min-h-screen relative overflow-hidden">
    
    <!-- Luces Ambientales de Fondo -->
    <div class="absolute top-1/4 left-10 w-[500px] h-[500px] bg-turquesa/10 rounded-full blur-[140px] pointer-events-none"></div>
    <div class="absolute bottom-10 right-10 w-[400px] h-[400px] bg-sol/10 rounded-full blur-[120px] pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        <!-- Header Principal de la Sección -->
        <header class="text-center max-w-3xl mx-auto mb-16 space-y-4">
            <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full border border-turquesa/30 bg-marino/80 text-turquesa text-xs font-semibold uppercase tracking-wider backdrop-blur-md">
                <span class="w-2 h-2 rounded-full bg-turquesa"></span>
                <span>Propósito & Dirección Estratégica</span>
            </span>
            <h1 class="text-3xl sm:text-5xl font-extrabold text-white tracking-tight leading-tight">
                Ingeniería de software a medida con <span class="text-transparent bg-clip-text bg-gradient-to-r from-turquesa via-niebla to-sol">visión global</span>
            </h1>
            <p class="text-niebla/70 text-base sm:text-lg">
                Impulsamos la transformación digital de nuestros clientes a través del rendimiento, la seguridad y el acompañamiento técnico estratégico.
            </p>
        </header>

        <!-- Grilla de Misión y Visión (Secciones Independientes) -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-16">
            
            <!-- SECCIÓN 1: MISIÓN -->
            <section id="mision" class="bg-marino/80 border border-marino hover:border-turquesa/50 rounded-2xl p-8 sm:p-10 shadow-2xl backdrop-blur-xl transition-all duration-300 relative group flex flex-col justify-between">
                <div>
                    <div class="w-14 h-14 bg-turquesa/10 border border-turquesa/30 rounded-xl flex items-center justify-center text-turquesa mb-6 group-hover:scale-110 transition-transform">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                    </div>
                    <span class="text-xs font-bold text-turquesa tracking-widest uppercase font-mono">Nuestra Misión</span>
                    <h2 class="text-2xl sm:text-3xl font-bold text-white mt-2 mb-4">Construir software de alto impacto y orientar el éxito digital de nuestros clientes</h2>
                    <p class="text-niebla/80 text-sm sm:text-base leading-relaxed space-y-3">
                        En <strong class="text-white">QuillaBit</strong> desarrollamos soluciones de software a medida enfocadas en el máximo rendimiento, la seguridad y la escalabilidad. No solo digitalizamos procesos físicos; nos convertimos en aliados estratégicos que asesoran, sugieren y aportan conocimiento técnico continuo para asegurar la ventaja competitiva de cada cliente en el mercado digital.
                    </p>
                </div>
                <div class="mt-6 pt-4 border-t border-marino/60 text-xs text-turquesa/80 font-mono">
                    ✦ Referente Local & Alcance Remoto Internacional
                </div>
            </section>

            <!-- SECCIÓN 2: VISIÓN -->
            <section id="vision" class="bg-marino/80 border border-marino hover:border-sol/50 rounded-2xl p-8 sm:p-10 shadow-2xl backdrop-blur-xl transition-all duration-300 relative group flex flex-col justify-between">
                <div>
                    <div class="w-14 h-14 bg-sol/10 border border-sol/30 rounded-xl flex items-center justify-center text-sol mb-6 group-hover:scale-110 transition-transform">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                    </div>
                    <span class="text-xs font-bold text-sol tracking-widest uppercase font-mono">Nuestra Visión (2031)</span>
                    <h2 class="text-2xl sm:text-3xl font-bold text-white mt-2 mb-4">Ser la firma de desarrollo a medida líder en Colombia y elegida globalmente</h2>
                    <p class="text-niebla/80 text-sm sm:text-base leading-relaxed">
                        Para el año 2031, posicionar a <strong class="text-white">QuillaBit</strong> como el estudio de ingeniería de software a medida referente en la República de Colombia y la opción preferida por startups, Pymes y grandes empresas. Buscamos competir activamente en el mercado internacional, siendo reconocidos por la excelencia técnica y la confianza de nuestros clientes.
                    </p>
                </div>
                <div class="mt-6 pt-4 border-t border-marino/60 text-xs text-sol/80 font-mono">
                    ✦ Liderazgo Nacional & Competitividad Global
                </div>
            </section>

        </div>

        <!-- PILARES FUNDAMENTALES (LOS 4 INNEGOCIABLES) -->
        <div class="bg-marino/60 border border-marino rounded-2xl p-8 sm:p-12 shadow-xl backdrop-blur-md">
            <div class="text-center max-w-2xl mx-auto mb-10">
                <h3 class="text-2xl sm:text-3xl font-bold text-white">Nuestros Pilares Fundamentales</h3>
                <p class="text-sm text-niebla/70 mt-2">Los principios que guían la arquitectura de cada proyecto en QuillaBit</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                
                <!-- Pilar 1 -->
                <div class="p-5 rounded-xl bg-abismo/60 border border-marino/80 hover:border-turquesa/40 transition-colors">
                    <span class="text-turquesa font-mono font-bold text-xs">01</span>
                    <h4 class="text-lg font-bold text-white mt-1 mb-2">Transparencia en Entregables</h4>
                    <p class="text-xs sm:text-sm text-niebla/70 leading-relaxed">
                        Comunicación clara y reportes continuos sobre el estado del proyecto. Sin sorpresas técnicas ni costos ocultos.
                    </p>
                </div>

                <!-- Pilar 2 -->
                <div class="p-5 rounded-xl bg-abismo/60 border border-marino/80 hover:border-turquesa/40 transition-colors">
                    <span class="text-turquesa font-mono font-bold text-xs">02</span>
                    <h4 class="text-lg font-bold text-white mt-1 mb-2">Seguridad ACID</h4>
                    <p class="text-xs sm:text-sm text-niebla/70 leading-relaxed">
                        Integridad total de datos, transacciones confiables e implementaciones blindadas contra vulnerabilidades.
                    </p>
                </div>

                <!-- Pilar 3 -->
                <div class="p-5 rounded-xl bg-abismo/60 border border-marino/80 hover:border-sol/40 transition-colors">
                    <span class="text-sol font-mono font-bold text-xs">03</span>
                    <h4 class="text-lg font-bold text-white mt-1 mb-2">Innovación Continua</h4>
                    <p class="text-xs sm:text-sm text-niebla/70 leading-relaxed">
                        Adopción constante de mejores herramientas, optimización de flujos y propuestas de valor acordes al mercado.
                    </p>
                </div>

                <!-- Pilar 4 -->
                <div class="p-5 rounded-xl bg-abismo/60 border border-marino/80 hover:border-sol/40 transition-colors">
                    <span class="text-sol font-mono font-bold text-xs">04</span>
                    <h4 class="text-lg font-bold text-white mt-1 mb-2">Código Limpio y Escalable</h4>
                    <p class="text-xs sm:text-sm text-niebla/70 leading-relaxed">
                        Patrones de diseño legibles, modulares y preparados para soportar el crecimiento constante del negocio.
                    </p>
                </div>

            </div>
        </div>

    </div>
</main>

<?php require_once __DIR__ . '/../layouts/footer.php'; ?>