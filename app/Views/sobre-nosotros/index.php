<?php 
$pageTitle = "Sobre Nosotros | Historia, Filosofía y Equipo";
require_once __DIR__ . '/../layouts/header.php'; 
?>

<main class="pt-20 overflow-hidden">

    <!-- ========================================== -->
    <!-- 1. HERO Y ORIGEN DE LA MARCA -->
    <!-- ========================================== -->
    <section class="relative bg-abismo py-20 lg:py-28 border-b border-marino">
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[500px] h-[500px] bg-turquesa/10 rounded-full blur-[120px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="max-w-3xl mx-auto text-center space-y-4">
                <span class="inline-block px-4 py-1.5 rounded-full bg-turquesa/10 border border-turquesa/30 text-turquesa font-bold text-xs tracking-wider uppercase">
                    Nuestra Identidad & Origen
                </span>
                <h1 class="text-4xl sm:text-6xl font-extrabold text-white tracking-tight leading-tight">
                    Transformamos la complejidad del mundo físico en <span class="text-transparent bg-clip-text bg-gradient-to-r from-turquesa via-niebla to-sol">soluciones digitales sencillas</span>.
                </h1>
                <p class="text-lg text-niebla/80 font-normal leading-relaxed pt-2">
                    Nacidos en la calidez e innovación de <strong class="text-white">Barranquilla, Atlántico</strong>, combinamos la identidad cultural de nuestra tierra (<strong>Quilla</strong>) con la unidad fundamental de la ingeniería de software (<strong>Bit</strong>).
                </p>
            </div>
        </div>
    </section>

    <!-- ========================================== -->
    <!-- 2. HISTORIA & MANIFIESTO CORPORATIVO -->
    <!-- ========================================== -->
    <section class="py-20 bg-abismo border-b border-marino">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                
                <div class="lg:col-span-6 space-y-6">
                    <span class="text-sol font-bold text-sm tracking-wider uppercase">Cómo Comenzamos</span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-white leading-tight">
                        Impulsados por la pasión de resolver problemas reales
                    </h2>
                    <p class="text-niebla/80 text-base leading-relaxed">
                        <strong class="text-white">QuillaBit</strong> nació de la convicción de su fundador por transformar procesos estresantes y manuales en herramientas digitales ágiles. Lo que inició como una búsqueda individual por formalizar el desarrollo de software de alto nivel, rápidamente se convirtió en un estudio tecnológico impulsado por profesionales que comparten el mismo estándar de excelencia.
                    </p>
                    <p class="text-niebla/80 text-base leading-relaxed">
                        Nuestro propósito central no es vender líneas de código, sino ser el aliado estratégico que acompaña a pequeñas, medianas y grandes empresas en su salto hacia la competitividad digital, garantizando la transición de lo físico a lo digital de manera transparente y eficiente.
                    </p>
                </div>

                <div class="lg:col-span-6">
                    <div class="bg-marino/70 border border-marino p-8 sm:p-10 rounded-2xl shadow-2xl space-y-6 relative">
                        <div class="w-12 h-12 rounded-xl bg-turquesa/10 border border-turquesa/30 flex items-center justify-center text-turquesa mb-4">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                        </div>
                        <h3 class="text-2xl font-bold text-white">Nuestra Filosofía de Trabajo</h3>
                        <p class="text-niebla/80 text-sm leading-relaxed">
                            Mantenemos una comunicación cercana y transparente con cada cliente. No nos limitamos a ejecutar requerimientos: nos involucramos en las ideas, aportamos visión técnica y propondremos alternativas estratégicas para maximizar las probabilidades de éxito comercial en el mercado.
                        </p>
                        <div class="pt-4 border-t border-abismo/60 flex items-center gap-3 text-xs text-sol font-semibold">
                            <span>✔ Soluciones Adaptadas</span>
                            <span>•</span>
                            <span>✔ Acompañamiento Continuo</span>
                            <span>•</span>
                            <span>✔ Innovación Proactiva</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ========================================== -->
    <!-- 3. EL EQUIPO LÍDER (NUESTRO TALENTO) -->
    <!-- ========================================== -->
    <section class="py-24 bg-abismo border-b border-marino">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-turquesa font-bold text-sm tracking-wider uppercase">Talento Humano</span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-white mt-2">Liderazgo y Mentes detrás de QuillaBit</h2>
                <p class="text-niebla/70 mt-3">Un equipo multidisciplinario enfocado en la excelencia en diseño, arquitectura e implementación.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                
                <!-- Miembro 1: Emanuel Villalobos -->
                <div class="bg-marino/60 border border-marino hover:border-turquesa/50 rounded-2xl p-8 transition-all duration-300 hover:-translate-y-1 group flex flex-col justify-between">
                    <div>
                        <div class="w-16 h-16 rounded-2xl bg-turquesa/10 border border-turquesa/30 text-turquesa flex items-center justify-center font-extrabold text-2xl mb-6 group-hover:scale-105 transition-transform">
                            EV
                        </div>
                        <h3 class="text-2xl font-bold text-white">Emanuel Villalobos</h3>
                        <p class="text-turquesa font-semibold text-sm mb-4">Chief Executive Officer (CEO) & Tech Leader</p>
                        <p class="text-niebla/70 text-sm leading-relaxed">
                            Fundador y estratega principal de QuillaBit. Con un liderazgo orientado a la resolución de problemas complejos y una visión expansiva, respalda la dirección técnica, asegurando que cada proyecto cumpla con los objetivos comerciales del cliente y la visión general de la compañía.
                        </p>
                    </div>
                    <div class="mt-6 pt-4 border-t border-abismo/50 text-xs text-niebla/50 font-mono">
                        Estrategia • Arquitectura • Liderazgo
                    </div>
                </div>

                <!-- Miembro 2: Cristian Lopez -->
                <div class="bg-marino/60 border border-marino hover:border-sol/50 rounded-2xl p-8 transition-all duration-300 hover:-translate-y-1 group flex flex-col justify-between">
                    <div>
                        <div class="w-16 h-16 rounded-2xl bg-sol/10 border border-sol/30 text-sol flex items-center justify-center font-extrabold text-2xl mb-6 group-hover:scale-105 transition-transform">
                            CL
                        </div>
                        <h3 class="text-2xl font-bold text-white">Cristian López</h3>
                        <p class="text-sol font-semibold text-sm mb-4">Lead Web Designer & UX/UI Specialist</p>
                        <p class="text-niebla/70 text-sm leading-relaxed">
                            Socio cofundador y especialista en diseño de experiencias. Enfocado en el perfeccionismo estético y funcional, se encarga de conceptualizar interfaces intuitivas, atractivas y optimizadas para la interacción continua del usuario final.
                        </p>
                    </div>
                    <div class="mt-6 pt-4 border-t border-abismo/50 text-xs text-niebla/50 font-mono">
                        Diseño UX/UI • Frontend Layouts • Prototipado
                    </div>
                </div>

                <!-- Miembro 3: Yoenderson Gonzalez -->
                <div class="bg-marino/60 border border-marino hover:border-turquesa/50 rounded-2xl p-8 transition-all duration-300 hover:-translate-y-1 group flex flex-col justify-between">
                    <div>
                        <div class="w-16 h-16 rounded-2xl bg-turquesa/10 border border-turquesa/30 text-turquesa flex items-center justify-center font-extrabold text-2xl mb-6 group-hover:scale-105 transition-transform">
                            YG
                        </div>
                        <h3 class="text-2xl font-bold text-white">Yoenderson González</h3>
                        <p class="text-turquesa font-semibold text-sm mb-4">Senior FullStack Developer & API Engineer</p>
                        <p class="text-niebla/70 text-sm leading-relaxed">
                            Socio cofundador y desarrollador FullStack. Pieza fundamental en la articulación de proyectos, liderando la comunicación fluida entre el frontend, las APIs internas y los servicios backend para asegurar plataformas sólidas e integradas.
                        </p>
                    </div>
                    <div class="mt-6 pt-4 border-t border-abismo/50 text-xs text-niebla/50 font-mono">
                        FullStack • Integración API • Lógica Interna
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- ========================================== -->
    <!-- 4. VISIÓN A FUTURO Y EXPANSIÓN -->
    <!-- ========================================== -->
    <section class="py-20 bg-abismo relative">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-6 relative z-10">
            <span class="text-sol font-bold text-sm tracking-wider uppercase">Proyección Internacional</span>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-white">
                Construyendo el camino hacia la expansión global
            </h2>
            <p class="text-niebla/80 text-base leading-relaxed">
                Nuestra meta no es competir con el mercado, sino hacer triunfar a quienes confían en nosotros. Nos consolidamos día a día como un estudio de desarrollo de software de alto nivel, proyectando nuestro alcance desde la región Caribe hacia el mercado internacional, siendo partícipes directos en la historia de éxito de cada uno de nuestros clientes.
            </p>
            <div class="pt-6">
                <a href="<?= BASE_URL ?>/#contacto" class="inline-block bg-turquesa hover:bg-turquesa/90 text-abismo font-bold px-8 py-4 rounded-xl transition-all shadow-lg shadow-turquesa/20">
                    Trabajemos Juntos
                </a>
            </div>
        </div>
    </section>

</main>

<?php require_once __DIR__ . '/../layouts/footer.php'; ?>